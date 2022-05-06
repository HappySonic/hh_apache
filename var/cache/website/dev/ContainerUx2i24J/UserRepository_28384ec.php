<?php

namespace ContainerUx2i24J;
include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Persistence/Repository/RepositoryInterface.php';
include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Persistence/Repository/ORM/EntityRepository.php';
include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Security/Authentication/UserRepositoryInterface.php';
include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Persistence/Repository/ORM/OrderByTrait.php';
include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/SecurityBundle/Entity/UserRepository.php';

class UserRepository_28384ec extends \Sulu\Bundle\SecurityBundle\Entity\UserRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Sulu\Bundle\SecurityBundle\Entity\UserRepository|null wrapped object, if the proxy is initialized
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

    public function findUsersByAccount($accountId, $sortBy = [])
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'findUsersByAccount', array('accountId' => $accountId, 'sortBy' => $sortBy), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->findUsersByAccount($accountId, $sortBy);
    }

    public function findUserById($id)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'findUserById', array('id' => $id), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->findUserById($id);
    }

    public function findUsersById(array $ids)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'findUsersById', array('ids' => $ids), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->findUsersById($ids);
    }

    public function findUserByContact($id)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'findUserByContact', array('id' => $id), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->findUserByContact($id);
    }

    public function findUserByUsername($username)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'findUserByUsername', array('username' => $username), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->findUserByUsername($username);
    }

    public function findAllUsersByRoleId($roleId)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'findAllUsersByRoleId', array('roleId' => $roleId), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->findAllUsersByRoleId($roleId);
    }

    public function findUserByEmail($email)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'findUserByEmail', array('email' => $email), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->findUserByEmail($email);
    }

    public function findUserByToken($token)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'findUserByToken', array('token' => $token), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->findUserByToken($token);
    }

    public function findUserByIdentifier($identifier)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'findUserByIdentifier', array('identifier' => $identifier), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->findUserByIdentifier($identifier);
    }

    public function findUserWithSecurityById($id)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'findUserWithSecurityById', array('id' => $id), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->findUserWithSecurityById($id);
    }

    public function getUsernameByApiKey($apiKey)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'getUsernameByApiKey', array('apiKey' => $apiKey), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->getUsernameByApiKey($apiKey);
    }

    public function findUserBySystem($system)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'findUserBySystem', array('system' => $system), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->findUserBySystem($system);
    }

    public function createNew()
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'createNew', array(), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->createNew();
    }

    public function createQueryBuilder($alias, $indexBy = null)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'createQueryBuilder', array('alias' => $alias, 'indexBy' => $indexBy), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->createQueryBuilder($alias, $indexBy);
    }

    public function createResultSetMappingBuilder($alias)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'createResultSetMappingBuilder', array('alias' => $alias), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->createResultSetMappingBuilder($alias);
    }

    public function createNamedQuery($queryName)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'createNamedQuery', array('queryName' => $queryName), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->createNamedQuery($queryName);
    }

    public function createNativeNamedQuery($queryName)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'createNativeNamedQuery', array('queryName' => $queryName), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->createNativeNamedQuery($queryName);
    }

    public function clear()
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'clear', array(), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->clear();
    }

    public function find($id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'find', array('id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->find($id, $lockMode, $lockVersion);
    }

    public function findAll()
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'findAll', array(), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->findAll();
    }

    public function findBy(array $criteria, ?array $orderBy = null, $limit = null, $offset = null)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'findBy', array('criteria' => $criteria, 'orderBy' => $orderBy, 'limit' => $limit, 'offset' => $offset), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->findBy($criteria, $orderBy, $limit, $offset);
    }

    public function findOneBy(array $criteria, ?array $orderBy = null)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'findOneBy', array('criteria' => $criteria, 'orderBy' => $orderBy), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->findOneBy($criteria, $orderBy);
    }

    public function count(array $criteria)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'count', array('criteria' => $criteria), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->count($criteria);
    }

    public function __call($method, $arguments)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->__call($method, $arguments);
    }

    public function getClassName()
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'getClassName', array(), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->getClassName();
    }

    public function matching(\Doctrine\Common\Collections\Criteria $criteria)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'matching', array('criteria' => $criteria), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->matching($criteria);
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

        $instance->initializer853e4 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\ORM\EntityManagerInterface $em, \Doctrine\ORM\Mapping\ClassMetadata $class)
    {
        static $reflection;

        if (! $this->valueHolder4a50a) {
            $reflection = $reflection ?? new \ReflectionClass('Sulu\\Bundle\\SecurityBundle\\Entity\\UserRepository');
            $this->valueHolder4a50a = $reflection->newInstanceWithoutConstructor();
        unset($this->_entityName, $this->_em, $this->_class);

        }

        $this->valueHolder4a50a->__construct($em, $class);
    }

    public function & __get($name)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, '__get', ['name' => $name], $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        if (isset(self::$publicPropertiesa31b3[$name])) {
            return $this->valueHolder4a50a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Sulu\\Bundle\\SecurityBundle\\Entity\\UserRepository');

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

        $realInstanceReflection = new \ReflectionClass('Sulu\\Bundle\\SecurityBundle\\Entity\\UserRepository');

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

        $realInstanceReflection = new \ReflectionClass('Sulu\\Bundle\\SecurityBundle\\Entity\\UserRepository');

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

        $realInstanceReflection = new \ReflectionClass('Sulu\\Bundle\\SecurityBundle\\Entity\\UserRepository');

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
        unset($this->_entityName, $this->_em, $this->_class);
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

if (!\class_exists('UserRepository_28384ec', false)) {
    \class_alias(__NAMESPACE__.'\\UserRepository_28384ec', 'UserRepository_28384ec', false);
}
