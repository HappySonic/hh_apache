<?php

namespace ContainerYGMJtmU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluCustomUrls_Serializer_EventSubscriberService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sulu_custom_urls.serializer.event_subscriber' shared service.
     *
     * @return \Sulu\Bundle\CustomUrlBundle\EventListener\CustomUrlSerializeEventSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/jms/serializer/src/EventDispatcher/EventSubscriberInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/CustomUrlBundle/EventListener/CustomUrlSerializeEventSubscriber.php';

        return $container->privates['sulu_custom_urls.serializer.event_subscriber'] = new \Sulu\Bundle\CustomUrlBundle\EventListener\CustomUrlSerializeEventSubscriber(($container->privates['sulu_custom_urls.domain_generator'] ?? $container->load('getSuluCustomUrls_DomainGeneratorService')), ($container->services['sulu_security.user_manager'] ?? $container->load('getSuluSecurity_UserManagerService')), ($container->services['sulu_document_manager.document_inspector'] ?? $container->getSuluDocumentManager_DocumentInspectorService()));
    }
}
