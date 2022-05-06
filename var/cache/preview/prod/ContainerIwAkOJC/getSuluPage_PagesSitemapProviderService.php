<?php

namespace ContainerIwAkOJC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluPage_PagesSitemapProviderService extends App_KernelProdContainer
{
    /*
     * Gets the private 'sulu_page.pages_sitemap_provider' shared service.
     *
     * @return \Sulu\Bundle\PageBundle\Sitemap\PagesSitemapProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/WebsiteBundle/Sitemap/SitemapProviderInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/WebsiteBundle/Sitemap/AbstractSitemapProvider.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/PageBundle/Sitemap/PagesSitemapProvider.php';

        return $container->privates['sulu_page.pages_sitemap_provider'] = new \Sulu\Bundle\PageBundle\Sitemap\PagesSitemapProvider(($container->services['sulu_page.content_repository'] ?? $container->getSuluPage_ContentRepositoryService()), ($container->services['sulu_core.webspace.webspace_manager'] ?? $container->getSuluCore_Webspace_WebspaceManagerService()), 'prod', ($container->privates['sulu_security.access_control_manager'] ?? $container->getSuluSecurity_AccessControlManagerService()));
    }
}
