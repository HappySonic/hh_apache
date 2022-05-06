<?php

namespace ContainerIwAkOJC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluDocumentManager_Suscriber_Behavior_TimestampService extends App_KernelProdContainer
{
    /*
     * Gets the private 'sulu_document_manager.suscriber.behavior.timestamp' shared service.
     *
     * @return \Sulu\Component\DocumentManager\Subscriber\Behavior\Audit\TimestampSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/DocumentManager/Subscriber/Behavior/Audit/TimestampSubscriber.php';

        return $container->privates['sulu_document_manager.suscriber.behavior.timestamp'] = new \Sulu\Component\DocumentManager\Subscriber\Behavior\Audit\TimestampSubscriber(($container->services['sulu_document_manager.property_encoder'] ?? $container->getSuluDocumentManager_PropertyEncoderService()), ($container->services['sulu_document_manager.document_inspector'] ?? $container->getSuluDocumentManager_DocumentInspectorService()));
    }
}
