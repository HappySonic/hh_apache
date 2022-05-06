<?php

namespace ContainerLNhbh91;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluCore_Webspace_DocumentManager_WebspaceInitializerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sulu_core.webspace.document_manager.webspace_initializer' shared service.
     *
     * @return \Sulu\Component\Webspace\Document\Initializer\WebspaceInitializer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/DocumentManagerBundle/Initializer/InitializerInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Webspace/Document/Initializer/WebspaceInitializer.php';

        return $container->services['sulu_core.webspace.document_manager.webspace_initializer'] = new \Sulu\Component\Webspace\Document\Initializer\WebspaceInitializer(($container->services['sulu_core.webspace.webspace_manager'] ?? $container->getSuluCore_Webspace_WebspaceManagerService()), ($container->services['sulu_document_manager.document_manager'] ?? $container->getSuluDocumentManager_DocumentManagerService()), ($container->services['sulu_document_manager.document_inspector'] ?? $container->getSuluDocumentManager_DocumentInspectorService()), ($container->privates['sulu_document_manager.path_builder'] ?? $container->getSuluDocumentManager_PathBuilderService()), ($container->privates['sulu_document_manager.node_manager'] ?? $container->getSuluDocumentManager_NodeManagerService()));
    }
}
