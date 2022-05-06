<?php

namespace ContainerUx2i24J;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluMedia_ImagePropertiesProviderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sulu_media.image_properties_provider' shared service.
     *
     * @return \Sulu\Bundle\MediaBundle\Media\PropertiesProvider\ImagePropertiesProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/MediaBundle/Media/PropertiesProvider/MediaPropertiesProviderInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/MediaBundle/Media/PropertiesProvider/ImagePropertiesProvider.php';

        return $container->privates['sulu_media.image_properties_provider'] = new \Sulu\Bundle\MediaBundle\Media\PropertiesProvider\ImagePropertiesProvider(($container->privates['sulu_media.adapter.gd'] ?? ($container->privates['sulu_media.adapter.gd'] = new \Imagine\Gd\Imagine())), ($container->privates['sulu_media.adapter.svg'] ?? ($container->privates['sulu_media.adapter.svg'] = new \Contao\ImagineSvg\Imagine())));
    }
}
