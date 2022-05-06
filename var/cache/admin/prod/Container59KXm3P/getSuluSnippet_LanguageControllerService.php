<?php

namespace Container59KXm3P;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluSnippet_LanguageControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'sulu_snippet.language_controller' shared service.
     *
     * @return \Sulu\Bundle\SnippetBundle\Controller\LanguageController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/handcraftedinthealps/rest-routing-bundle/Routing/ClassResourceInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/SnippetBundle/Controller/LanguageController.php';

        return $container->services['sulu_snippet.language_controller'] = new \Sulu\Bundle\SnippetBundle\Controller\LanguageController(($container->services['sulu_core.webspace.webspace_manager'] ?? $container->getSuluCore_Webspace_WebspaceManagerService()));
    }
}
