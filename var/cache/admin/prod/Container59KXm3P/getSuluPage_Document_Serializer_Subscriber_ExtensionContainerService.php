<?php

namespace Container59KXm3P;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluPage_Document_Serializer_Subscriber_ExtensionContainerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'sulu_page.document.serializer.subscriber.extension_container' shared service.
     *
     * @return \Sulu\Bundle\PageBundle\Serializer\Subscriber\ExtensionContainerSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/jms/serializer/src/EventDispatcher/EventSubscriberInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/PageBundle/Serializer/Subscriber/ExtensionContainerSubscriber.php';

        return $container->privates['sulu_page.document.serializer.subscriber.extension_container'] = new \Sulu\Bundle\PageBundle\Serializer\Subscriber\ExtensionContainerSubscriber();
    }
}
