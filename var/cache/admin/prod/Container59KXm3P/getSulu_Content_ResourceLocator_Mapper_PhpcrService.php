<?php

namespace Container59KXm3P;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSulu_Content_ResourceLocator_Mapper_PhpcrService extends App_KernelProdContainer
{
    /*
     * Gets the private 'sulu.content.resource_locator.mapper.phpcr' shared service.
     *
     * @return \Sulu\Component\Content\Types\ResourceLocator\Mapper\PhpcrMapper
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Content/Types/ResourceLocator/Mapper/ResourceLocatorMapperInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Content/Types/ResourceLocator/Mapper/PhpcrMapper.php';

        return $container->privates['sulu.content.resource_locator.mapper.phpcr'] = new \Sulu\Component\Content\Types\ResourceLocator\Mapper\PhpcrMapper(($container->services['sulu.phpcr.session'] ?? $container->getSulu_Phpcr_SessionService()), ($container->services['sulu_document_manager.document_manager'] ?? $container->getSuluDocumentManager_DocumentManagerService()), ($container->services['sulu_document_manager.document_inspector'] ?? $container->getSuluDocumentManager_DocumentInspectorService()));
    }
}
