<?php

namespace ContainerLNhbh91;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluDocumentManager_Serializer_Handler_ChildrenCollectionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sulu_document_manager.serializer.handler.children_collection' shared service.
     *
     * @return \Sulu\Bundle\DocumentManagerBundle\Bridge\Serializer\Handler\ChildrenCollectionHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/jms/serializer/src/Handler/SubscribingHandlerInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/DocumentManagerBundle/Bridge/Serializer/Handler/ChildrenCollectionHandler.php';

        return $container->privates['sulu_document_manager.serializer.handler.children_collection'] = new \Sulu\Bundle\DocumentManagerBundle\Bridge\Serializer\Handler\ChildrenCollectionHandler();
    }
}