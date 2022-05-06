<?php

namespace Container59KXm3P;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluSecurity_SecurityContextVoterService extends App_KernelProdContainer
{
    /*
     * Gets the private 'sulu_security.security_context_voter' shared service.
     *
     * @return \Sulu\Component\Security\Authorization\SecurityContextVoter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/symfony/security-core/Authorization/Voter/VoterInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Security/Authorization/SecurityContextVoter.php';

        return $container->privates['sulu_security.security_context_voter'] = new \Sulu\Component\Security\Authorization\SecurityContextVoter(($container->privates['sulu_security.access_control_manager'] ?? $container->getSuluSecurity_AccessControlManagerService()), $container->parameters['permissions']);
    }
}
