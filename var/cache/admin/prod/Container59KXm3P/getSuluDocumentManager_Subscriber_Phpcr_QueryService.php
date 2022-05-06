<?php

namespace Container59KXm3P;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluDocumentManager_Subscriber_Phpcr_QueryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'sulu_document_manager.subscriber.phpcr.query' shared service.
     *
     * @return \Sulu\Component\DocumentManager\Subscriber\Phpcr\QuerySubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/DocumentManager/Subscriber/Phpcr/QuerySubscriber.php';

        return $container->privates['sulu_document_manager.subscriber.phpcr.query'] = new \Sulu\Component\DocumentManager\Subscriber\Phpcr\QuerySubscriber(($container->services['doctrine_phpcr.session'] ?? $container->getDoctrinePhpcr_SessionService()), ($container->privates['sulu_document_manager.event_dispatcher.standard'] ?? $container->getSuluDocumentManager_EventDispatcher_StandardService()));
    }
}