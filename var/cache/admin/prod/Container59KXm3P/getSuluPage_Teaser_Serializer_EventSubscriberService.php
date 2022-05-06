<?php

namespace Container59KXm3P;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluPage_Teaser_Serializer_EventSubscriberService extends App_KernelProdContainer
{
    /*
     * Gets the private 'sulu_page.teaser.serializer.event_subscriber' shared service.
     *
     * @return \Sulu\Bundle\PageBundle\EventListener\TeaserSerializeEventSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/jms/serializer/src/EventDispatcher/EventSubscriberInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/PageBundle/EventListener/TeaserSerializeEventSubscriber.php';

        return $container->privates['sulu_page.teaser.serializer.event_subscriber'] = new \Sulu\Bundle\PageBundle\EventListener\TeaserSerializeEventSubscriber(($container->services['sulu_media.media_manager'] ?? $container->getSuluMedia_MediaManagerService()));
    }
}
