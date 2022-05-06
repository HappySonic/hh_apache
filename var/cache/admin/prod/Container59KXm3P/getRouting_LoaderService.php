<?php

namespace Container59KXm3P;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRouting_LoaderService extends App_KernelProdContainer
{
    /*
     * Gets the public 'routing.loader' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/symfony/framework-bundle/Routing/DelegatingLoader.php';
        include_once \dirname(__DIR__, 5).'/vendor/symfony/routing/Loader/Configurator/Traits/HostTrait.php';
        include_once \dirname(__DIR__, 5).'/vendor/symfony/routing/Loader/Configurator/Traits/LocalizedRouteTrait.php';
        include_once \dirname(__DIR__, 5).'/vendor/symfony/routing/Loader/Configurator/Traits/PrefixTrait.php';
        include_once \dirname(__DIR__, 5).'/vendor/symfony/routing/Loader/XmlFileLoader.php';
        include_once \dirname(__DIR__, 5).'/vendor/symfony/routing/Loader/YamlFileLoader.php';
        include_once \dirname(__DIR__, 5).'/vendor/symfony/routing/Loader/PhpFileLoader.php';
        include_once \dirname(__DIR__, 5).'/vendor/symfony/routing/Loader/GlobFileLoader.php';
        include_once \dirname(__DIR__, 5).'/vendor/symfony/routing/Loader/DirectoryLoader.php';
        include_once \dirname(__DIR__, 5).'/vendor/symfony/routing/Loader/ObjectLoader.php';
        include_once \dirname(__DIR__, 5).'/vendor/symfony/routing/Loader/ContainerLoader.php';
        include_once \dirname(__DIR__, 5).'/vendor/handcraftedinthealps/rest-routing-bundle/Routing/Loader/DirectoryRouteLoader.php';
        include_once \dirname(__DIR__, 5).'/vendor/handcraftedinthealps/rest-routing-bundle/Routing/Loader/RestRouteProcessor.php';
        include_once \dirname(__DIR__, 5).'/vendor/handcraftedinthealps/rest-routing-bundle/Routing/Loader/RestRouteLoader.php';
        include_once \dirname(__DIR__, 5).'/vendor/handcraftedinthealps/rest-routing-bundle/Routing/Loader/Reader/RestControllerReader.php';
        include_once \dirname(__DIR__, 5).'/vendor/handcraftedinthealps/rest-routing-bundle/Routing/Loader/Reader/RestActionReader.php';
        include_once \dirname(__DIR__, 5).'/vendor/friendsofsymfony/rest-bundle/Request/ParamReaderInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/friendsofsymfony/rest-bundle/Request/ParamReader.php';
        include_once \dirname(__DIR__, 5).'/vendor/handcraftedinthealps/rest-routing-bundle/Inflector/InflectorInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/handcraftedinthealps/rest-routing-bundle/Inflector/DoctrineInflector.php';
        include_once \dirname(__DIR__, 5).'/vendor/handcraftedinthealps/rest-routing-bundle/Routing/Loader/RestYamlCollectionLoader.php';
        include_once \dirname(__DIR__, 5).'/vendor/handcraftedinthealps/rest-routing-bundle/Routing/Loader/RestXmlCollectionLoader.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/WebsiteBundle/Routing/PortalLoader.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/DocumentManagerBundle/Routing/Loader/VersionRouteLoader.php';
        include_once \dirname(__DIR__, 5).'/vendor/symfony/routing/Loader/AnnotationClassLoader.php';
        include_once \dirname(__DIR__, 5).'/vendor/symfony/framework-bundle/Routing/AnnotatedRouteControllerLoader.php';
        include_once \dirname(__DIR__, 5).'/vendor/symfony/routing/Loader/AnnotationFileLoader.php';
        include_once \dirname(__DIR__, 5).'/vendor/symfony/routing/Loader/AnnotationDirectoryLoader.php';

        $a = new \Symfony\Component\Config\Loader\LoaderResolver();

        $b = ($container->privates['file_locator'] ?? ($container->privates['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator(($container->services['kernel'] ?? $container->get('kernel', 1)))));
        $c = new \HandcraftedInTheAlps\RestRoutingBundle\Routing\Loader\RestRouteProcessor();
        $d = ($container->privates['annotations.cached_reader'] ?? $container->getAnnotations_CachedReaderService());
        $e = new \Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader($d, 'prod');

        $a->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($b, 'prod'));
        $a->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($b, 'prod'));
        $a->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($b, 'prod'));
        $a->addLoader(new \Symfony\Component\Routing\Loader\GlobFileLoader($b, 'prod'));
        $a->addLoader(new \Symfony\Component\Routing\Loader\DirectoryLoader($b, 'prod'));
        $a->addLoader(new \Symfony\Component\Routing\Loader\ContainerLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'kernel' => ['services', 'kernel', 'getKernelService', false],
        ], [
            'kernel' => 'App\\Kernel',
        ]), 'prod'));
        $a->addLoader(new \HandcraftedInTheAlps\RestRoutingBundle\Routing\Loader\DirectoryRouteLoader($b, $c));
        $a->addLoader(new \HandcraftedInTheAlps\RestRoutingBundle\Routing\Loader\RestRouteLoader($container, $b, new \HandcraftedInTheAlps\RestRoutingBundle\Routing\Loader\Reader\RestControllerReader(new \HandcraftedInTheAlps\RestRoutingBundle\Routing\Loader\Reader\RestActionReader($d, new \FOS\RestBundle\Request\ParamReader($d), new \HandcraftedInTheAlps\RestRoutingBundle\Inflector\DoctrineInflector(), true, ['json' => true, 'csv' => true], true), $d), 'json'));
        $a->addLoader(new \HandcraftedInTheAlps\RestRoutingBundle\Routing\Loader\RestYamlCollectionLoader($b, $c, true, ['json' => true, 'csv' => true], 'json'));
        $a->addLoader(new \HandcraftedInTheAlps\RestRoutingBundle\Routing\Loader\RestXmlCollectionLoader($b, $c, true, ['json' => true, 'csv' => true], 'json'));
        $a->addLoader(new \Sulu\Bundle\WebsiteBundle\Routing\PortalLoader(($container->services['sulu_core.webspace.webspace_manager'] ?? $container->getSuluCore_Webspace_WebspaceManagerService()), $b));
        $a->addLoader(new \Sulu\Bundle\DocumentManagerBundle\Routing\Loader\VersionRouteLoader(false));
        $a->addLoader($e);
        $a->addLoader(new \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader($b, $e));
        $a->addLoader(new \Symfony\Component\Routing\Loader\AnnotationFileLoader($b, $e));

        return $container->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader($a, ['utf8' => true], []);
    }
}
