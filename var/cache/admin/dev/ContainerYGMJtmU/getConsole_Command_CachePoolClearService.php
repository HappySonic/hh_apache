<?php

namespace ContainerYGMJtmU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_CachePoolClearService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'console.command.cache_pool_clear' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolClearCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 5).'/vendor/symfony/framework-bundle/Command/CachePoolClearCommand.php';

        $container->privates['console.command.cache_pool_clear'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolClearCommand(($container->services['cache.global_clearer'] ?? $container->load('getCache_GlobalClearerService')), [0 => 'cache.app', 1 => 'cache.system', 2 => 'cache.validator', 3 => 'cache.serializer', 4 => 'cache.annotations', 5 => 'cache.property_info', 6 => 'sulu_preview.preview.cache', 7 => 'sulu_admin.collaboration_cache', 8 => 'cache.validator_expression_language', 9 => 'cache.doctrine.orm.default.result', 10 => 'cache.doctrine.orm.default.query', 11 => 'cache.security_expression_language', 12 => 'cache.webpack_encore']);

        $instance->setName('cache:pool:clear');
        $instance->setDescription('Clear cache pools');

        return $instance;
    }
}
