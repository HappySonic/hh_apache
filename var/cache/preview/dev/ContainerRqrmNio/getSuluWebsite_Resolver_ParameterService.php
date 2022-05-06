<?php

namespace ContainerRqrmNio;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluWebsite_Resolver_ParameterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sulu_website.resolver.parameter' shared service.
     *
     * @return \Sulu\Bundle\WebsiteBundle\Resolver\ParameterResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/WebsiteBundle/Resolver/ParameterResolverInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/WebsiteBundle/Resolver/ParameterResolver.php';

        return $container->services['sulu_website.resolver.parameter'] = new \Sulu\Bundle\WebsiteBundle\Resolver\ParameterResolver(($container->services['sulu_website.resolver.structure'] ?? $container->getSuluWebsite_Resolver_StructureService()), ($container->privates['sulu_website.resolver.request_analyzer'] ?? $container->load('getSuluWebsite_Resolver_RequestAnalyzerService')), ($container->services['sulu_core.webspace.webspace_manager'] ?? $container->getSuluCore_Webspace_WebspaceManagerService()), ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), '/_sulu_segment_switch', $container->parameters['sulu_website.enabled_twig_attributes']);
    }
}
