<?php

namespace ContainerUx2i24J;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluWebsite_RedirectExceptionListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sulu_website.redirect_exception_listener' shared service.
     *
     * @return \Sulu\Bundle\WebsiteBundle\EventListener\RedirectExceptionSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/WebsiteBundle/EventListener/RedirectExceptionSubscriber.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/WebsiteBundle/Locale/DefaultLocaleProviderInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/WebsiteBundle/Locale/PortalDefaultLocaleProvider.php';

        $a = ($container->services['sulu_core.webspace.request_analyzer'] ?? $container->getSuluCore_Webspace_RequestAnalyzerService());

        return $container->privates['sulu_website.redirect_exception_listener'] = new \Sulu\Bundle\WebsiteBundle\EventListener\RedirectExceptionSubscriber(($container->services['router'] ?? $container->getRouterService()), $a, new \Sulu\Bundle\WebsiteBundle\Locale\PortalDefaultLocaleProvider($a), ($container->privates['sulu_core.webspace.webspace_manager.url_replacer'] ?? ($container->privates['sulu_core.webspace.webspace_manager.url_replacer'] = new \Sulu\Component\Webspace\Url\Replacer())));
    }
}
