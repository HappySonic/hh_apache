<?php

namespace ContainerYGMJtmU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluPreview_PreviewObjectProviderRegistryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sulu_preview.preview_object_provider_registry' shared service.
     *
     * @return \Sulu\Bundle\PreviewBundle\Preview\Object\PreviewObjectProviderRegistry
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/PreviewBundle/Preview/Object/PreviewObjectProviderRegistryInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/PreviewBundle/Preview/Object/PreviewObjectProviderRegistry.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/PreviewBundle/Preview/Object/PreviewObjectProviderInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/PageBundle/Preview/PageObjectProvider.php';

        return $container->privates['sulu_preview.preview_object_provider_registry'] = new \Sulu\Bundle\PreviewBundle\Preview\Object\PreviewObjectProviderRegistry(['pages' => new \Sulu\Bundle\PageBundle\Preview\PageObjectProvider(($container->services['sulu_document_manager.document_manager'] ?? $container->getSuluDocumentManager_DocumentManagerService()), ($container->services['jms_serializer'] ?? $container->getJmsSerializerService()), ($container->services['sulu_document_manager.document_inspector'] ?? $container->getSuluDocumentManager_DocumentInspectorService()))]);
    }
}
