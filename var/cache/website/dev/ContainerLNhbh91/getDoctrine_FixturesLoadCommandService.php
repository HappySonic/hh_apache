<?php

namespace ContainerLNhbh91;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_FixturesLoadCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'doctrine.fixtures_load_command' shared service.
     *
     * @return \Doctrine\Bundle\FixturesBundle\Command\LoadDataFixturesDoctrineCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 5).'/vendor/doctrine/doctrine-bundle/Command/DoctrineCommand.php';
        include_once \dirname(__DIR__, 5).'/vendor/doctrine/doctrine-fixtures-bundle/Command/LoadDataFixturesDoctrineCommand.php';
        include_once \dirname(__DIR__, 5).'/vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/Loader.php';
        include_once \dirname(__DIR__, 5).'/vendor/symfony/doctrine-bridge/DataFixtures/ContainerAwareLoader.php';
        include_once \dirname(__DIR__, 5).'/vendor/doctrine/doctrine-fixtures-bundle/Loader/SymfonyFixturesLoader.php';
        include_once \dirname(__DIR__, 5).'/vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/FixtureInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/SharedFixtureInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/AbstractFixture.php';
        include_once \dirname(__DIR__, 5).'/vendor/doctrine/doctrine-fixtures-bundle/ORMFixtureInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/doctrine/doctrine-fixtures-bundle/Fixture.php';
        include_once \dirname(__DIR__, 5).'/src/DataFixtures/AppFixtures.php';
        include_once \dirname(__DIR__, 5).'/vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/OrderedFixtureInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/ContactBundle/DataFixtures/ORM/LoadDefaultTypes.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/MediaBundle/DataFixtures/ORM/LoadCollectionTypes.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/MediaBundle/DataFixtures/ORM/LoadMediaTypes.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/SecurityBundle/DataFixtures/ORM/LoadSecurityTypes.php';
        include_once \dirname(__DIR__, 5).'/vendor/doctrine/doctrine-fixtures-bundle/Purger/PurgerFactory.php';
        include_once \dirname(__DIR__, 5).'/vendor/doctrine/doctrine-fixtures-bundle/Purger/ORMPurgerFactory.php';

        $a = new \Doctrine\Bundle\FixturesBundle\Loader\SymfonyFixturesLoader($container);
        $a->addFixtures([0 => ['fixture' => new \App\DataFixtures\AppFixtures(), 'groups' => []], 1 => ['fixture' => new \Sulu\Bundle\ContactBundle\DataFixtures\ORM\LoadDefaultTypes(), 'groups' => []], 2 => ['fixture' => new \Sulu\Bundle\MediaBundle\DataFixtures\ORM\LoadCollectionTypes(), 'groups' => []], 3 => ['fixture' => new \Sulu\Bundle\MediaBundle\DataFixtures\ORM\LoadMediaTypes(), 'groups' => []], 4 => ['fixture' => new \Sulu\Bundle\SecurityBundle\DataFixtures\ORM\LoadSecurityTypes(), 'groups' => []]]);

        $container->privates['doctrine.fixtures_load_command'] = $instance = new \Doctrine\Bundle\FixturesBundle\Command\LoadDataFixturesDoctrineCommand($a, ($container->services['doctrine'] ?? $container->getDoctrineService()), ['default' => new \Doctrine\Bundle\FixturesBundle\Purger\ORMPurgerFactory()]);

        $instance->setName('doctrine:fixtures:load');

        return $instance;
    }
}
