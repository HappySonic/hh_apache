<?php

namespace ContainerLNhbh91;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluDocumentManager_Subscriber_SecurityService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sulu_document_manager.subscriber.security' shared service.
     *
     * @return \Sulu\Bundle\DocumentManagerBundle\Document\Subscriber\SecuritySubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/DocumentManagerBundle/Document/Subscriber/SecuritySubscriber.php';

        return $container->privates['sulu_document_manager.subscriber.security'] = new \Sulu\Bundle\DocumentManagerBundle\Document\Subscriber\SecuritySubscriber(($container->services['.container.private.security.token_storage'] ?? $container->get_Container_Private_Security_TokenStorageService()));
    }
}
