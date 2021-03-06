<?php

namespace ContainerQpTHIsG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluSnippet_Content_SnippetService extends App_KernelProdContainer
{
    /*
     * Gets the public 'sulu_snippet.content.snippet' shared service.
     *
     * @return \Sulu\Bundle\SnippetBundle\Content\SnippetContent
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Content/ContentTypeInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Content/ComplexContentType.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Content/ContentTypeExportInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Content/PreResolvableContentTypeInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/SnippetBundle/Content/SnippetContent.php';

        return $container->services['sulu_snippet.content.snippet'] = new \Sulu\Bundle\SnippetBundle\Content\SnippetContent(($container->services['sulu_snippet.default_snippet.manager'] ?? $container->getSuluSnippet_DefaultSnippet_ManagerService()), ($container->services['sulu_snippet.resolver'] ?? $container->getSuluSnippet_ResolverService()), ($container->services['sulu_snippet.reference_store.snippet'] ?? ($container->services['sulu_snippet.reference_store.snippet'] = new \Sulu\Bundle\WebsiteBundle\ReferenceStore\ReferenceStore())), true);
    }
}
