<?php

namespace ContainerYGMJtmU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluSecurity_Serializer_MediaPermissionsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sulu_security.serializer.media_permissions' shared service.
     *
     * @return \Sulu\Bundle\MediaBundle\Serializer\Subscriber\MediaPermissionsSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/jms/serializer/src/EventDispatcher/EventSubscriberInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/MediaBundle/Serializer/Subscriber/MediaPermissionsSubscriber.php';

        return $container->privates['sulu_security.serializer.media_permissions'] = new \Sulu\Bundle\MediaBundle\Serializer\Subscriber\MediaPermissionsSubscriber(($container->privates['sulu_security.access_control_manager'] ?? $container->getSuluSecurity_AccessControlManagerService()), ($container->services['.container.private.security.token_storage'] ?? $container->get_Container_Private_Security_TokenStorageService()));
    }
}
