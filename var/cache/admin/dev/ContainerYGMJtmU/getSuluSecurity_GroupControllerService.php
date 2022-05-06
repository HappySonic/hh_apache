<?php

namespace ContainerYGMJtmU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluSecurity_GroupControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sulu_security.group_controller' shared service.
     *
     * @return \Sulu\Bundle\SecurityBundle\Controller\GroupController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/friendsofsymfony/rest-bundle/Controller/ControllerTrait.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Rest/RestControllerTrait.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Rest/AbstractRestController.php';
        include_once \dirname(__DIR__, 5).'/vendor/handcraftedinthealps/rest-routing-bundle/Routing/ClassResourceInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Security/SecuredControllerInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/SecurityBundle/Controller/GroupController.php';

        return $container->services['sulu_security.group_controller'] = new \Sulu\Bundle\SecurityBundle\Controller\GroupController(($container->services['fos_rest.view_handler'] ?? $container->load('getFosRest_ViewHandlerService')), ($container->services['sulu_core.doctrine_rest_helper'] ?? $container->load('getSuluCore_DoctrineRestHelperService')), ($container->services['sulu_core.doctrine_list_builder_factory'] ?? $container->load('getSuluCore_DoctrineListBuilderFactoryService')), ($container->services['sulu.repository.role'] ?? $container->getSulu_Repository_RoleService()), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));
    }
}
