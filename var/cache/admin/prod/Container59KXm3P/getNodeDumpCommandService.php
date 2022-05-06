<?php

namespace Container59KXm3P;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNodeDumpCommandService extends App_KernelProdContainer
{
    /*
     * Gets the public 'console.command.public_alias.Doctrine\Bundle\PHPCRBundle\Command\NodeDumpCommand' shared service.
     *
     * @return \Doctrine\Bundle\PHPCRBundle\Command\NodeDumpCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 5).'/vendor/phpcr/phpcr-utils/src/PHPCR/Util/Console/Command/BaseCommand.php';
        include_once \dirname(__DIR__, 5).'/vendor/phpcr/phpcr-utils/src/PHPCR/Util/Console/Command/NodeDumpCommand.php';
        include_once \dirname(__DIR__, 5).'/vendor/doctrine/phpcr-bundle/src/Command/NodeDumpCommand.php';
        include_once \dirname(__DIR__, 5).'/vendor/symfony/console/Helper/HelperInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/symfony/console/Helper/Helper.php';
        include_once \dirname(__DIR__, 5).'/vendor/phpcr/phpcr-utils/src/PHPCR/Util/Console/Helper/PhpcrConsoleDumperHelper.php';

        $container->services['console.command.public_alias.Doctrine\\Bundle\\PHPCRBundle\\Command\\NodeDumpCommand'] = $instance = new \Doctrine\Bundle\PHPCRBundle\Command\NodeDumpCommand();

        $instance->setConsoleDumper(new \PHPCR\Util\Console\Helper\PhpcrConsoleDumperHelper());

        return $instance;
    }
}
