<?php

namespace Container59KXm3P;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluDocumentManager_SlugifierService extends App_KernelProdContainer
{
    /*
     * Gets the private 'sulu_document_manager.slugifier' shared service.
     *
     * @return \Sulu\Component\DocumentManager\Slugifier\PathCleanupSlugifier
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/symfony-cmf/slugifier-api/src/SlugifierInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/DocumentManager/Slugifier/PathCleanupSlugifier.php';

        return $container->privates['sulu_document_manager.slugifier'] = new \Sulu\Component\DocumentManager\Slugifier\PathCleanupSlugifier(($container->services['sulu.content.path_cleaner'] ?? $container->getSulu_Content_PathCleanerService()));
    }
}
