<?php

namespace ContainerYGMJtmU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authentication_Listener_Json_AdminService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.authentication.listener.json.admin' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\UsernamePasswordJsonAuthenticationListener
     *
     * @deprecated Since symfony/security-bundle 5.3: The "security.authentication.listener.json.admin" service is deprecated, use the new authenticator system instead.
     */
    public static function do($container, $lazyLoad = true)
    {
        trigger_deprecation('symfony/security-bundle', '5.3', 'The "security.authentication.listener.json.admin" service is deprecated, use the new authenticator system instead.');

        include_once \dirname(__DIR__, 5).'/vendor/symfony/security-http/Authentication/AuthenticationSuccessHandlerInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/symfony/security-http/Authentication/CustomAuthenticationSuccessHandler.php';
        include_once \dirname(__DIR__, 5).'/vendor/symfony/security-http/Authentication/AuthenticationFailureHandlerInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/SecurityBundle/Security/AuthenticationHandler.php';
        include_once \dirname(__DIR__, 5).'/vendor/symfony/security-http/Authentication/CustomAuthenticationFailureHandler.php';
        include_once \dirname(__DIR__, 5).'/vendor/symfony/security-http/Session/SessionAuthenticationStrategyInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/symfony/security-http/Session/SessionAuthenticationStrategy.php';

        $a = new \Sulu\Bundle\SecurityBundle\Security\AuthenticationHandler(($container->services['router'] ?? $container->getRouterService()), ($container->services['.container.private.session'] ?? $container->load('get_Container_Private_SessionService')));

        $container->privates['security.authentication.listener.json.admin'] = $instance = new \Symfony\Component\Security\Http\Firewall\UsernamePasswordJsonAuthenticationListener(($container->services['.container.private.security.token_storage'] ?? $container->get_Container_Private_Security_TokenStorageService()), ($container->privates['security.authentication.manager'] ?? $container->load('getSecurity_Authentication_ManagerService')), ($container->privates['security.http_utils'] ?? $container->load('getSecurity_HttpUtilsService')), 'admin', new \Symfony\Component\Security\Http\Authentication\CustomAuthenticationSuccessHandler($a, [], 'admin'), new \Symfony\Component\Security\Http\Authentication\CustomAuthenticationFailureHandler($a, []), ['check_path' => 'sulu_admin.login_check', 'use_forward' => false, 'require_previous_session' => false, 'login_path' => '/login', 'username_path' => 'username', 'password_path' => 'password'], ($container->privates['monolog.logger.security'] ?? $container->load('getMonolog_Logger_SecurityService')), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), ($container->privates['property_accessor'] ?? $container->load('getPropertyAccessorService')));

        if ($container->has('translator')) {
            $instance->setTranslator(($container->services['translator'] ?? $container->getTranslatorService()));
        }
        $instance->setSessionAuthenticationStrategy(new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate'));

        return $instance;
    }
}
