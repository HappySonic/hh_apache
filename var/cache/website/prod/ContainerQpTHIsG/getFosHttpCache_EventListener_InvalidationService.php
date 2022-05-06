<?php

namespace ContainerQpTHIsG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFosHttpCache_EventListener_InvalidationService extends App_KernelProdContainer
{
    /*
     * Gets the private 'fos_http_cache.event_listener.invalidation' shared service.
     *
     * @return \FOS\HttpCacheBundle\EventListener\InvalidationListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/friendsofsymfony/http-cache-bundle/src/EventListener/InvalidationListener.php';

        return $container->privates['fos_http_cache.event_listener.invalidation'] = new \FOS\HttpCacheBundle\EventListener\InvalidationListener(($container->services['fos_http_cache.cache_manager'] ?? $container->getFosHttpCache_CacheManagerService()), ($container->services['router'] ?? $container->getRouterService()), ($container->privates['fos_http_cache.rule_matcher.must_invalidate'] ?? $container->getFosHttpCache_RuleMatcher_MustInvalidateService()), NULL);
    }
}
