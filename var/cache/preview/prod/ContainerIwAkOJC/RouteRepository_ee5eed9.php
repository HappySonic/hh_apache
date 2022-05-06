<?php

namespace ContainerIwAkOJC;

include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Persistence/Repository/RepositoryInterface.php';
include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Persistence/Repository/ORM/EntityRepository.php';
include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/RouteBundle/Entity/RouteRepositoryInterface.php';
include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/RouteBundle/Entity/RouteRepository.php';
class RouteRepository_ee5eed9 extends \Sulu\Bundle\RouteBundle\Entity\RouteRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder8c057 = null;
    private $initializera2e88 = null;
    private static $publicPropertiesa4d84 = [
        
    ];
    public function findByPath($path, $locale)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'findByPath', array('path' => $path, 'locale' => $locale), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->findByPath($path, $locale);
    }
    public function findByEntity($entityClass, $entityId, $locale)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'findByEntity', array('entityClass' => $entityClass, 'entityId' => $entityId, 'locale' => $locale), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->findByEntity($entityClass, $entityId, $locale);
    }
    public function findHistoryByEntity($entityClass, $entityId, $locale)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'findHistoryByEntity', array('entityClass' => $entityClass, 'entityId' => $entityId, 'locale' => $locale), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->findHistoryByEntity($entityClass, $entityId, $locale);
    }
    public function findAllByEntity($entityClass, $entityId, $locale = null)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'findAllByEntity', array('entityClass' => $entityClass, 'entityId' => $entityId, 'locale' => $locale), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->findAllByEntity($entityClass, $entityId, $locale);
    }
    public function persist(\Sulu\Bundle\RouteBundle\Model\RouteInterface $route)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'persist', array('route' => $route), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->persist($route);
    }
    public function remove(\Sulu\Bundle\RouteBundle\Model\RouteInterface $route)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'remove', array('route' => $route), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->remove($route);
    }
    public function createNew()
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'createNew', array(), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->createNew();
    }
    public function createQueryBuilder($alias, $indexBy = null)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'createQueryBuilder', array('alias' => $alias, 'indexBy' => $indexBy), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->createQueryBuilder($alias, $indexBy);
    }
    public function createResultSetMappingBuilder($alias)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'createResultSetMappingBuilder', array('alias' => $alias), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->createResultSetMappingBuilder($alias);
    }
    public function createNamedQuery($queryName)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'createNamedQuery', array('queryName' => $queryName), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->createNamedQuery($queryName);
    }
    public function createNativeNamedQuery($queryName)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'createNativeNamedQuery', array('queryName' => $queryName), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->createNativeNamedQuery($queryName);
    }
    public function clear()
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'clear', array(), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->clear();
    }
    public function find($id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'find', array('id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->find($id, $lockMode, $lockVersion);
    }
    public function findAll()
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'findAll', array(), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->findAll();
    }
    public function findBy(array $criteria, ?array $orderBy = null, $limit = null, $offset = null)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'findBy', array('criteria' => $criteria, 'orderBy' => $orderBy, 'limit' => $limit, 'offset' => $offset), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->findBy($criteria, $orderBy, $limit, $offset);
    }
    public function findOneBy(array $criteria, ?array $orderBy = null)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'findOneBy', array('criteria' => $criteria, 'orderBy' => $orderBy), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->findOneBy($criteria, $orderBy);
    }
    public function count(array $criteria)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'count', array('criteria' => $criteria), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->count($criteria);
    }
    public function __call($method, $arguments)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->__call($method, $arguments);
    }
    public function getClassName()
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'getClassName', array(), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->getClassName();
    }
    public function matching(\Doctrine\Common\Collections\Criteria $criteria)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'matching', array('criteria' => $criteria), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->matching($criteria);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->_entityName, $instance->_em, $instance->_class);
        $instance->initializera2e88 = $initializer;
        return $instance;
    }
    public function __construct(\Doctrine\ORM\EntityManagerInterface $em, \Doctrine\ORM\Mapping\ClassMetadata $class)
    {
        static $reflection;
        if (! $this->valueHolder8c057) {
            $reflection = $reflection ?? new \ReflectionClass('Sulu\\Bundle\\RouteBundle\\Entity\\RouteRepository');
            $this->valueHolder8c057 = $reflection->newInstanceWithoutConstructor();
        unset($this->_entityName, $this->_em, $this->_class);
        }
        $this->valueHolder8c057->__construct($em, $class);
    }
    public function & __get($name)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, '__get', ['name' => $name], $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        if (isset(self::$publicPropertiesa4d84[$name])) {
            return $this->valueHolder8c057->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Sulu\\Bundle\\RouteBundle\\Entity\\RouteRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8c057;
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
        $targetObject = $this->valueHolder8c057;
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
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        $realInstanceReflection = new \ReflectionClass('Sulu\\Bundle\\RouteBundle\\Entity\\RouteRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8c057;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder8c057;
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
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, '__isset', array('name' => $name), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        $realInstanceReflection = new \ReflectionClass('Sulu\\Bundle\\RouteBundle\\Entity\\RouteRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8c057;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder8c057;
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
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, '__unset', array('name' => $name), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        $realInstanceReflection = new \ReflectionClass('Sulu\\Bundle\\RouteBundle\\Entity\\RouteRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8c057;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder8c057;
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
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, '__clone', array(), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        $this->valueHolder8c057 = clone $this->valueHolder8c057;
    }
    public function __sleep()
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, '__sleep', array(), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return array('valueHolder8c057');
    }
    public function __wakeup()
    {
        unset($this->_entityName, $this->_em, $this->_class);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera2e88 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera2e88;
    }
    public function initializeProxy() : bool
    {
        return $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'initializeProxy', array(), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder8c057;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder8c057;
    }
}

if (!\class_exists('RouteRepository_ee5eed9', false)) {
    \class_alias(__NAMESPACE__.'\\RouteRepository_ee5eed9', 'RouteRepository_ee5eed9', false);
}