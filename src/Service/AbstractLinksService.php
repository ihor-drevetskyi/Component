<?php

namespace ComponentBundle\Service;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use ComponentBundle\Helper\RequestHelperInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Knp\DoctrineBehaviors\Contract\Entity\TranslationInterface;
use ComponentBundle\Entity\Translatable\AbstractBaseEntityTranslatableInterface;

/**
 * Class AbstractLinksService
 * @package ComponentBundle\Service
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
abstract class AbstractLinksService
{
    /**
     * @var Request|null
     */
    protected ?Request $request;

    /**
     * @var RouterInterface
     */
    protected RouterInterface $router;

    /**
     * @var ContainerInterface
     */
    protected ContainerInterface $container;

    /**
     * @var RequestHelperInterface
     */
    protected RequestHelperInterface $request_helper;

    /**
     * AbstractLinksService constructor.
     * @param RouterInterface $router
     * @param RequestStack $request_stack
     * @param ContainerInterface $container
     * @param RequestHelperInterface $request_helper
     */
    public function __construct(
        RouterInterface $router,
        RequestStack $request_stack,
        ContainerInterface $container,
        RequestHelperInterface $request_helper
    ) {
        $this->router = $router;
        $this->container = $container;
        $this->request_helper = $request_helper;
        $this->request = $request_stack->getCurrentRequest();
    }

    /**
     * @param AbstractBaseEntityTranslatableInterface $object
     * @param array $parameters
     * @return TranslationInterface
     */
    public function getTranslate(
        AbstractBaseEntityTranslatableInterface $object,
        array $parameters = []
    ): TranslationInterface {
        if (isset($parameters['_locale'])) {
            $translate = $object->translate($parameters['_locale']);
        } else {
            $translate = $object->translate();
        }

        return $translate;
    }

    /**
     * Returns a RedirectResponse to the given URL.
     * @param string $url
     * @param int $status
     * @return RedirectResponse
     */
    protected function redirect(string $url, int $status = 301): RedirectResponse
    {
        return new RedirectResponse($url, $status);
    }
}
