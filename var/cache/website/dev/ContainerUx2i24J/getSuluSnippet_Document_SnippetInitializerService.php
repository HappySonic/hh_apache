<?php

namespace ContainerUx2i24J;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluSnippet_Document_SnippetInitializerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sulu_snippet.document.snippet_initializer' shared service.
     *
     * @return \Sulu\Bundle\SnippetBundle\Document\SnippetInitializer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/DocumentManagerBundle/Initializer/InitializerInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/SnippetBundle/Document/SnippetInitializer.php';

        return $container->services['sulu_snippet.document.snippet_initializer'] = new \Sulu\Bundle\SnippetBundle\Document\SnippetInitializer(($container->services['doctrine_phpcr'] ?? $container->getDoctrinePhpcrService()), ($container->privates['sulu_document_manager.path_builder'] ?? $container->getSuluDocumentManager_PathBuilderService()));
    }
}
