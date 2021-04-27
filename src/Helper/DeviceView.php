<?php

namespace ComponentBundle\Helper;

use Symfony\Component\HttpFoundation\RequestStack;
use SunCat\MobileDetectBundle\Helper\DeviceView as BaseDeviceView;

/**
 * Class DeviceView
 * @package ComponentBundle\Helper
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
class DeviceView extends BaseDeviceView
{
    /**
     * DeviceView constructor.
     * @param RequestStack|null $request_stack
     */
    public function __construct(RequestStack $request_stack = null)
    {
        parent::__construct($request_stack);

        if (!$request_stack || !$this->request = $request_stack->getMasterRequest()) {
            $this->viewType = self::VIEW_NOT_MOBILE;

            return;
        }

        if (
            $this->request->server->has('HTTP_DEVICE_TYPE') &&
            $this->request->server->get('HTTP_DEVICE_TYPE') != 'desktop'
        ) {
            $this->viewType = self::VIEW_MOBILE;
        } else {
            $this->viewType = self::VIEW_FULL;
        }

        $this->requestedViewType = $this->viewType;
    }
}
