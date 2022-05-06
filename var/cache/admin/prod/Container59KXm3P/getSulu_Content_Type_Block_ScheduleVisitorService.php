<?php

namespace Container59KXm3P;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSulu_Content_Type_Block_ScheduleVisitorService extends App_KernelProdContainer
{
    /*
     * Gets the private 'sulu.content.type.block.schedule_visitor' shared service.
     *
     * @return \Sulu\Component\Content\Types\Block\ScheduleBlockVisitor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Content/Types/Block/BlockVisitorInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Content/Types/Block/ScheduleBlockVisitor.php';

        return $container->privates['sulu.content.type.block.schedule_visitor'] = new \Sulu\Component\Content\Types\Block\ScheduleBlockVisitor(($container->services['sulu_core.webspace.request_analyzer'] ?? $container->getSuluCore_Webspace_RequestAnalyzerService()), ($container->privates['sulu_http_cache.cache_lifetime.request_store'] ?? $container->load('getSuluHttpCache_CacheLifetime_RequestStoreService')));
    }
}
