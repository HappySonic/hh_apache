<?php

namespace Container59KXm3P;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluPage_ContentRepository_EventSubscriberService extends App_KernelProdContainer
{
    /*
     * Gets the private 'sulu_page.content_repository.event_subscriber' shared service.
     *
     * @return \Sulu\Component\Content\Repository\Serializer\SerializerEventListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/jms/serializer/src/EventDispatcher/EventSubscriberInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Content/Repository/Serializer/SerializerEventListener.php';

        return $container->privates['sulu_page.content_repository.event_subscriber'] = new \Sulu\Component\Content\Repository\Serializer\SerializerEventListener(($container->privates['sulu_security.access_control_manager'] ?? $container->getSuluSecurity_AccessControlManagerService()), ($container->services['.container.private.security.token_storage'] ?? $container->get_Container_Private_Security_TokenStorageService()));
    }
}
