<?php

namespace ComponentBundle\EventListener;

use LogicException;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Class AbstractFlashListener
 * @package ComponentBundle\EventListener
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
abstract class AbstractFlashListener implements EventSubscriberInterface
{
    /**
     * @var SessionInterface
     */
    protected SessionInterface $session;

    /**
     * @var TranslatorInterface
     */
    protected TranslatorInterface $translator;

    /**
     * AbstractFlashListener constructor.
     * @param SessionInterface $session
     * @param TranslatorInterface $translator
     */
    public function __construct(SessionInterface $session, TranslatorInterface $translator)
    {
        $this->session = $session;
        $this->translator = $translator;
    }

    /**
     * Adds a flash message to the current session for type.
     * @param string $type
     * @param string $message
     * @throws LogicException
     */
    protected function addFlash(string $type, string $message): void
    {
        $this->session->getFlashBag()->add($type, $message);
    }

    /**
     * @param string $message
     * @param array $params
     * @param string|null $domain
     * @return string
     */
    protected function trans(string $message, array $params = [], string $domain = null): string
    {
        return $this->translator->trans($message, $params, $domain);
    }
}
