<?php

namespace ContainerUx2i24J;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluCategory_Content_Type_SingleCategorySelectionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sulu_category.content.type.single_category_selection' shared service.
     *
     * @return \Sulu\Bundle\CategoryBundle\Content\Types\SingleCategorySelection
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Content/ContentTypeInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Content/ContentTypeExportInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Content/SimpleContentType.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/CategoryBundle/Content/Types/SingleCategorySelection.php';

        return $container->services['sulu_category.content.type.single_category_selection'] = new \Sulu\Bundle\CategoryBundle\Content\Types\SingleCategorySelection(($container->services['sulu_category.category_manager'] ?? $container->getSuluCategory_CategoryManagerService()));
    }
}
