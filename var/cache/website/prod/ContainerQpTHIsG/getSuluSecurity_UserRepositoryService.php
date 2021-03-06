<?php

namespace ContainerQpTHIsG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluSecurity_UserRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the public 'sulu_security.user_repository' shared service.
     *
     * @return \Sulu\Bundle\SecurityBundle\Entity\UserRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Persistence/Repository/RepositoryInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Persistence/Repository/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Security/Authentication/UserRepositoryInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Persistence/Repository/ORM/OrderByTrait.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/SecurityBundle/Entity/UserRepository.php';

        return $container->services['sulu_security.user_repository'] = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService())->getRepository('Sulu\\Bundle\\SecurityBundle\\Entity\\User');
    }
}
