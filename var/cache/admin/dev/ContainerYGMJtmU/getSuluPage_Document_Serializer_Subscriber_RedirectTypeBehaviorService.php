<?php

namespace ContainerYGMJtmU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluPage_Document_Serializer_Subscriber_RedirectTypeBehaviorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sulu_page.document.serializer.subscriber.redirect_type_behavior' shared service.
     *
     * @return \Sulu\Bundle\PageBundle\Serializer\Subscriber\RedirectTypeSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/jms/serializer/src/EventDispatcher/EventSubscriberInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/PageBundle/Serializer/Subscriber/RedirectTypeSubscriber.php';

        return $container->privates['sulu_page.document.serializer.subscriber.redirect_type_behavior'] = new \Sulu\Bundle\PageBundle\Serializer\Subscriber\RedirectTypeSubscriber();
    }
}
