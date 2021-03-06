<?php

namespace ContainerUx2i24J;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluDocumentManager_Subscriber_Phpcr_MixinService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sulu_document_manager.subscriber.phpcr.mixin' shared service.
     *
     * @return \Sulu\Component\DocumentManager\Subscriber\Behavior\Mapping\MixinSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/DocumentManager/Subscriber/Behavior/Mapping/MixinSubscriber.php';

        return $container->privates['sulu_document_manager.subscriber.phpcr.mixin'] = new \Sulu\Component\DocumentManager\Subscriber\Behavior\Mapping\MixinSubscriber(($container->privates['sulu_document_manager.metadata_factory'] ?? $container->getSuluDocumentManager_MetadataFactoryService()), ($container->services['sulu_document_manager.property_encoder'] ?? $container->getSuluDocumentManager_PropertyEncoderService()));
    }
}
