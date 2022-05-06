<?php

namespace ContainerIwAkOJC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluDocumentManager_Serializer_Subscriber_ProxyService extends App_KernelProdContainer
{
    /*
     * Gets the public 'sulu_document_manager.serializer.subscriber.proxy' shared service.
     *
     * @return \Sulu\Bundle\DocumentManagerBundle\Bridge\Serializer\Subscriber\ProxySubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/jms/serializer/src/EventDispatcher/EventSubscriberInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/DocumentManagerBundle/Bridge/Serializer/Subscriber/ProxySubscriber.php';

        return $container->services['sulu_document_manager.serializer.subscriber.proxy'] = new \Sulu\Bundle\DocumentManagerBundle\Bridge\Serializer\Subscriber\ProxySubscriber();
    }
}
