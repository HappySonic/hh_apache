<?php

namespace ContainerLNhbh91;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluSecurity_LastLoginListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sulu_security.last_login_listener' shared service.
     *
     * @return \Sulu\Bundle\SecurityBundle\EventListener\LastLoginListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/SecurityBundle/EventListener/LastLoginListener.php';

        return $container->privates['sulu_security.last_login_listener'] = new \Sulu\Bundle\SecurityBundle\EventListener\LastLoginListener(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));
    }
}
