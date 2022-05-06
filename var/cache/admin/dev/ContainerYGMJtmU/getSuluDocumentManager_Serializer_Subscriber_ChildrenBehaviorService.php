<?php

namespace ContainerYGMJtmU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluDocumentManager_Serializer_Subscriber_ChildrenBehaviorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sulu_document_manager.serializer.subscriber.children_behavior' shared service.
     *
     * @return \Sulu\Bundle\DocumentManagerBundle\Bridge\Serializer\Subscriber\ChildrenSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/jms/serializer/src/EventDispatcher/EventSubscriberInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/DocumentManagerBundle/Bridge/Serializer/Subscriber/ChildrenSubscriber.php';

        return $container->privates['sulu_document_manager.serializer.subscriber.children_behavior'] = new \Sulu\Bundle\DocumentManagerBundle\Bridge\Serializer\Subscriber\ChildrenSubscriber(($container->services['sulu_document_manager.document_inspector'] ?? $container->getSuluDocumentManager_DocumentInspectorService()), ($container->privates['sulu_document_manager.document_registry'] ?? ($container->privates['sulu_document_manager.document_registry'] = new \Sulu\Component\DocumentManager\DocumentRegistry('en'))));
    }
}
