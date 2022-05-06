<?php

namespace Proxies\__CG__\Sulu\Bundle\SecurityBundle\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Role extends \Sulu\Bundle\SecurityBundle\Entity\Role implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'Sulu\\Bundle\\SecurityBundle\\Entity\\Role' . "\0" . 'id', '' . "\0" . 'Sulu\\Bundle\\SecurityBundle\\Entity\\Role' . "\0" . 'name', '' . "\0" . 'Sulu\\Bundle\\SecurityBundle\\Entity\\Role' . "\0" . 'key', '' . "\0" . 'Sulu\\Bundle\\SecurityBundle\\Entity\\Role' . "\0" . 'system', '' . "\0" . 'Sulu\\Bundle\\SecurityBundle\\Entity\\Role' . "\0" . 'securityType', '' . "\0" . 'Sulu\\Bundle\\SecurityBundle\\Entity\\Role' . "\0" . 'permissions', '' . "\0" . 'Sulu\\Bundle\\SecurityBundle\\Entity\\Role' . "\0" . 'userRoles', '' . "\0" . 'Sulu\\Bundle\\SecurityBundle\\Entity\\Role' . "\0" . 'groups', '' . "\0" . 'Sulu\\Bundle\\SecurityBundle\\Entity\\Role' . "\0" . 'settings', '' . "\0" . 'Sulu\\Bundle\\SecurityBundle\\Entity\\Role' . "\0" . 'anonymous', 'creator', 'changer', 'created', 'changed'];
        }

        return ['__isInitialized__', '' . "\0" . 'Sulu\\Bundle\\SecurityBundle\\Entity\\Role' . "\0" . 'id', '' . "\0" . 'Sulu\\Bundle\\SecurityBundle\\Entity\\Role' . "\0" . 'name', '' . "\0" . 'Sulu\\Bundle\\SecurityBundle\\Entity\\Role' . "\0" . 'key', '' . "\0" . 'Sulu\\Bundle\\SecurityBundle\\Entity\\Role' . "\0" . 'system', '' . "\0" . 'Sulu\\Bundle\\SecurityBundle\\Entity\\Role' . "\0" . 'securityType', '' . "\0" . 'Sulu\\Bundle\\SecurityBundle\\Entity\\Role' . "\0" . 'permissions', '' . "\0" . 'Sulu\\Bundle\\SecurityBundle\\Entity\\Role' . "\0" . 'userRoles', '' . "\0" . 'Sulu\\Bundle\\SecurityBundle\\Entity\\Role' . "\0" . 'groups', '' . "\0" . 'Sulu\\Bundle\\SecurityBundle\\Entity\\Role' . "\0" . 'settings', '' . "\0" . 'Sulu\\Bundle\\SecurityBundle\\Entity\\Role' . "\0" . 'anonymous', 'creator', 'changer', 'created', 'changed'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Role $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getRole()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRole', []);

        return parent::getRole();
    }

    /**
     * {@inheritDoc}
     */
    public function getIdentifier()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdentifier', []);

        return parent::getIdentifier();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function getKey()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getKey', []);

        return parent::getKey();
    }

    /**
     * {@inheritDoc}
     */
    public function setKey($key)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setKey', [$key]);

        return parent::setKey($key);
    }

    /**
     * {@inheritDoc}
     */
    public function setSystem($system)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSystem', [$system]);

        return parent::setSystem($system);
    }

    /**
     * {@inheritDoc}
     */
    public function getSystem()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSystem', []);

        return parent::getSystem();
    }

    /**
     * {@inheritDoc}
     */
    public function setSecurityType(\Sulu\Bundle\SecurityBundle\Entity\SecurityType $securityType = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSecurityType', [$securityType]);

        return parent::setSecurityType($securityType);
    }

    /**
     * {@inheritDoc}
     */
    public function getSecurityType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSecurityType', []);

        return parent::getSecurityType();
    }

    /**
     * {@inheritDoc}
     */
    public function addPermission(\Sulu\Bundle\SecurityBundle\Entity\Permission $permissions)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPermission', [$permissions]);

        return parent::addPermission($permissions);
    }

    /**
     * {@inheritDoc}
     */
    public function removePermission(\Sulu\Bundle\SecurityBundle\Entity\Permission $permissions)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removePermission', [$permissions]);

        return parent::removePermission($permissions);
    }

    /**
     * {@inheritDoc}
     */
    public function getPermissions()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPermissions', []);

        return parent::getPermissions();
    }

    /**
     * {@inheritDoc}
     */
    public function addUserRole(\Sulu\Bundle\SecurityBundle\Entity\UserRole $userRoles)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addUserRole', [$userRoles]);

        return parent::addUserRole($userRoles);
    }

    /**
     * {@inheritDoc}
     */
    public function removeUserRole(\Sulu\Bundle\SecurityBundle\Entity\UserRole $userRoles)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeUserRole', [$userRoles]);

        return parent::removeUserRole($userRoles);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserRoles()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserRoles', []);

        return parent::getUserRoles();
    }

    /**
     * {@inheritDoc}
     */
    public function addGroup(\Sulu\Bundle\SecurityBundle\Entity\Group $groups)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addGroup', [$groups]);

        return parent::addGroup($groups);
    }

    /**
     * {@inheritDoc}
     */
    public function removeGroup(\Sulu\Bundle\SecurityBundle\Entity\Group $groups)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeGroup', [$groups]);

        return parent::removeGroup($groups);
    }

    /**
     * {@inheritDoc}
     */
    public function getGroups()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGroups', []);

        return parent::getGroups();
    }

    /**
     * {@inheritDoc}
     */
    public function addSetting(\Sulu\Component\Security\Authentication\RoleSettingInterface $setting)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addSetting', [$setting]);

        return parent::addSetting($setting);
    }

    /**
     * {@inheritDoc}
     */
    public function removeSetting(\Sulu\Component\Security\Authentication\RoleSettingInterface $setting)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeSetting', [$setting]);

        return parent::removeSetting($setting);
    }

    /**
     * {@inheritDoc}
     */
    public function getSettings()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSettings', []);

        return parent::getSettings();
    }

    /**
     * {@inheritDoc}
     */
    public function getSetting($key)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSetting', [$key]);

        return parent::getSetting($key);
    }

    /**
     * {@inheritDoc}
     */
    public function getAnonymous(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAnonymous', []);

        return parent::getAnonymous();
    }

    /**
     * {@inheritDoc}
     */
    public function setAnonymous(bool $anonymous)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAnonymous', [$anonymous]);

        return parent::setAnonymous($anonymous);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreator()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreator', []);

        return parent::getCreator();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreator($creator)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreator', [$creator]);

        return parent::setCreator($creator);
    }

    /**
     * {@inheritDoc}
     */
    public function getChanger()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChanger', []);

        return parent::getChanger();
    }

    /**
     * {@inheritDoc}
     */
    public function setChanger($changer)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChanger', [$changer]);

        return parent::setChanger($changer);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreated', []);

        return parent::getCreated();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreated($created)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreated', [$created]);

        return parent::setCreated($created);
    }

    /**
     * {@inheritDoc}
     */
    public function getChanged()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChanged', []);

        return parent::getChanged();
    }

    /**
     * {@inheritDoc}
     */
    public function setChanged($changed)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChanged', [$changed]);

        return parent::setChanged($changed);
    }

}
