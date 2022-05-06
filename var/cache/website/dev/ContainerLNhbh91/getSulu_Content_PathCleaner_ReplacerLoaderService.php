<?php

namespace ContainerLNhbh91;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSulu_Content_PathCleaner_ReplacerLoaderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sulu.content.path_cleaner.replacer_loader' shared service.
     *
     * @return \Sulu\Bundle\CoreBundle\DataFixtures\ReplacerXmlLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/CoreBundle/DataFixtures/ReplacerXmlLoader.php';

        return $container->services['sulu.content.path_cleaner.replacer_loader'] = new \Sulu\Bundle\CoreBundle\DataFixtures\ReplacerXmlLoader(($container->services['sulu.content.path_cleaner.replacer_loader.file_locator'] ?? ($container->services['sulu.content.path_cleaner.replacer_loader.file_locator'] = new \Symfony\Component\Config\FileLocator())));
    }
}
