<?php

namespace Container59KXm3P;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluActivity_ActivityControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'sulu_activity.activity_controller' shared service.
     *
     * @return \Sulu\Bundle\ActivityBundle\UserInterface\Controller\ActivityController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/friendsofsymfony/rest-bundle/Controller/ControllerTrait.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Rest/RestControllerTrait.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Rest/AbstractRestController.php';
        include_once \dirname(__DIR__, 5).'/vendor/handcraftedinthealps/rest-routing-bundle/Routing/ClassResourceInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Security/SecuredControllerInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Rest/RequestParametersTrait.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/ActivityBundle/UserInterface/Controller/ActivityController.php';

        return $container->services['sulu_activity.activity_controller'] = new \Sulu\Bundle\ActivityBundle\UserInterface\Controller\ActivityController(($container->services['sulu_core.list_builder.field_descriptor_factory'] ?? $container->load('getSuluCore_ListBuilder_FieldDescriptorFactoryService')), ($container->services['sulu_core.doctrine_list_builder_factory'] ?? $container->load('getSuluCore_DoctrineListBuilderFactoryService')), ($container->services['sulu_core.doctrine_rest_helper'] ?? $container->load('getSuluCore_DoctrineRestHelperService')), ($container->services['sulu_security.security_checker'] ?? $container->getSuluSecurity_SecurityCheckerService()), ($container->services['translator'] ?? $container->getTranslatorService()), 'Sulu\\Bundle\\ActivityBundle\\Domain\\Model\\Activity', 'Sulu\\Bundle\\ContactBundle\\Entity\\Contact', 'Sulu\\Bundle\\SecurityBundle\\Entity\\User', $container->parameters['sulu_security.permissions'], ($container->services['fos_rest.view_handler'] ?? $container->load('getFosRest_ViewHandlerService')), ($container->services['.container.private.security.token_storage'] ?? $container->get_Container_Private_Security_TokenStorageService()));
    }
}
