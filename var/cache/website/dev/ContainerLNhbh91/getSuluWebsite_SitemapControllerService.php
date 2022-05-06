<?php

namespace ContainerLNhbh91;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluWebsite_SitemapControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sulu_website.sitemap_controller' shared service.
     *
     * @return \Sulu\Bundle\WebsiteBundle\Controller\SitemapController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/WebsiteBundle/Controller/SitemapController.php';

        return $container->services['sulu_website.sitemap_controller'] = new \Sulu\Bundle\WebsiteBundle\Controller\SitemapController(($container->privates['sulu_website.sitemap.xml_renderer'] ?? $container->load('getSuluWebsite_Sitemap_XmlRendererService')), ($container->privates['sulu_website.sitemap.pool'] ?? $container->load('getSuluWebsite_Sitemap_PoolService')), ($container->privates['sulu_website.sitemap.xml_dumper'] ?? $container->load('getSuluWebsite_Sitemap_XmlDumperService')), ($container->services['.container.private.filesystem'] ?? ($container->services['.container.private.filesystem'] = new \Symfony\Component\Filesystem\Filesystem())), ($container->services['router'] ?? $container->getRouterService()), 1, true);
    }
}
