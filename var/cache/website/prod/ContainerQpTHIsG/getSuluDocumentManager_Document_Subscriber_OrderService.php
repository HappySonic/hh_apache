<?php

namespace ContainerQpTHIsG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluDocumentManager_Document_Subscriber_OrderService extends App_KernelProdContainer
{
    /*
     * Gets the private 'sulu_document_manager.document.subscriber.order' shared service.
     *
     * @return \Sulu\Component\Content\Document\Subscriber\OrderSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Content/Document/Subscriber/OrderSubscriber.php';

        return $container->privates['sulu_document_manager.document.subscriber.order'] = new \Sulu\Component\Content\Document\Subscriber\OrderSubscriber(($container->services['sulu_document_manager.document_inspector'] ?? $container->getSuluDocumentManager_DocumentInspectorService()), ($container->services['sulu_document_manager.property_encoder'] ?? $container->getSuluDocumentManager_PropertyEncoderService()));
    }
}
