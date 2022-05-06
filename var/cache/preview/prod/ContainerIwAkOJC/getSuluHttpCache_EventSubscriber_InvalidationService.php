<?php

namespace ContainerIwAkOJC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluHttpCache_EventSubscriber_InvalidationService extends App_KernelProdContainer
{
    /*
     * Gets the private 'sulu_http_cache.event_subscriber.invalidation' shared service.
     *
     * @return \Sulu\Bundle\HttpCacheBundle\EventSubscriber\InvalidationSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/HttpCacheBundle/EventSubscriber/InvalidationSubscriber.php';

        return $container->privates['sulu_http_cache.event_subscriber.invalidation'] = new \Sulu\Bundle\HttpCacheBundle\EventSubscriber\InvalidationSubscriber(($container->privates['sulu_http_cache.cache_manager'] ?? $container->load('getSuluHttpCache_CacheManagerService')), ($container->services['sulu.content.structure_manager'] ?? $container->getSulu_Content_StructureManagerService()), ($container->services['sulu_document_manager.document_inspector'] ?? $container->getSuluDocumentManager_DocumentInspectorService()), ($container->privates['sulu.content.resource_locator.strategy_pool'] ?? $container->getSulu_Content_ResourceLocator_StrategyPoolService()), ($container->services['sulu_core.webspace.webspace_manager'] ?? $container->getSuluCore_Webspace_WebspaceManagerService()), ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($container->services['sulu_tag.tag_manager'] ?? $container->getSuluTag_TagManagerService()), 'prod');
    }
}
