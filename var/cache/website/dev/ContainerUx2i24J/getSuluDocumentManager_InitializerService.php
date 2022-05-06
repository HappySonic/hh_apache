<?php

namespace ContainerUx2i24J;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluDocumentManager_InitializerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sulu_document_manager.initializer' shared service.
     *
     * @return \Sulu\Bundle\DocumentManagerBundle\Initializer\Initializer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/DocumentManagerBundle/Initializer/Initializer.php';

        return $container->services['sulu_document_manager.initializer'] = new \Sulu\Bundle\DocumentManagerBundle\Initializer\Initializer($container, ['sulu_core.webspace.document_manager.webspace_initializer' => 0, 'sulu_snippet.document.snippet_initializer' => 0, 'sulu_page.document_manager.content_initializer' => 127, 'sulu_document_manager.initializer.root_path_purge_initializer' => 250, 'sulu_document_manager.initializer.workspace' => 255, 'sulu_custom_urls.initializer' => -127]);
    }
}
