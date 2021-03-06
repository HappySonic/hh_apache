<?php

namespace Container59KXm3P;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluSnippet_SnippetAreaControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'sulu_snippet.snippet_area_controller' shared service.
     *
     * @return \Sulu\Bundle\SnippetBundle\Controller\SnippetAreaController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/handcraftedinthealps/rest-routing-bundle/Routing/ClassResourceInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Rest/RequestParametersTrait.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/SnippetBundle/Controller/SnippetAreaController.php';

        return $container->services['sulu_snippet.snippet_area_controller'] = new \Sulu\Bundle\SnippetBundle\Controller\SnippetAreaController(($container->services['sulu_snippet.default_snippet.manager'] ?? $container->load('getSuluSnippet_DefaultSnippet_ManagerService')), ($container->services['sulu_document_manager.document_manager'] ?? $container->getSuluDocumentManager_DocumentManagerService()), ($container->services['sulu_security.security_checker'] ?? $container->getSuluSecurity_SecurityCheckerService()), ($container->services['.container.private.security.token_storage'] ?? $container->get_Container_Private_Security_TokenStorageService()), $container->parameters['sulu_snippet.areas']);
    }
}
