<?php

namespace ContainerQpTHIsG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluDocumentManager_Initializer_WorkspaceService extends App_KernelProdContainer
{
    /*
     * Gets the public 'sulu_document_manager.initializer.workspace' shared service.
     *
     * @return \Sulu\Bundle\DocumentManagerBundle\Initializer\WorkspaceInitializer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/DocumentManagerBundle/Initializer/InitializerInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/DocumentManagerBundle/Initializer/WorkspaceInitializer.php';

        return $container->services['sulu_document_manager.initializer.workspace'] = new \Sulu\Bundle\DocumentManagerBundle\Initializer\WorkspaceInitializer(($container->services['doctrine_phpcr'] ?? $container->load('getDoctrinePhpcrService')));
    }
}
