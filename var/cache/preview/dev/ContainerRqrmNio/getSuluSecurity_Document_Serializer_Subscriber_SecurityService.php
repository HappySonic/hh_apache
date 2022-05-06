<?php

namespace ContainerRqrmNio;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluSecurity_Document_Serializer_Subscriber_SecurityService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sulu_security.document.serializer.subscriber.security' shared service.
     *
     * @return \Sulu\Bundle\SecurityBundle\Serializer\Subscriber\SecuritySubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/jms/serializer/src/EventDispatcher/EventSubscriberInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/SecurityBundle/Serializer/Subscriber/SecuritySubscriber.php';

        return $container->privates['sulu_security.document.serializer.subscriber.security'] = new \Sulu\Bundle\SecurityBundle\Serializer\Subscriber\SecuritySubscriber(($container->privates['sulu_security.access_control_manager'] ?? $container->getSuluSecurity_AccessControlManagerService()), ($container->services['.container.private.security.token_storage'] ?? $container->get_Container_Private_Security_TokenStorageService()));
    }
}