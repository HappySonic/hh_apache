<?php

namespace ContainerQpTHIsG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluPage_Compat_Serializer_Subscriber_PageBridgeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'sulu_page.compat.serializer.subscriber.page_bridge' shared service.
     *
     * @return \Sulu\Component\Content\Compat\Serializer\PageBridgeSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/jms/serializer/src/EventDispatcher/EventSubscriberInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Content/Compat/Serializer/PageBridgeSubscriber.php';

        return $container->privates['sulu_page.compat.serializer.subscriber.page_bridge'] = new \Sulu\Component\Content\Compat\Serializer\PageBridgeSubscriber();
    }
}