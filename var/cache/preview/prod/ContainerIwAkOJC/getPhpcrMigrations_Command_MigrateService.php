<?php

namespace ContainerIwAkOJC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPhpcrMigrations_Command_MigrateService extends App_KernelProdContainer
{
    /*
     * Gets the public 'phpcr_migrations.command.migrate' shared service.
     *
     * @return \DTL\Bundle\PhpcrMigrations\Command\MigrateCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 5).'/vendor/dantleech/phpcr-migrations-bundle/Command/MigrateCommand.php';

        return $container->services['phpcr_migrations.command.migrate'] = new \DTL\Bundle\PhpcrMigrations\Command\MigrateCommand(($container->privates['phpcr_migrations.migrator_factory'] ?? $container->load('getPhpcrMigrations_MigratorFactoryService')), $container);
    }
}
