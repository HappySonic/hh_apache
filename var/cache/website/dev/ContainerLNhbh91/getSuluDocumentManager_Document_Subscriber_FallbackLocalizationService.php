<?php

namespace ContainerLNhbh91;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluDocumentManager_Document_Subscriber_FallbackLocalizationService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sulu_document_manager.document.subscriber.fallback_localization' shared service.
     *
     * @return \Sulu\Component\Content\Document\Subscriber\FallbackLocalizationSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Content/Document/Subscriber/FallbackLocalizationSubscriber.php';

        return $container->privates['sulu_document_manager.document.subscriber.fallback_localization'] = new \Sulu\Component\Content\Document\Subscriber\FallbackLocalizationSubscriber(($container->services['sulu_document_manager.property_encoder'] ?? $container->getSuluDocumentManager_PropertyEncoderService()), ($container->services['sulu_document_manager.document_inspector'] ?? $container->getSuluDocumentManager_DocumentInspectorService()), ($container->privates['sulu_document_manager.document_registry'] ?? ($container->privates['sulu_document_manager.document_registry'] = new \Sulu\Component\DocumentManager\DocumentRegistry('en'))), ($container->services['sulu.content.localization_finder'] ?? $container->getSulu_Content_LocalizationFinderService()));
    }
}
