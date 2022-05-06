<?php

namespace ContainerRqrmNio;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluDocumentManager_Suscriber_Behavior_BlameService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sulu_document_manager.suscriber.behavior.blame' shared service.
     *
     * @return \Sulu\Component\Content\Document\Subscriber\BlameSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Content/Document/Subscriber/BlameSubscriber.php';

        return $container->privates['sulu_document_manager.suscriber.behavior.blame'] = new \Sulu\Component\Content\Document\Subscriber\BlameSubscriber(($container->services['sulu_document_manager.property_encoder'] ?? $container->getSuluDocumentManager_PropertyEncoderService()));
    }
}
