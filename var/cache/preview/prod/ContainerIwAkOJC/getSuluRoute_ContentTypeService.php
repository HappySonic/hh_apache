<?php

namespace ContainerIwAkOJC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluRoute_ContentTypeService extends App_KernelProdContainer
{
    /*
     * Gets the public 'sulu_route.content_type' shared service.
     *
     * @return \Sulu\Bundle\RouteBundle\Content\Type\RouteContentType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Content/ContentTypeInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Content/ContentTypeExportInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Content/SimpleContentType.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/RouteBundle/Content/Type/RouteContentType.php';

        return $container->services['sulu_route.content_type'] = new \Sulu\Bundle\RouteBundle\Content\Type\RouteContentType();
    }
}
