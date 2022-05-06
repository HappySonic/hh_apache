<?php

namespace ContainerYGMJtmU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluWebsite_Analytics_EventSubscriberService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sulu_website.analytics.event_subscriber' shared service.
     *
     * @return \Sulu\Bundle\WebsiteBundle\EventSubscriber\AnalyticsSerializeEventSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/jms/serializer/src/EventDispatcher/EventSubscriberInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/WebsiteBundle/EventSubscriber/AnalyticsSerializeEventSubscriber.php';

        return $container->privates['sulu_website.analytics.event_subscriber'] = new \Sulu\Bundle\WebsiteBundle\EventSubscriber\AnalyticsSerializeEventSubscriber();
    }
}