<?php

namespace ContainerQpTHIsG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluSnippet_Export_SnippetService extends App_KernelProdContainer
{
    /*
     * Gets the public 'sulu_snippet.export.snippet' shared service.
     *
     * @return \Sulu\Component\Snippet\Export\SnippetExport
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Export/Export.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Snippet/Export/SnippetExportInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Snippet/Export/SnippetExport.php';

        return $container->services['sulu_snippet.export.snippet'] = new \Sulu\Component\Snippet\Export\SnippetExport(($container->services['.container.private.twig'] ?? $container->get_Container_Private_TwigService()), ($container->services['sulu_snippet.repository'] ?? $container->load('getSuluSnippet_RepositoryService')), ($container->services['sulu_document_manager.document_manager'] ?? $container->getSuluDocumentManager_DocumentManagerService()), ($container->services['sulu_document_manager.document_inspector'] ?? $container->getSuluDocumentManager_DocumentInspectorService()), ($container->privates['sulu_page.export.manager'] ?? $container->getSuluPage_Export_ManagerService()), $container->parameters['sulu_snippet.export.snippet.formats']);
    }
}
