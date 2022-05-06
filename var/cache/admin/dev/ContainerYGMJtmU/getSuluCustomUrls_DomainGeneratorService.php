<?php

namespace ContainerYGMJtmU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluCustomUrls_DomainGeneratorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sulu_custom_urls.domain_generator' shared service.
     *
     * @return \Sulu\Component\CustomUrl\Generator\Generator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/CustomUrl/Generator/GeneratorInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/CustomUrl/Generator/Generator.php';

        return $container->privates['sulu_custom_urls.domain_generator'] = new \Sulu\Component\CustomUrl\Generator\Generator(($container->privates['sulu_core.webspace.webspace_manager.url_replacer'] ?? ($container->privates['sulu_core.webspace.webspace_manager.url_replacer'] = new \Sulu\Component\Webspace\Url\Replacer())));
    }
}
