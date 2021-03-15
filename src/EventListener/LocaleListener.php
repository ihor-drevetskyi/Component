<?php

namespace ComponentBundle\EventListener;

use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\HttpKernel\Event\ResponseEvent;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Class LocaleListener
 * @package ComponentBundle\EventListener
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
final class LocaleListener implements EventSubscriberInterface
{
    /**
     * @var string|null
     */
    protected ?string $default_locale;

    /**
     * @var string|null
     */
    protected ?string $current_locale;

    /**
     * @var array|null
     */
    protected ?array $available_locales;

    /**
     * LocaleListener constructor.
     * @param ContainerInterface $container
     */
    public function __construct(ContainerInterface $container)
    {
        $this->current_locale = $container->getParameter('locale');
        $this->default_locale = $container->getParameter('locale');
        $this->available_locales = $container->getParameter('locales');
    }

    /**
     * @return array|array[][]
     */
    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::RESPONSE => ['setContentLanguage'],
            KernelEvents::REQUEST => [['onKernelRequest', 20]]
        ];
    }

    /**
     * @param RequestEvent $event
     */
    public function onKernelRequest(RequestEvent $event)
    {
        if (!$event->isMasterRequest()) {
            return;
        }

        $request = $event->getRequest();

        if (in_array($request->get('_locale'), $this->available_locales)) {
            $request->setLocale($request->get('_locale'));
        } elseif (in_array($request->get('locale'), $this->available_locales)) {
            $request->setLocale($request->get('locale'));
        } elseif ($request->headers->has("X-LOCALE")) {
            $locale = $request->headers->get('X-LOCALE');
            if (in_array($locale, $this->available_locales)) {
                $request->setLocale($locale);
            } else {
                $request->setLocale($this->default_locale);
            }
        } else {
            $request->setLocale($this->default_locale);
        }

        // Set current locale
        $this->current_locale = $request->getLocale();
    }

    /**
     * @param ResponseEvent $event
     * @return mixed
     */
    public function setContentLanguage(ResponseEvent $event)
    {
        $response = $event->getResponse();

        if ($this->current_locale) {
            $response->headers->add(['Content-Language' => $this->current_locale]);
        }

        return $response;
    }
}
