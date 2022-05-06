<?php

namespace ContainerLNhbh91;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluDocumentManager_Document_Subscriber_RouteService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sulu_document_manager.document.subscriber.route' shared service.
     *
     * @return \Sulu\Component\Content\Document\Subscriber\RouteSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Content/Document/Subscriber/RouteSubscriber.php';

        return $container->privates['sulu_document_manager.document.subscriber.route'] = new \Sulu\Component\Content\Document\Subscriber\RouteSubscriber(($container->services['sulu_document_manager.document_manager'] ?? $container->getSuluDocumentManager_DocumentManagerService()), ($container->services['sulu_document_manager.document_inspector'] ?? $container->getSuluDocumentManager_DocumentInspectorService()), ($container->services['sulu.phpcr.session'] ?? $container->getSulu_Phpcr_SessionService()), ($container->privates['sulu_document_manager.node_manager'] ?? $container->getSuluDocumentManager_NodeManagerService()));
    }
}
