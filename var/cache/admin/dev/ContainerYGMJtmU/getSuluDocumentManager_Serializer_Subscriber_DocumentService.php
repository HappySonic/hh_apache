<?php

namespace ContainerYGMJtmU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluDocumentManager_Serializer_Subscriber_DocumentService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sulu_document_manager.serializer.subscriber.document' shared service.
     *
     * @return \Sulu\Bundle\DocumentManagerBundle\Bridge\Serializer\Subscriber\DocumentSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/jms/serializer/src/EventDispatcher/EventSubscriberInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/DocumentManagerBundle/Bridge/Serializer/Subscriber/DocumentSubscriber.php';

        return $container->privates['sulu_document_manager.serializer.subscriber.document'] = new \Sulu\Bundle\DocumentManagerBundle\Bridge\Serializer\Subscriber\DocumentSubscriber(($container->privates['sulu_document_manager.document_registry'] ?? ($container->privates['sulu_document_manager.document_registry'] = new \Sulu\Component\DocumentManager\DocumentRegistry('en'))), ($container->privates['sulu_document_manager.node_manager'] ?? $container->getSuluDocumentManager_NodeManagerService()), ($container->privates['sulu_document_manager.metadata_factory'] ?? $container->getSuluDocumentManager_MetadataFactoryService()));
    }
}
