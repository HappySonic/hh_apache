<?php

namespace ContainerQpTHIsG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluActivity_DispatchSpecificDomainEventSubscriberService extends App_KernelProdContainer
{
    /*
     * Gets the private 'sulu_activity.dispatch_specific_domain_event_subscriber' shared service.
     *
     * @return \Sulu\Bundle\ActivityBundle\Application\Subscriber\DispatchSpecificDomainEventSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/ActivityBundle/Application/Subscriber/DispatchSpecificDomainEventSubscriber.php';

        return $container->privates['sulu_activity.dispatch_specific_domain_event_subscriber'] = new \Sulu\Bundle\ActivityBundle\Application\Subscriber\DispatchSpecificDomainEventSubscriber(($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));
    }
}
