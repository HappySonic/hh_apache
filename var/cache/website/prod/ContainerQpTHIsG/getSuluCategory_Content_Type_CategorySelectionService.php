<?php

namespace ContainerQpTHIsG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluCategory_Content_Type_CategorySelectionService extends App_KernelProdContainer
{
    /*
     * Gets the public 'sulu_category.content.type.category_selection' shared service.
     *
     * @return \Sulu\Bundle\CategoryBundle\Content\Types\CategorySelection
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Content/ContentTypeInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Content/ComplexContentType.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Content/ContentTypeExportInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/CategoryBundle/Content/Types/CategorySelection.php';

        return $container->services['sulu_category.content.type.category_selection'] = new \Sulu\Bundle\CategoryBundle\Content\Types\CategorySelection(($container->services['sulu_category.category_manager'] ?? $container->getSuluCategory_CategoryManagerService()));
    }
}
