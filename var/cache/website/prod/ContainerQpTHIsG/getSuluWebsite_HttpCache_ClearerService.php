<?php

namespace ContainerQpTHIsG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluWebsite_HttpCache_ClearerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'sulu_website.http_cache.clearer' shared service.
     *
     * @return \Sulu\Bundle\WebsiteBundle\Cache\CacheClearer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/WebsiteBundle/Cache/CacheClearerInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/WebsiteBundle/Cache/CacheClearer.php';

        return $container->services['sulu_website.http_cache.clearer'] = new \Sulu\Bundle\WebsiteBundle\Cache\CacheClearer(($container->services['.container.private.filesystem'] ?? ($container->services['.container.private.filesystem'] = new \Symfony\Component\Filesystem\Filesystem())), 'prod', ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), \dirname(__DIR__, 4), ($container->privates['sulu_http_cache.cache_manager'] ?? $container->load('getSuluHttpCache_CacheManagerService')));
    }
}
