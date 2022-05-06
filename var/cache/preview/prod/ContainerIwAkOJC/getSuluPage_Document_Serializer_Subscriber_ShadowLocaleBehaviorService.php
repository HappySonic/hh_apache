<?php

namespace ContainerIwAkOJC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluPage_Document_Serializer_Subscriber_ShadowLocaleBehaviorService extends App_KernelProdContainer
{
    /*
     * Gets the private 'sulu_page.document.serializer.subscriber.shadow_locale_behavior' shared service.
     *
     * @return \Sulu\Bundle\PageBundle\Serializer\Subscriber\ShadowLocaleSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/jms/serializer/src/EventDispatcher/EventSubscriberInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/PageBundle/Serializer/Subscriber/ShadowLocaleSubscriber.php';

        return $container->privates['sulu_page.document.serializer.subscriber.shadow_locale_behavior'] = new \Sulu\Bundle\PageBundle\Serializer\Subscriber\ShadowLocaleSubscriber(($container->services['sulu_document_manager.document_inspector'] ?? $container->getSuluDocumentManager_DocumentInspectorService()), ($container->privates['sulu_document_manager.document_registry'] ?? ($container->privates['sulu_document_manager.document_registry'] = new \Sulu\Component\DocumentManager\DocumentRegistry('en'))));
    }
}
