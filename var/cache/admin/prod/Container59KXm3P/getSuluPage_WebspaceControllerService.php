<?php

namespace Container59KXm3P;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluPage_WebspaceControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'sulu_page.webspace_controller' shared service.
     *
     * @return \Sulu\Bundle\PageBundle\Controller\WebspaceController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/friendsofsymfony/rest-bundle/Controller/ControllerTrait.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Rest/RestControllerTrait.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Rest/AbstractRestController.php';
        include_once \dirname(__DIR__, 5).'/vendor/handcraftedinthealps/rest-routing-bundle/Routing/ClassResourceInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Security/SecuredControllerInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Rest/RequestParametersTrait.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/PageBundle/Controller/WebspaceController.php';

        return $container->services['sulu_page.webspace_controller'] = new \Sulu\Bundle\PageBundle\Controller\WebspaceController(($container->services['fos_rest.view_handler'] ?? $container->load('getFosRest_ViewHandlerService')), ($container->services['sulu_core.webspace.webspace_manager'] ?? $container->getSuluCore_Webspace_WebspaceManagerService()), ($container->services['sulu_security.security_checker'] ?? $container->getSuluSecurity_SecurityCheckerService()), ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }
}
