<?php

namespace ContainerLNhbh91;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluWebsite_Sitemap_PoolService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sulu_website.sitemap.pool' shared service.
     *
     * @return \Sulu\Bundle\WebsiteBundle\Sitemap\SitemapProviderPool
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/WebsiteBundle/Sitemap/SitemapProviderPoolInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/WebsiteBundle/Sitemap/SitemapProviderPool.php';

        return $container->privates['sulu_website.sitemap.pool'] = new \Sulu\Bundle\WebsiteBundle\Sitemap\SitemapProviderPool(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['sulu_page.pages_sitemap_provider'] ?? $container->load('getSuluPage_PagesSitemapProviderService'));
        }, 1));
    }
}