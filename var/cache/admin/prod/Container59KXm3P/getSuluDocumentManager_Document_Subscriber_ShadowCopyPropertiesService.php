<?php

namespace Container59KXm3P;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluDocumentManager_Document_Subscriber_ShadowCopyPropertiesService extends App_KernelProdContainer
{
    /*
     * Gets the private 'sulu_document_manager.document.subscriber.shadow_copy_properties' shared service.
     *
     * @return \Sulu\Component\Content\Document\Subscriber\ShadowCopyPropertiesSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Content/Document/Subscriber/ShadowCopyPropertiesSubscriber.php';

        return $container->privates['sulu_document_manager.document.subscriber.shadow_copy_properties'] = new \Sulu\Component\Content\Document\Subscriber\ShadowCopyPropertiesSubscriber(($container->services['sulu_document_manager.property_encoder'] ?? $container->getSuluDocumentManager_PropertyEncoderService()));
    }
}
