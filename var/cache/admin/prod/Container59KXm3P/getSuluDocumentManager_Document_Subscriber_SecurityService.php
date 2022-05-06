<?php

namespace Container59KXm3P;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluDocumentManager_Document_Subscriber_SecurityService extends App_KernelProdContainer
{
    /*
     * Gets the private 'sulu_document_manager.document.subscriber.security' shared service.
     *
     * @return \Sulu\Component\Content\Document\Subscriber\SecuritySubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Content/Document/Subscriber/SecuritySubscriber.php';

        return $container->privates['sulu_document_manager.document.subscriber.security'] = new \Sulu\Component\Content\Document\Subscriber\SecuritySubscriber($container->parameters['sulu_security.permissions'], ($container->services['sulu_document_manager.live_session'] ?? $container->load('getSuluDocumentManager_LiveSessionService')), ($container->services['sulu_document_manager.property_encoder'] ?? $container->getSuluDocumentManager_PropertyEncoderService()), ($container->privates['sulu_security.access_control_manager'] ?? $container->getSuluSecurity_AccessControlManagerService()));
    }
}
