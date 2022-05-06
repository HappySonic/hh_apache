<?php

namespace ContainerUx2i24J;
include_once \dirname(__DIR__, 5).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 5).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 5).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder4a50a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer853e4 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesa31b3 = [
        
    ];

    public function getConnection()
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'getConnection', array(), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'getMetadataFactory', array(), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'getExpressionBuilder', array(), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'beginTransaction', array(), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'getCache', array(), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->getCache();
    }

    public function transactional($func)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'transactional', array('func' => $func), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'wrapInTransaction', array('func' => $func), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'commit', array(), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->commit();
    }

    public function rollback()
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'rollback', array(), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'getClassMetadata', array('className' => $className), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'createQuery', array('dql' => $dql), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'createNamedQuery', array('name' => $name), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'createQueryBuilder', array(), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'flush', array('entity' => $entity), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'clear', array('entityName' => $entityName), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->clear($entityName);
    }

    public function close()
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'close', array(), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->close();
    }

    public function persist($entity)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'persist', array('entity' => $entity), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'remove', array('entity' => $entity), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'refresh', array('entity' => $entity), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'detach', array('entity' => $entity), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'merge', array('entity' => $entity), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'getRepository', array('entityName' => $entityName), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'contains', array('entity' => $entity), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'getEventManager', array(), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'getConfiguration', array(), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'isOpen', array(), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'getUnitOfWork', array(), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'getProxyFactory', array(), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'initializeObject', array('obj' => $obj), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'getFilters', array(), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'isFiltersStateClean', array(), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'hasFilters', array(), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer853e4 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder4a50a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder4a50a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder4a50a->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, '__get', ['name' => $name], $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        if (isset(self::$publicPropertiesa31b3[$name])) {
            return $this->valueHolder4a50a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4a50a;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder4a50a;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4a50a;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder4a50a;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, '__isset', array('name' => $name), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4a50a;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder4a50a;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, '__unset', array('name' => $name), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4a50a;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder4a50a;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, '__clone', array(), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        $this->valueHolder4a50a = clone $this->valueHolder4a50a;
    }

    public function __sleep()
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, '__sleep', array(), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return array('valueHolder4a50a');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer853e4 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer853e4;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'initializeProxy', array(), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder4a50a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder4a50a;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
