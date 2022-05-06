<?php

namespace ContainerQpTHIsG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluDocumentManager_Subscriber_Core_InstantiatorService extends App_KernelProdContainer
{
    /*
     * Gets the private 'sulu_document_manager.subscriber.core.instantiator' shared service.
     *
     * @return \Sulu\Component\DocumentManager\Subscriber\Core\InstantiatorSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/DocumentManager/Subscriber/Core/InstantiatorSubscriber.php';

        return $container->privates['sulu_document_manager.subscriber.core.instantiator'] = new \Sulu\Component\DocumentManager\Subscriber\Core\InstantiatorSubscriber(($container->privates['sulu_document_manager.metadata_factory'] ?? $container->getSuluDocumentManager_MetadataFactoryService()));
    }
}