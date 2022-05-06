<?php

namespace ContainerYGMJtmU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluSecurity_PermissionInheritanceSubscriberService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sulu_security.permission_inheritance_subscriber' shared service.
     *
     * @return \Sulu\Bundle\SecurityBundle\EventListener\PermissionInheritanceSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/doctrine/event-manager/lib/Doctrine/Common/EventSubscriber.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/SecurityBundle/EventListener/PermissionInheritanceSubscriber.php';

        return $container->privates['sulu_security.permission_inheritance_subscriber'] = new \Sulu\Bundle\SecurityBundle\EventListener\PermissionInheritanceSubscriber(($container->privates['sulu_security.access_control_manager'] ?? $container->getSuluSecurity_AccessControlManagerService()));
    }
}
