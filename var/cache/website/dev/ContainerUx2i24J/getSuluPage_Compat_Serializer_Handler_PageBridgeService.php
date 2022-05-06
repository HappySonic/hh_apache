<?php

namespace ContainerUx2i24J;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluPage_Compat_Serializer_Handler_PageBridgeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sulu_page.compat.serializer.handler.page_bridge' shared service.
     *
     * @return \Sulu\Component\Content\Compat\Serializer\PageBridgeHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/jms/serializer/src/Handler/SubscribingHandlerInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Content/Compat/Serializer/PageBridgeHandler.php';

        return $container->privates['sulu_page.compat.serializer.handler.page_bridge'] = new \Sulu\Component\Content\Compat\Serializer\PageBridgeHandler(($container->services['sulu_document_manager.document_inspector'] ?? $container->getSuluDocumentManager_DocumentInspectorService()), ($container->services['sulu_page.compat.structure.legacy_property_factory'] ?? $container->getSuluPage_Compat_Structure_LegacyPropertyFactoryService()), ($container->services['sulu_page.structure.factory'] ?? $container->getSuluPage_Structure_FactoryService()));
    }
}
