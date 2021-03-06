<?php

namespace ContainerLNhbh91;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPhpcrMigrations_VersionStorageService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'phpcr_migrations.version_storage' shared service.
     *
     * @return \PHPCR\Migrations\VersionStorage
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/phpcr/phpcr-migrations/lib/VersionStorage.php';

        return $container->privates['phpcr_migrations.version_storage'] = new \PHPCR\Migrations\VersionStorage(($container->services['doctrine_phpcr.default_session'] ?? $container->load('getDoctrinePhpcr_DefaultSessionService')), 'jcr:versions');
    }
}
