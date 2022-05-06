<?php

namespace ContainerIwAkOJC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSulu_Core_LocalizationManagerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'sulu.core.localization_manager' shared service.
     *
     * @return \Sulu\Component\Localization\Manager\LocalizationManager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Localization/Manager/LocalizationManagerInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Localization/Manager/LocalizationManager.php';

        $container->services['sulu.core.localization_manager'] = $instance = new \Sulu\Component\Localization\Manager\LocalizationManager();

        $instance->addLocalizationProvider(new \Sulu\Component\Webspace\Manager\WebspaceManager(($container->privates['sulu_core.webspace.loader.delegator'] ?? $container->getSuluCore_Webspace_Loader_DelegatorService()), ($container->privates['sulu_core.webspace.webspace_manager.url_replacer'] ?? ($container->privates['sulu_core.webspace.webspace_manager.url_replacer'] = new \Sulu\Component\Webspace\Url\Replacer())), ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ['config_dir' => (\dirname(__DIR__, 5).'/config/webspaces'), 'cache_dir' => ($container->targetDir.''.'/sulu'), 'debug' => false, 'cache_class' => 'websiteWebspaceCollectionCache', 'base_class' => 'WebspaceCollection'], 'prod', 'localhost', 'http', ($container->services['sulu_page.structure.factory'] ?? $container->getSuluPage_Structure_FactoryService())));

        return $instance;
    }
}