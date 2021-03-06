<?php

namespace ContainerYGMJtmU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluDocumentManager_DocumentDomainEventCollectorSubscriberService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sulu_document_manager.document_domain_event_collector_subscriber' shared service.
     *
     * @return \Sulu\Bundle\DocumentManagerBundle\Collector\DocumentDomainEventCollectorSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/DocumentManagerBundle/Collector/DocumentDomainEventCollectorSubscriber.php';

        return $container->privates['sulu_document_manager.document_domain_event_collector_subscriber'] = new \Sulu\Bundle\DocumentManagerBundle\Collector\DocumentDomainEventCollectorSubscriber(($container->privates['sulu_document_manager.document_domain_event_collector'] ?? $container->load('getSuluDocumentManager_DocumentDomainEventCollectorService')));
    }
}
