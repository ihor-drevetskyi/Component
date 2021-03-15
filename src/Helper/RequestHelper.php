<?php

namespace ComponentBundle\Helper;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

/**
 * Class RequestHelper
 * @package ComponentBundle\Helper
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
class RequestHelper implements RequestHelperInterface
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
     * RequestHelper constructor.
     * @param RouterInterface $router
     * @param RequestStack $request_stack
     */
    public function __construct(RouterInterface $router, RequestStack $request_stack)
    {
        $this->router = $router;
        $this->request = $request_stack->getCurrentRequest();
    }

    /**
     * Current URL WITHOUT query string
     */
    public function getCurrentUrl(): string
    {
        return $this->router->generate(
            $this->request->get('_route'),
            $this->request->get('_route_params'),
            UrlGeneratorInterface::ABSOLUTE_URL
        );
    }

    /**
     * Current URL INCLUDING query string
     */
    public function getCurrentUrlWithQueryString(): string
    {
        $duplicate_request = $this->request->duplicate();
        $qs = $duplicate_request->getQueryString();

        if ($qs) {
            $qs = '?' . $qs;
        } else {
            $qs = '';
        }

        $this->request->overrideGlobals();

        return $this->getCurrentUrl() . $qs;
    }
}
