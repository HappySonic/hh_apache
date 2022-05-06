<?php

namespace ContainerIwAkOJC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSulu_Content_Type_BlockService extends App_KernelProdContainer
{
    /*
     * Gets the public 'sulu.content.type.block' shared service.
     *
     * @return \Sulu\Component\Content\Types\BlockContentType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Content/ContentTypeInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Content/ComplexContentType.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Content/ContentTypeExportInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Content/PreResolvableContentTypeInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Content/Types/BlockContentType.php';

        return $container->services['sulu.content.type.block'] = new \Sulu\Component\Content\Types\BlockContentType(($container->services['sulu.content.type_manager'] ?? $container->getSulu_Content_TypeManagerService()), 'i18n', ($container->services['sulu_core.webspace.request_analyzer'] ?? $container->getSuluCore_Webspace_RequestAnalyzerService()), NULL, new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['sulu.content.type.block.hidden_visitor'] ?? ($container->privates['sulu.content.type.block.hidden_visitor'] = new \Sulu\Component\Content\Types\Block\HiddenBlockVisitor()));
            yield 1 => ($container->privates['sulu.content.type.block.segment_visitor'] ?? $container->load('getSulu_Content_Type_Block_SegmentVisitorService'));
            yield 2 => ($container->privates['sulu.content.type.block.schedule_visitor'] ?? $container->load('getSulu_Content_Type_Block_ScheduleVisitorService'));
        }, 3));
    }
}
