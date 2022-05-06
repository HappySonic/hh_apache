<?php

namespace ContainerUx2i24J;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluSnippet_SnippetTrashItemHandlerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sulu_snippet.snippet_trash_item_handler' shared service.
     *
     * @return \Sulu\Bundle\SnippetBundle\Trash\SnippetTrashItemHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/TrashBundle/Application/TrashItemHandler/StoreTrashItemHandlerInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/TrashBundle/Application/TrashItemHandler/RestoreTrashItemHandlerInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/TrashBundle/Application/RestoreConfigurationProvider/RestoreConfigurationProviderInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/SnippetBundle/Trash/SnippetTrashItemHandler.php';

        return $container->privates['sulu_snippet.snippet_trash_item_handler'] = new \Sulu\Bundle\SnippetBundle\Trash\SnippetTrashItemHandler(($container->privates['sulu_trash.trash_item_repository'] ?? $container->getSuluTrash_TrashItemRepositoryService()), ($container->services['sulu_document_manager.document_manager'] ?? $container->getSuluDocumentManager_DocumentManagerService()), ($container->services['sulu_document_manager.document_inspector'] ?? $container->getSuluDocumentManager_DocumentInspectorService()), ($container->privates['sulu_document_manager.document_domain_event_collector'] ?? $container->getSuluDocumentManager_DocumentDomainEventCollectorService()));
    }
}
