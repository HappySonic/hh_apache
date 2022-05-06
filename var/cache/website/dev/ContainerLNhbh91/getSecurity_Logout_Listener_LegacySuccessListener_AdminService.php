<?php

namespace ContainerLNhbh91;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Logout_Listener_LegacySuccessListener_AdminService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.logout.listener.legacy_success_listener.admin' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\LegacyLogoutHandlerListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/symfony/security-bundle/Security/LegacyLogoutHandlerListener.php';
        include_once \dirname(__DIR__, 5).'/vendor/symfony/security-http/Logout/LogoutSuccessHandlerInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/SecurityBundle/Security/LogoutSuccessHandler.php';

        return $container->privates['security.logout.listener.legacy_success_listener.admin'] = new \Symfony\Bundle\SecurityBundle\Security\LegacyLogoutHandlerListener(new \Sulu\Bundle\SecurityBundle\Security\LogoutSuccessHandler(($container->services['router'] ?? $container->getRouterService())));
    }
}
