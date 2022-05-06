<?php

namespace Container59KXm3P;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluActivity_SetDomainEventUserSubscriberService extends App_KernelProdContainer
{
    /*
     * Gets the private 'sulu_activity.set_domain_event_user_subscriber' shared service.
     *
     * @return \Sulu\Bundle\ActivityBundle\Application\Subscriber\SetDomainEventUserSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/ActivityBundle/Application/Subscriber/SetDomainEventUserSubscriber.php';

        return $container->privates['sulu_activity.set_domain_event_user_subscriber'] = new \Sulu\Bundle\ActivityBundle\Application\Subscriber\SetDomainEventUserSubscriber(($container->privates['security.helper'] ?? $container->getSecurity_HelperService()));
    }
}
