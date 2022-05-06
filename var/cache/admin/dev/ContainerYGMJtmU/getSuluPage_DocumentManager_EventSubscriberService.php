<?php

namespace ContainerYGMJtmU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluPage_DocumentManager_EventSubscriberService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sulu_page.document_manager.event_subscriber' shared service.
     *
     * @return \Sulu\Bundle\PageBundle\EventListener\DomainEventSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/PageBundle/EventListener/DomainEventSubscriber.php';

        return $container->privates['sulu_page.document_manager.event_subscriber'] = new \Sulu\Bundle\PageBundle\EventListener\DomainEventSubscriber(($container->privates['sulu_document_manager.document_domain_event_collector'] ?? $container->load('getSuluDocumentManager_DocumentDomainEventCollectorService')), ($container->services['sulu_document_manager.document_manager'] ?? $container->getSuluDocumentManager_DocumentManagerService()), ($container->services['sulu_document_manager.property_encoder'] ?? $container->getSuluDocumentManager_PropertyEncoderService()));
    }
}
