<?php

namespace ContainerLNhbh91;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSulu_Content_PathCleaner_ReplacerLoader_FileLocatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sulu.content.path_cleaner.replacer_loader.file_locator' shared service.
     *
     * @return \Symfony\Component\Config\FileLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['sulu.content.path_cleaner.replacer_loader.file_locator'] = new \Symfony\Component\Config\FileLocator();
    }
}