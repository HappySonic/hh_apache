<?php

namespace ContainerUx2i24J;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSulu_Cache_Warmer_StructureService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sulu.cache.warmer.structure' shared service.
     *
     * @return \Sulu\Bundle\CoreBundle\Cache\StructureWarmer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/CoreBundle/Cache/StructureWarmer.php';

        return $container->privates['sulu.cache.warmer.structure'] = new \Sulu\Bundle\CoreBundle\Cache\StructureWarmer(($container->services['sulu.content.structure_manager'] ?? $container->getSulu_Content_StructureManagerService()));
    }
}
