<?php

namespace Container59KXm3P;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Orm_DefaultMetadataCacheWarmerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'doctrine.orm.default_metadata_cache_warmer' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\CacheWarmer\DoctrineMetadataCacheWarmer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/symfony/framework-bundle/CacheWarmer/AbstractPhpFileCacheWarmer.php';
        include_once \dirname(__DIR__, 5).'/vendor/doctrine/doctrine-bundle/CacheWarmer/DoctrineMetadataCacheWarmer.php';

        return $container->privates['doctrine.orm.default_metadata_cache_warmer'] = new \Doctrine\Bundle\DoctrineBundle\CacheWarmer\DoctrineMetadataCacheWarmer(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->targetDir.''.'/doctrine/orm/default_metadata.php'));
    }
}
