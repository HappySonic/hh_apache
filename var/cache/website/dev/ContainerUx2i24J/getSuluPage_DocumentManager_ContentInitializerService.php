<?php

namespace ContainerUx2i24J;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluPage_DocumentManager_ContentInitializerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sulu_page.document_manager.content_initializer' shared service.
     *
     * @return \Sulu\Bundle\PageBundle\DocumentManager\ContentInitializer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/DocumentManagerBundle/Initializer/InitializerInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/PageBundle/DocumentManager/ContentInitializer.php';

        return $container->services['sulu_page.document_manager.content_initializer'] = new \Sulu\Bundle\PageBundle\DocumentManager\ContentInitializer(($container->services['doctrine_phpcr'] ?? $container->getDoctrinePhpcrService()), 'i18n');
    }
}
