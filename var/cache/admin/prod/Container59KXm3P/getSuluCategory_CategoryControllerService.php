<?php

namespace Container59KXm3P;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluCategory_CategoryControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'sulu_category.category_controller' shared service.
     *
     * @return \Sulu\Bundle\CategoryBundle\Controller\CategoryController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/friendsofsymfony/rest-bundle/Controller/ControllerTrait.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Rest/RestControllerTrait.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Rest/AbstractRestController.php';
        include_once \dirname(__DIR__, 5).'/vendor/handcraftedinthealps/rest-routing-bundle/Routing/ClassResourceInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Security/SecuredControllerInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Rest/RequestParametersTrait.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/CategoryBundle/Controller/CategoryController.php';

        return $container->services['sulu_category.category_controller'] = new \Sulu\Bundle\CategoryBundle\Controller\CategoryController(($container->services['fos_rest.view_handler'] ?? $container->load('getFosRest_ViewHandlerService')), ($container->services['sulu.repository.category'] ?? $container->getSulu_Repository_CategoryService()), ($container->services['translator'] ?? $container->getTranslatorService()), ($container->services['sulu_core.doctrine_rest_helper'] ?? $container->load('getSuluCore_DoctrineRestHelperService')), ($container->services['sulu_core.doctrine_list_builder_factory'] ?? $container->load('getSuluCore_DoctrineListBuilderFactoryService')), ($container->services['sulu_core.list_builder.field_descriptor_factory'] ?? $container->load('getSuluCore_ListBuilder_FieldDescriptorFactoryService')), ($container->services['sulu_category.category_manager'] ?? $container->load('getSuluCategory_CategoryManagerService')), 'Sulu\\Bundle\\CategoryBundle\\Entity\\Category');
    }
}
