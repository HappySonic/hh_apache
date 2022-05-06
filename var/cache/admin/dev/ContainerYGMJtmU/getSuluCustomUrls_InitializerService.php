<?php

namespace ContainerYGMJtmU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluCustomUrls_InitializerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sulu_custom_urls.initializer' shared service.
     *
     * @return \Sulu\Component\CustomUrl\Document\Initializer\CustomUrlInitializer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/DocumentManagerBundle/Initializer/InitializerInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/CustomUrl/Document/Initializer/CustomUrlInitializer.php';

        return $container->services['sulu_custom_urls.initializer'] = new \Sulu\Component\CustomUrl\Document\Initializer\CustomUrlInitializer(($container->privates['sulu_document_manager.node_manager'] ?? $container->getSuluDocumentManager_NodeManagerService()), ($container->privates['sulu_document_manager.path_builder'] ?? $container->load('getSuluDocumentManager_PathBuilderService')), ($container->services['sulu_core.webspace.webspace_manager'] ?? $container->getSuluCore_Webspace_WebspaceManagerService()), ($container->services['sulu.phpcr.session'] ?? $container->getSulu_Phpcr_SessionService()));
    }
}
