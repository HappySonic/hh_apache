<?php

namespace ContainerLNhbh91;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluDocumentManager_Subscriber_Phpcr_ReorderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sulu_document_manager.subscriber.phpcr.reorder' shared service.
     *
     * @return \Sulu\Component\DocumentManager\Subscriber\Phpcr\ReorderSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/DocumentManager/Subscriber/Phpcr/ReorderSubscriber.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/DocumentManager/NodeHelperInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/DocumentManager/NodeHelper.php';

        return $container->privates['sulu_document_manager.subscriber.phpcr.reorder'] = new \Sulu\Component\DocumentManager\Subscriber\Phpcr\ReorderSubscriber(($container->privates['sulu_document_manager.node_helper'] ?? ($container->privates['sulu_document_manager.node_helper'] = new \Sulu\Component\DocumentManager\NodeHelper())));
    }
}