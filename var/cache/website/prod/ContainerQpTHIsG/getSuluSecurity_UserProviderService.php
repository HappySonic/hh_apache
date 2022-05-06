<?php

namespace ContainerQpTHIsG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluSecurity_UserProviderService extends App_KernelProdContainer
{
    /*
     * Gets the private 'sulu_security.user_provider' shared service.
     *
     * @return \Sulu\Bundle\SecurityBundle\User\UserProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/symfony/security-core/User/UserProviderInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/SecurityBundle/User/UserProvider.php';

        return $container->privates['sulu_security.user_provider'] = new \Sulu\Bundle\SecurityBundle\User\UserProvider(($container->services['sulu_security.user_repository'] ?? $container->load('getSuluSecurity_UserRepositoryService')), ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), 'Sulu');
    }
}
