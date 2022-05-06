<?php

namespace ContainerUx2i24J;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluActivity_DomainEventCollectorSubscriberService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sulu_activity.domain_event_collector_subscriber' shared service.
     *
     * @return \Sulu\Bundle\ActivityBundle\Infrastructure\Doctrine\Subscriber\DomainEventCollectorSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/doctrine/event-manager/lib/Doctrine/Common/EventSubscriber.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/ActivityBundle/Infrastructure/Doctrine/Subscriber/DomainEventCollectorSubscriber.php';

        return $container->privates['sulu_activity.domain_event_collector_subscriber'] = new \Sulu\Bundle\ActivityBundle\Infrastructure\Doctrine\Subscriber\DomainEventCollectorSubscriber(($container->privates['sulu_activity.domain_event_collector'] ?? $container->getSuluActivity_DomainEventCollectorService()));
    }
}
