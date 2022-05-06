<?php

namespace Container59KXm3P;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluDocumentManager_Document_Subscriber_ExtensionService extends App_KernelProdContainer
{
    /*
     * Gets the private 'sulu_document_manager.document.subscriber.extension' shared service.
     *
     * @return \Sulu\Component\Content\Document\Subscriber\ExtensionSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Content/Document/Subscriber/ExtensionSubscriber.php';

        return $container->privates['sulu_document_manager.document.subscriber.extension'] = new \Sulu\Component\Content\Document\Subscriber\ExtensionSubscriber(($container->services['sulu_document_manager.property_encoder'] ?? $container->getSuluDocumentManager_PropertyEncoderService()), ($container->services['sulu_page.extension.manager'] ?? $container->load('getSuluPage_Extension_ManagerService')), ($container->services['sulu_document_manager.document_inspector'] ?? $container->getSuluDocumentManager_DocumentInspectorService()), ($container->privates['sulu_document_manager.namespace_registry'] ?? $container->getSuluDocumentManager_NamespaceRegistryService()));
    }
}
