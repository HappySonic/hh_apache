<?php

namespace ContainerRqrmNio;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluDocumentManager_Subscriber_Behavior_AliasService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sulu_document_manager.subscriber.behavior.alias' shared service.
     *
     * @return \Sulu\Component\DocumentManager\Subscriber\Behavior\Path\AliasFilingSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/DocumentManager/Subscriber/Behavior/Path/AbstractFilingSubscriber.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/DocumentManager/Subscriber/Behavior/Path/AliasFilingSubscriber.php';

        return $container->privates['sulu_document_manager.subscriber.behavior.alias'] = new \Sulu\Component\DocumentManager\Subscriber\Behavior\Path\AliasFilingSubscriber(($container->services['doctrine_phpcr.session'] ?? $container->getDoctrinePhpcr_SessionService()), ($container->services['sulu_document_manager.live_session'] ?? $container->getSuluDocumentManager_LiveSessionService()), ($container->services['sulu_document_manager.metadata_factory.base'] ?? $container->getSuluDocumentManager_MetadataFactory_BaseService()));
    }
}
