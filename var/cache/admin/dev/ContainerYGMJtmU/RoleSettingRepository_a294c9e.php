<?php

namespace ContainerYGMJtmU;
include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Persistence/Repository/RepositoryInterface.php';
include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Persistence/Repository/ORM/EntityRepository.php';
include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Security/Authentication/RoleSettingRepositoryInterface.php';
include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/SecurityBundle/Entity/RoleSettingRepository.php';

class RoleSettingRepository_a294c9e extends \Sulu\Bundle\SecurityBundle\Entity\RoleSettingRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Sulu\Bundle\SecurityBundle\Entity\RoleSettingRepository|null wrapped object, if the proxy is initialized
     */
    private $valueHolderedeb5 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb5509 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties93d91 = [
        
    ];

    public function findSettingValue($roleId, $key)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'findSettingValue', array('roleId' => $roleId, 'key' => $key), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->findSettingValue($roleId, $key);
    }

    public function findSetting($roleId, $key)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'findSetting', array('roleId' => $roleId, 'key' => $key), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->findSetting($roleId, $key);
    }

    public function createNew()
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'createNew', array(), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->createNew();
    }

    public function createQueryBuilder($alias, $indexBy = null)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'createQueryBuilder', array('alias' => $alias, 'indexBy' => $indexBy), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->createQueryBuilder($alias, $indexBy);
    }

    public function createResultSetMappingBuilder($alias)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'createResultSetMappingBuilder', array('alias' => $alias), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->createResultSetMappingBuilder($alias);
    }

    public function createNamedQuery($queryName)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'createNamedQuery', array('queryName' => $queryName), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->createNamedQuery($queryName);
    }

    public function createNativeNamedQuery($queryName)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'createNativeNamedQuery', array('queryName' => $queryName), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->createNativeNamedQuery($queryName);
    }

    public function clear()
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'clear', array(), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->clear();
    }

    public function find($id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'find', array('id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->find($id, $lockMode, $lockVersion);
    }

    public function findAll()
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'findAll', array(), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->findAll();
    }

    public function findBy(array $criteria, ?array $orderBy = null, $limit = null, $offset = null)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'findBy', array('criteria' => $criteria, 'orderBy' => $orderBy, 'limit' => $limit, 'offset' => $offset), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->findBy($criteria, $orderBy, $limit, $offset);
    }

    public function findOneBy(array $criteria, ?array $orderBy = null)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'findOneBy', array('criteria' => $criteria, 'orderBy' => $orderBy), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->findOneBy($criteria, $orderBy);
    }

    public function count(array $criteria)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'count', array('criteria' => $criteria), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->count($criteria);
    }

    public function __call($method, $arguments)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->__call($method, $arguments);
    }

    public function getClassName()
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'getClassName', array(), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->getClassName();
    }

    public function matching(\Doctrine\Common\Collections\Criteria $criteria)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'matching', array('criteria' => $criteria), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->matching($criteria);
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

        unset($instance->_entityName, $instance->_em, $instance->_class);

        $instance->initializerb5509 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\ORM\EntityManagerInterface $em, \Doctrine\ORM\Mapping\ClassMetadata $class)
    {
        static $reflection;

        if (! $this->valueHolderedeb5) {
            $reflection = $reflection ?? new \ReflectionClass('Sulu\\Bundle\\SecurityBundle\\Entity\\RoleSettingRepository');
            $this->valueHolderedeb5 = $reflection->newInstanceWithoutConstructor();
        unset($this->_entityName, $this->_em, $this->_class);

        }

        $this->valueHolderedeb5->__construct($em, $class);
    }

    public function & __get($name)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, '__get', ['name' => $name], $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        if (isset(self::$publicProperties93d91[$name])) {
            return $this->valueHolderedeb5->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Sulu\\Bundle\\SecurityBundle\\Entity\\RoleSettingRepository');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderedeb5;

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

        $targetObject = $this->valueHolderedeb5;
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
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        $realInstanceReflection = new \ReflectionClass('Sulu\\Bundle\\SecurityBundle\\Entity\\RoleSettingRepository');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderedeb5;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderedeb5;
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
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, '__isset', array('name' => $name), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        $realInstanceReflection = new \ReflectionClass('Sulu\\Bundle\\SecurityBundle\\Entity\\RoleSettingRepository');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderedeb5;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderedeb5;
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
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, '__unset', array('name' => $name), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        $realInstanceReflection = new \ReflectionClass('Sulu\\Bundle\\SecurityBundle\\Entity\\RoleSettingRepository');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderedeb5;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderedeb5;
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
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, '__clone', array(), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        $this->valueHolderedeb5 = clone $this->valueHolderedeb5;
    }

    public function __sleep()
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, '__sleep', array(), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return array('valueHolderedeb5');
    }

    public function __wakeup()
    {
        unset($this->_entityName, $this->_em, $this->_class);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb5509 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb5509;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'initializeProxy', array(), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderedeb5;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderedeb5;
    }
}

if (!\class_exists('RoleSettingRepository_a294c9e', false)) {
    \class_alias(__NAMESPACE__.'\\RoleSettingRepository_a294c9e', 'RoleSettingRepository_a294c9e', false);
}
