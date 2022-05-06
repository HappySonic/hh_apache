<?php

namespace ContainerUx2i24J;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluDocumentManager_Initializer_RootPathPurgeInitializerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sulu_document_manager.initializer.root_path_purge_initializer' shared service.
     *
     * @return \Sulu\Bundle\DocumentManagerBundle\Initializer\RootPathPurgeInitializer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/DocumentManagerBundle/Initializer/InitializerInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/DocumentManagerBundle/Initializer/RootPathPurgeInitializer.php';

        return $container->services['sulu_document_manager.initializer.root_path_purge_initializer'] = new \Sulu\Bundle\DocumentManagerBundle\Initializer\RootPathPurgeInitializer(($container->services['doctrine_phpcr'] ?? $container->getDoctrinePhpcrService()), ($container->privates['sulu_document_manager.path_segment_registry'] ?? $container->getSuluDocumentManager_PathSegmentRegistryService()), 'base');
    }
}
