<?php

namespace Container59KXm3P;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluPage_RlRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the public 'sulu_page.rl_repository' shared service.
     *
     * @return \Sulu\Bundle\PageBundle\Repository\ResourceLocatorRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/PageBundle/Repository/ResourceLocatorRepositoryInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/PageBundle/Repository/ResourceLocatorRepository.php';

        return $container->services['sulu_page.rl_repository'] = new \Sulu\Bundle\PageBundle\Repository\ResourceLocatorRepository(($container->privates['sulu.content.resource_locator.strategy_pool'] ?? $container->load('getSulu_Content_ResourceLocator_StrategyPoolService')), ($container->services['sulu.content.structure_manager'] ?? $container->getSulu_Content_StructureManagerService()));
    }
}
