<?php

namespace ComponentBundle\DependencyInjection;

use Exception;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\DependencyInjection\Extension\PrependExtensionInterface;

/**
 * Class ComponentExtension
 * @package ComponentBundle\DependencyInjection
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
final class ComponentExtension extends Extension implements PrependExtensionInterface
{
    /**
     * @param ContainerBuilder $container
     * @throws Exception
     */
    public function prepend(ContainerBuilder $container)
    {
        $bundles = $container->getParameter('kernel.bundles');
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config/packages'));

        $loader->load('cache.yaml');
        $loader->load('routing.yaml');
        $loader->load('validator.yaml');
        $loader->load('framework.yaml');
        $loader->load('translation.yaml');

        if (isset($bundles['TwigBundle'])) {
            $loader->load('twig.yaml');
        }

        if (isset($bundles['DoctrineBundle'])) {
            $loader->load('doctrine.yaml');
        }

        if (isset($bundles['MobileDetectBundle'])) {
            $loader->load('mobile_detect.yaml');
        }

        if (isset($bundles['VichUploaderBundle'])) {
            $loader->load('vich_uploader.yaml');
        }

        if (isset($bundles['JMSI18nRoutingBundle'])) {
            $loader->load('jms.yaml');
        }

        if (isset($bundles['DoctrineMigrationsBundle'])) {
            $loader->load('doctrine_migrations.yaml');
        }

        if (isset($bundles['SensioFrameworkExtraBundle'])) {
            $loader->load('sensio_framework_extra.yaml');
        }

        if (isset($bundles['StofDoctrineExtensionsBundle'])) {
            $loader->load('stof_doctrine_extensions.yaml');
        }
    }

    /**
     * @param array $configs
     * @param ContainerBuilder $container
     * @throws Exception
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
        $loader->load('services.yaml');
    }
}
