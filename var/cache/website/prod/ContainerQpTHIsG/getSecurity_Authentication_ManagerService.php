<?php

namespace ContainerQpTHIsG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authentication_ManagerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'security.authentication.manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager
     *
     * @deprecated Since symfony/security-bundle 5.3: The "security.authentication.manager" service is deprecated, use the new authenticator system instead.
     */
    public static function do($container, $lazyLoad = true)
    {
        trigger_deprecation('symfony/security-bundle', '5.3', 'The "security.authentication.manager" service is deprecated, use the new authenticator system instead.');

        $container->privates['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['security.authentication.provider.dao.admin'] ?? $container->load('getSecurity_Authentication_Provider_Dao_AdminService'));
            yield 1 => ($container->privates['security.authentication.provider.anonymous.admin'] ?? $container->load('getSecurity_Authentication_Provider_Anonymous_AdminService'));
        }, 2), true);

        $instance->setEventDispatcher(($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));

        return $instance;
    }
}
