<?php

namespace Container59KXm3P;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluTrash_DoctrineRestoreHelperService extends App_KernelProdContainer
{
    /*
     * Gets the private 'sulu_trash.doctrine_restore_helper' shared service.
     *
     * @return \Sulu\Bundle\TrashBundle\Application\DoctrineRestoreHelper\DoctrineRestoreHelper
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/TrashBundle/Application/DoctrineRestoreHelper/DoctrineRestoreHelperInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/TrashBundle/Application/DoctrineRestoreHelper/DoctrineRestoreHelper.php';

        return $container->privates['sulu_trash.doctrine_restore_helper'] = new \Sulu\Bundle\TrashBundle\Application\DoctrineRestoreHelper\DoctrineRestoreHelper(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));
    }
}
