<?php

namespace ContainerQpTHIsG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluHttpCache_CacheLifetime_RequestStoreService extends App_KernelProdContainer
{
    /*
     * Gets the private 'sulu_http_cache.cache_lifetime.request_store' shared service.
     *
     * @return \Sulu\Bundle\HttpCacheBundle\CacheLifetime\CacheLifetimeRequestStore
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/HttpCacheBundle/CacheLifetime/CacheLifetimeRequestStore.php';

        return $container->privates['sulu_http_cache.cache_lifetime.request_store'] = new \Sulu\Bundle\HttpCacheBundle\CacheLifetime\CacheLifetimeRequestStore(($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }
}
