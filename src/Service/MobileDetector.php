<?php

namespace ComponentBundle\Service;

use ComponentBundle\Helper\DeviceView;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Class MobileDetector
 * @package ComponentBundle\Service
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
class MobileDetector
{
    /**
     * @var object|\SunCat\MobileDetectBundle\DeviceDetector\MobileDetector|null
     */
    protected $mobile_detector;

    /**
     * @var DeviceView
     */
    protected DeviceView $device_view;

    /**
     * MobileDetector constructor.
     * @param DeviceView $device_view
     * @param ContainerInterface $container
     */
    public function __construct(
        DeviceView $device_view,
        ContainerInterface $container
    ) {
        $this->device_view = $device_view;
        $this->mobile_detector = $container->get(\SunCat\MobileDetectBundle\DeviceDetector\MobileDetector::class);
    }

    /**
     * Проверка является ли текущий ДЕВАЙС мобильным
     * не учитывает куку, для проерки куки, какой view, юзать isMobileView()
     * @return boolean
     */
    public function isMobile(): bool
    {
        return $this->mobile_detector->isMobile();
    }

    /**
     * Проверка является ли текущий VIEW мобильным с учетом куки
     * не проверяет девайс, для проверки девайса юзать isMobile()
     *
     * @return bool
     */
    public function isMobileView(): bool
    {
        return $this->device_view->isMobileView();
    }
}
