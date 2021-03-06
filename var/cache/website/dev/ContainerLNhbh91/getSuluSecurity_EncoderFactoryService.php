<?php

namespace ContainerLNhbh91;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluSecurity_EncoderFactoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sulu_security.encoder_factory' shared service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\EncoderFactory
     *
     * @deprecated Since symfony/security-bundle 5.3: The "sulu_security.encoder_factory" service is deprecated, use "security.password_hasher_factory" instead.
     */
    public static function do($container, $lazyLoad = true)
    {
        trigger_deprecation('symfony/security-bundle', '5.3', 'The "sulu_security.encoder_factory" service is deprecated, use "security.password_hasher_factory" instead.');

        return $container->services['sulu_security.encoder_factory'] = new \Symfony\Component\Security\Core\Encoder\EncoderFactory(['Sulu\\Bundle\\SecurityBundle\\Entity\\User' => ['class' => 'Symfony\\Component\\Security\\Core\\Encoder\\NativePasswordEncoder', 'arguments' => [0 => NULL, 1 => NULL, 2 => NULL, 3 => '2y']]]);
    }
}
