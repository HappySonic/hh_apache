<?php

namespace Container59KXm3P;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluPreview_PreviewLinkControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'sulu_preview.preview_link_controller' shared service.
     *
     * @return \Sulu\Bundle\PreviewBundle\UserInterface\Controller\PreviewLinkController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/friendsofsymfony/rest-bundle/Controller/ControllerTrait.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Rest/RestControllerTrait.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Rest/AbstractRestController.php';
        include_once \dirname(__DIR__, 5).'/vendor/handcraftedinthealps/rest-routing-bundle/Routing/ClassResourceInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Rest/RequestParametersTrait.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/PreviewBundle/UserInterface/Controller/PreviewLinkController.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/PreviewBundle/Application/Manager/PreviewLinkManagerInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/PreviewBundle/Application/Manager/PreviewLinkManager.php';

        $a = ($container->privates['sulu_preview.preview_link_repository'] ?? $container->load('getSuluPreview_PreviewLinkRepositoryService'));

        return $container->services['sulu_preview.preview_link_controller'] = new \Sulu\Bundle\PreviewBundle\UserInterface\Controller\PreviewLinkController($a, new \Sulu\Bundle\PreviewBundle\Application\Manager\PreviewLinkManager($a, ($container->privates['sulu_activity.domain_event_collector'] ?? $container->getSuluActivity_DomainEventCollectorService()), ($container->privates['sulu_preview.preview_object_provider_registry'] ?? $container->load('getSuluPreview_PreviewObjectProviderRegistryService')), ($container->services['router'] ?? $container->getRouterService())), ($container->services['fos_rest.view_handler'] ?? $container->load('getFosRest_ViewHandlerService')), ($container->services['.container.private.security.token_storage'] ?? $container->get_Container_Private_Security_TokenStorageService()));
    }
}