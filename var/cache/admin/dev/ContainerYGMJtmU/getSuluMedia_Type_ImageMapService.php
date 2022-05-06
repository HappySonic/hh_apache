<?php

namespace ContainerYGMJtmU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluMedia_Type_ImageMapService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sulu_media.type.image_map' shared service.
     *
     * @return \Sulu\Bundle\MediaBundle\Content\Types\ImageMapContentType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Content/ContentTypeInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Content/ComplexContentType.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Content/ContentTypeExportInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Content/PreResolvableContentTypeInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/MediaBundle/Content/Types/ImageMapContentType.php';

        return $container->services['sulu_media.type.image_map'] = new \Sulu\Bundle\MediaBundle\Content\Types\ImageMapContentType(($container->services['sulu.content.type_manager'] ?? $container->getSulu_Content_TypeManagerService()));
    }
}
