<?php

namespace ContainerIwAkOJC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMassiveSearch_Command_IndexRebuildDeprecatedService extends App_KernelProdContainer
{
    /*
     * Gets the private 'massive_search.command.index_rebuild_deprecated' shared service.
     *
     * @return \Massive\Bundle\SearchBundle\Command\IndexRebuildCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 5).'/vendor/massive/search-bundle/Command/ReindexCommand.php';
        include_once \dirname(__DIR__, 5).'/vendor/massive/search-bundle/Command/IndexRebuildCommand.php';
        include_once \dirname(__DIR__, 5).'/vendor/massive/search-bundle/Search/Reindex/ResumeManagerInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/massive/search-bundle/Search/Reindex/ResumeManager.php';

        $container->privates['massive_search.command.index_rebuild_deprecated'] = $instance = new \Massive\Bundle\SearchBundle\Command\IndexRebuildCommand(($container->privates['massive_search.reindex.resume_manager'] ?? ($container->privates['massive_search.reindex.resume_manager'] = new \Massive\Bundle\SearchBundle\Search\Reindex\ResumeManager())), ($container->services['massive_search.search_manager'] ?? $container->load('getMassiveSearch_SearchManagerService')), ($container->privates['massive_search.reindex.provider_registry'] ?? $container->load('getMassiveSearch_Reindex_ProviderRegistryService')), 'prod');

        $instance->setName('massive:search:index:rebuild');

        return $instance;
    }
}