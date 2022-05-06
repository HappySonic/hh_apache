<?php

namespace Container59KXm3P;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluDocumentManager_Subscriber_Behavior_Path_ExplicitService extends App_KernelProdContainer
{
    /*
     * Gets the private 'sulu_document_manager.subscriber.behavior.path.explicit' shared service.
     *
     * @return \Sulu\Component\DocumentManager\Subscriber\Behavior\Path\ExplicitSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/DocumentManager/Subscriber/Behavior/Path/ExplicitSubscriber.php';

        return $container->privates['sulu_document_manager.subscriber.behavior.path.explicit'] = new \Sulu\Component\DocumentManager\Subscriber\Behavior\Path\ExplicitSubscriber(($container->privates['sulu_document_manager.node_manager'] ?? $container->getSuluDocumentManager_NodeManagerService()));
    }
}
