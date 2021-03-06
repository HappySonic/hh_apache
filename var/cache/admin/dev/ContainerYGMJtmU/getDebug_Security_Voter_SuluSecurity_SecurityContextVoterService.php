<?php

namespace ContainerYGMJtmU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDebug_Security_Voter_SuluSecurity_SecurityContextVoterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'debug.security.voter.sulu_security.security_context_voter' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/symfony/security-core/Authorization/Voter/VoterInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/symfony/security-core/Authorization/Voter/CacheableVoterInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/symfony/security-core/Authorization/Voter/TraceableVoter.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Security/Authorization/SecurityContextVoter.php';

        return $container->privates['debug.security.voter.sulu_security.security_context_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter(new \Sulu\Component\Security\Authorization\SecurityContextVoter(($container->privates['sulu_security.access_control_manager'] ?? $container->getSuluSecurity_AccessControlManagerService()), $container->parameters['permissions']), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));
    }
}
