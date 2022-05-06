<?php

namespace ContainerQpTHIsG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluPage_Document_Subscriber_ContentService extends App_KernelProdContainer
{
    /*
     * Gets the private 'sulu_page.document.subscriber.content' shared service.
     *
     * @return \Sulu\Component\Content\Document\Subscriber\StructureSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Content/Document/Subscriber/StructureSubscriber.php';

        return $container->privates['sulu_page.document.subscriber.content'] = new \Sulu\Component\Content\Document\Subscriber\StructureSubscriber(($container->services['sulu_document_manager.property_encoder'] ?? $container->getSuluDocumentManager_PropertyEncoderService()), ($container->services['sulu.content.type_manager'] ?? $container->getSulu_Content_TypeManagerService()), ($container->services['sulu_document_manager.document_inspector'] ?? $container->getSuluDocumentManager_DocumentInspectorService()), ($container->services['sulu_page.compat.structure.legacy_property_factory'] ?? $container->getSuluPage_Compat_Structure_LegacyPropertyFactoryService()), ($container->services['sulu_core.webspace.webspace_manager'] ?? $container->getSuluCore_Webspace_WebspaceManagerService()), $container->parameters['sulu.content.structure.default_types']);
    }
}
