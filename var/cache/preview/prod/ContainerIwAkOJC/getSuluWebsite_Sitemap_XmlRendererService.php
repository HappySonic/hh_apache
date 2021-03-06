<?php

namespace ContainerIwAkOJC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluWebsite_Sitemap_XmlRendererService extends App_KernelProdContainer
{
    /*
     * Gets the private 'sulu_website.sitemap.xml_renderer' shared service.
     *
     * @return \Sulu\Bundle\WebsiteBundle\Sitemap\XmlSitemapRenderer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/WebsiteBundle/Sitemap/XmlSitemapRendererInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/WebsiteBundle/Sitemap/XmlSitemapRenderer.php';

        return $container->privates['sulu_website.sitemap.xml_renderer'] = new \Sulu\Bundle\WebsiteBundle\Sitemap\XmlSitemapRenderer(($container->privates['sulu_website.sitemap.pool'] ?? $container->load('getSuluWebsite_Sitemap_PoolService')), ($container->services['.container.private.twig'] ?? $container->get_Container_Private_TwigService()));
    }
}
