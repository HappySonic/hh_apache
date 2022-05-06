<?php

namespace ContainerUx2i24J;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluDocumentManager_Suscriber_Behavior_ChildrenService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sulu_document_manager.suscriber.behavior.children' shared service.
     *
     * @return \Sulu\Component\DocumentManager\Subscriber\Behavior\Mapping\ChildrenSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/DocumentManager/Subscriber/Behavior/Mapping/ChildrenSubscriber.php';

        return $container->privates['sulu_document_manager.suscriber.behavior.children'] = new \Sulu\Component\DocumentManager\Subscriber\Behavior\Mapping\ChildrenSubscriber(($container->privates['sulu_document_manager.proxy_factory'] ?? $container->getSuluDocumentManager_ProxyFactoryService()));
    }
}
