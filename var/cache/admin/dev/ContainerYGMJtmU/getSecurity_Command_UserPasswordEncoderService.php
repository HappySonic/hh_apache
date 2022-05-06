<?php

namespace ContainerYGMJtmU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Command_UserPasswordEncoderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.command.user_password_encoder' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Command\UserPasswordEncoderCommand
     *
     * @deprecated Since symfony/security-bundle 5.3: The "security.command.user_password_encoder" service is deprecated, use "security.command.user_password_hash" instead.
     */
    public static function do($container, $lazyLoad = true)
    {
        trigger_deprecation('symfony/security-bundle', '5.3', 'The "security.command.user_password_encoder" service is deprecated, use "security.command.user_password_hash" instead.');

        $container->privates['security.command.user_password_encoder'] = $instance = new \Symfony\Bundle\SecurityBundle\Command\UserPasswordEncoderCommand(($container->services['sulu_security.encoder_factory'] ?? $container->load('getSuluSecurity_EncoderFactoryService')), [0 => 'Sulu\\Bundle\\SecurityBundle\\Entity\\User']);

        $instance->setName('security:encode-password');
        $instance->setDescription('Encode a password');

        return $instance;
    }
}
