<?php

namespace ContainerUx2i24J;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluContact_Doctrine_InvalidationListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sulu_contact.doctrine.invalidation_listener' shared service.
     *
     * @return \Sulu\Bundle\ContactBundle\EventListener\CacheInvalidationListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/ContactBundle/EventListener/CacheInvalidationListener.php';

        return $container->privates['sulu_contact.doctrine.invalidation_listener'] = new \Sulu\Bundle\ContactBundle\EventListener\CacheInvalidationListener(NULL);
    }
}
