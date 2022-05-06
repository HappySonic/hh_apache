<?php

namespace ContainerQpTHIsG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluSnippet_Import_SnippetService extends App_KernelProdContainer
{
    /*
     * Gets the public 'sulu_snippet.import.snippet' shared service.
     *
     * @return \Sulu\Component\Snippet\Import\SnippetImport
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Import/Import.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Snippet/Import/SnippetImportInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Snippet/Import/SnippetImport.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Import/Format/FormatImportInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Import/Format/Xliff12.php';

        return $container->services['sulu_snippet.import.snippet'] = new \Sulu\Component\Snippet\Import\SnippetImport(($container->services['sulu_document_manager.document_manager'] ?? $container->getSuluDocumentManager_DocumentManagerService()), ($container->services['sulu.content.structure_manager'] ?? $container->getSulu_Content_StructureManagerService()), ($container->privates['sulu_document_manager.document_registry'] ?? ($container->privates['sulu_document_manager.document_registry'] = new \Sulu\Component\DocumentManager\DocumentRegistry('en'))), ($container->privates['sulu_page.import.manager'] ?? $container->getSuluPage_Import_ManagerService()), ($container->services['sulu_page.compat.structure.legacy_property_factory'] ?? $container->getSuluPage_Compat_Structure_LegacyPropertyFactoryService()), new \Sulu\Component\Import\Format\Xliff12(), ($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()));
    }
}
