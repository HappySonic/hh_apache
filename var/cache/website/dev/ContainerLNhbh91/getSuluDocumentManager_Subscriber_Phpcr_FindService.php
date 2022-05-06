<?php

namespace ContainerLNhbh91;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluDocumentManager_Subscriber_Phpcr_FindService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sulu_document_manager.subscriber.phpcr.find' shared service.
     *
     * @return \Sulu\Component\DocumentManager\Subscriber\Phpcr\FindSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/DocumentManager/Subscriber/Phpcr/FindSubscriber.php';

        return $container->privates['sulu_document_manager.subscriber.phpcr.find'] = new \Sulu\Component\DocumentManager\Subscriber\Phpcr\FindSubscriber(($container->privates['sulu_document_manager.metadata_factory'] ?? $container->getSuluDocumentManager_MetadataFactoryService()), ($container->privates['sulu_document_manager.node_manager'] ?? $container->getSuluDocumentManager_NodeManagerService()), ($container->privates['sulu_document_manager.event_dispatcher.standard'] ?? $container->getSuluDocumentManager_EventDispatcher_StandardService()));
    }
}
