<?php

namespace Container59KXm3P;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluDocumentManager_DocumentDomainEventCollectorService extends App_KernelProdContainer
{
    /*
     * Gets the private 'sulu_document_manager.document_domain_event_collector' shared service.
     *
     * @return \Sulu\Bundle\DocumentManagerBundle\Collector\DocumentDomainEventCollector
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/DocumentManagerBundle/Collector/DocumentDomainEventCollectorInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/DocumentManagerBundle/Collector/DocumentDomainEventCollector.php';

        return $container->privates['sulu_document_manager.document_domain_event_collector'] = new \Sulu\Bundle\DocumentManagerBundle\Collector\DocumentDomainEventCollector(($container->privates['sulu_activity.domain_event_dispatcher'] ?? $container->getSuluActivity_DomainEventDispatcherService()));
    }
}
