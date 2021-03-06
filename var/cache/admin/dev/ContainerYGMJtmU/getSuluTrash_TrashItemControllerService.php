<?php

namespace ContainerYGMJtmU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluTrash_TrashItemControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sulu_trash.trash_item_controller' shared service.
     *
     * @return \Sulu\Bundle\TrashBundle\UserInterface\Controller\Admin\TrashItemController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/friendsofsymfony/rest-bundle/Controller/ControllerTrait.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Rest/RestControllerTrait.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Rest/AbstractRestController.php';
        include_once \dirname(__DIR__, 5).'/vendor/handcraftedinthealps/rest-routing-bundle/Routing/ClassResourceInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Rest/RequestParametersTrait.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/TrashBundle/UserInterface/Controller/Admin/TrashItemController.php';

        return $container->services['sulu_trash.trash_item_controller'] = new \Sulu\Bundle\TrashBundle\UserInterface\Controller\Admin\TrashItemController(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->services['sulu_core.list_builder.field_descriptor_factory'] ?? $container->load('getSuluCore_ListBuilder_FieldDescriptorFactoryService')), ($container->services['sulu_core.doctrine_list_builder_factory'] ?? $container->load('getSuluCore_DoctrineListBuilderFactoryService')), ($container->services['sulu_core.doctrine_rest_helper'] ?? $container->load('getSuluCore_DoctrineRestHelperService')), ($container->services['translator'] ?? $container->getTranslatorService()), ($container->privates['sulu_trash.trash_manager'] ?? $container->getSuluTrash_TrashManagerService()), ($container->privates['sulu_trash.trash_item_repository'] ?? $container->getSuluTrash_TrashItemRepositoryService()), ($container->services['sulu_security.security_checker'] ?? $container->getSuluSecurity_SecurityCheckerService()), ($container->privates['.service_locator.eLMgmZc'] ?? $container->get_ServiceLocator_ELMgmZcService()), 'Sulu\\Bundle\\TrashBundle\\Domain\\Model\\TrashItem', $container->parameters['sulu_security.permissions'], ($container->services['fos_rest.view_handler'] ?? $container->load('getFosRest_ViewHandlerService')), ($container->services['.container.private.security.token_storage'] ?? $container->get_Container_Private_Security_TokenStorageService()));
    }
}
