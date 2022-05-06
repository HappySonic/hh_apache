<?php

namespace Container59KXm3P;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSulu_Content_WebspaceStructureProviderService extends App_KernelProdContainer
{
    /*
     * Gets the public 'sulu.content.webspace_structure_provider' shared service.
     *
     * @return \Sulu\Component\Webspace\StructureProvider\WebspaceStructureProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Webspace/StructureProvider/WebspaceStructureProviderInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Webspace/StructureProvider/WebspaceStructureProvider.php';
        include_once \dirname(__DIR__, 5).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/FileCache.php';
        include_once \dirname(__DIR__, 5).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/FilesystemCache.php';

        return $container->services['sulu.content.webspace_structure_provider'] = new \Sulu\Component\Webspace\StructureProvider\WebspaceStructureProvider(($container->services['.container.private.twig'] ?? $container->load('get_Container_Private_TwigService')), ($container->services['sulu.content.structure_manager'] ?? $container->getSulu_Content_StructureManagerService()), new \Doctrine\Common\Cache\FilesystemCache(($container->targetDir.''.'/sulu/webspace_structures')));
    }
}
