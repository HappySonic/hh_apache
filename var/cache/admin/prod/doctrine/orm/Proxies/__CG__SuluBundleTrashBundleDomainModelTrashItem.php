<?php

namespace Proxies\__CG__\Sulu\Bundle\TrashBundle\Domain\Model;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class TrashItem extends \Sulu\Bundle\TrashBundle\Domain\Model\TrashItem implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Sulu\\Bundle\\TrashBundle\\Domain\\Model\\TrashItem' . "\0" . 'id', '' . "\0" . 'Sulu\\Bundle\\TrashBundle\\Domain\\Model\\TrashItem' . "\0" . 'resourceKey', '' . "\0" . 'Sulu\\Bundle\\TrashBundle\\Domain\\Model\\TrashItem' . "\0" . 'resourceId', '' . "\0" . 'Sulu\\Bundle\\TrashBundle\\Domain\\Model\\TrashItem' . "\0" . 'restoreData', '' . "\0" . 'Sulu\\Bundle\\TrashBundle\\Domain\\Model\\TrashItem' . "\0" . 'restoreType', '' . "\0" . 'Sulu\\Bundle\\TrashBundle\\Domain\\Model\\TrashItem' . "\0" . 'restoreOptions', '' . "\0" . 'Sulu\\Bundle\\TrashBundle\\Domain\\Model\\TrashItem' . "\0" . 'resourceSecurityContext', '' . "\0" . 'Sulu\\Bundle\\TrashBundle\\Domain\\Model\\TrashItem' . "\0" . 'resourceSecurityObjectType', '' . "\0" . 'Sulu\\Bundle\\TrashBundle\\Domain\\Model\\TrashItem' . "\0" . 'resourceSecurityObjectId', '' . "\0" . 'Sulu\\Bundle\\TrashBundle\\Domain\\Model\\TrashItem' . "\0" . 'storeTimestamp', '' . "\0" . 'Sulu\\Bundle\\TrashBundle\\Domain\\Model\\TrashItem' . "\0" . 'user', '' . "\0" . 'Sulu\\Bundle\\TrashBundle\\Domain\\Model\\TrashItem' . "\0" . 'translations', '' . "\0" . 'Sulu\\Bundle\\TrashBundle\\Domain\\Model\\TrashItem' . "\0" . 'defaultLocale'];
        }

        return ['__isInitialized__', '' . "\0" . 'Sulu\\Bundle\\TrashBundle\\Domain\\Model\\TrashItem' . "\0" . 'id', '' . "\0" . 'Sulu\\Bundle\\TrashBundle\\Domain\\Model\\TrashItem' . "\0" . 'resourceKey', '' . "\0" . 'Sulu\\Bundle\\TrashBundle\\Domain\\Model\\TrashItem' . "\0" . 'resourceId', '' . "\0" . 'Sulu\\Bundle\\TrashBundle\\Domain\\Model\\TrashItem' . "\0" . 'restoreData', '' . "\0" . 'Sulu\\Bundle\\TrashBundle\\Domain\\Model\\TrashItem' . "\0" . 'restoreType', '' . "\0" . 'Sulu\\Bundle\\TrashBundle\\Domain\\Model\\TrashItem' . "\0" . 'restoreOptions', '' . "\0" . 'Sulu\\Bundle\\TrashBundle\\Domain\\Model\\TrashItem' . "\0" . 'resourceSecurityContext', '' . "\0" . 'Sulu\\Bundle\\TrashBundle\\Domain\\Model\\TrashItem' . "\0" . 'resourceSecurityObjectType', '' . "\0" . 'Sulu\\Bundle\\TrashBundle\\Domain\\Model\\TrashItem' . "\0" . 'resourceSecurityObjectId', '' . "\0" . 'Sulu\\Bundle\\TrashBundle\\Domain\\Model\\TrashItem' . "\0" . 'storeTimestamp', '' . "\0" . 'Sulu\\Bundle\\TrashBundle\\Domain\\Model\\TrashItem' . "\0" . 'user', '' . "\0" . 'Sulu\\Bundle\\TrashBundle\\Domain\\Model\\TrashItem' . "\0" . 'translations', '' . "\0" . 'Sulu\\Bundle\\TrashBundle\\Domain\\Model\\TrashItem' . "\0" . 'defaultLocale'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (TrashItem $proxy) {
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
    public function getId(): ?int
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
    public function getResourceKey(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getResourceKey', []);

        return parent::getResourceKey();
    }

    /**
     * {@inheritDoc}
     */
    public function setResourceKey(string $resourceKey): \Sulu\Bundle\TrashBundle\Domain\Model\TrashItemInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setResourceKey', [$resourceKey]);

        return parent::setResourceKey($resourceKey);
    }

    /**
     * {@inheritDoc}
     */
    public function getResourceId(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getResourceId', []);

        return parent::getResourceId();
    }

    /**
     * {@inheritDoc}
     */
    public function setResourceId(string $resourceId): \Sulu\Bundle\TrashBundle\Domain\Model\TrashItemInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setResourceId', [$resourceId]);

        return parent::setResourceId($resourceId);
    }

    /**
     * {@inheritDoc}
     */
    public function getRestoreData(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRestoreData', []);

        return parent::getRestoreData();
    }

    /**
     * {@inheritDoc}
     */
    public function setRestoreData(array $restoreData): \Sulu\Bundle\TrashBundle\Domain\Model\TrashItemInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRestoreData', [$restoreData]);

        return parent::setRestoreData($restoreData);
    }

    /**
     * {@inheritDoc}
     */
    public function getRestoreType(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRestoreType', []);

        return parent::getRestoreType();
    }

    /**
     * {@inheritDoc}
     */
    public function setRestoreType(?string $restoreType): \Sulu\Bundle\TrashBundle\Domain\Model\TrashItemInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRestoreType', [$restoreType]);

        return parent::setRestoreType($restoreType);
    }

    /**
     * {@inheritDoc}
     */
    public function getRestoreOptions(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRestoreOptions', []);

        return parent::getRestoreOptions();
    }

    /**
     * {@inheritDoc}
     */
    public function setRestoreOptions(array $restoreOptions): \Sulu\Bundle\TrashBundle\Domain\Model\TrashItemInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRestoreOptions', [$restoreOptions]);

        return parent::setRestoreOptions($restoreOptions);
    }

    /**
     * {@inheritDoc}
     */
    public function getResourceTitle(string $locale = NULL): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getResourceTitle', [$locale]);

        return parent::getResourceTitle($locale);
    }

    /**
     * {@inheritDoc}
     */
    public function setResourceTitle(string $resourceTitle, string $locale = NULL): \Sulu\Bundle\TrashBundle\Domain\Model\TrashItemInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setResourceTitle', [$resourceTitle, $locale]);

        return parent::setResourceTitle($resourceTitle, $locale);
    }

    /**
     * {@inheritDoc}
     */
    public function getResourceSecurityContext(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getResourceSecurityContext', []);

        return parent::getResourceSecurityContext();
    }

    /**
     * {@inheritDoc}
     */
    public function setResourceSecurityContext(?string $resourceSecurityContext): \Sulu\Bundle\TrashBundle\Domain\Model\TrashItemInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setResourceSecurityContext', [$resourceSecurityContext]);

        return parent::setResourceSecurityContext($resourceSecurityContext);
    }

    /**
     * {@inheritDoc}
     */
    public function getResourceSecurityObjectType(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getResourceSecurityObjectType', []);

        return parent::getResourceSecurityObjectType();
    }

    /**
     * {@inheritDoc}
     */
    public function setResourceSecurityObjectType(?string $resourceSecurityObjectType): \Sulu\Bundle\TrashBundle\Domain\Model\TrashItemInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setResourceSecurityObjectType', [$resourceSecurityObjectType]);

        return parent::setResourceSecurityObjectType($resourceSecurityObjectType);
    }

    /**
     * {@inheritDoc}
     */
    public function getResourceSecurityObjectId(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getResourceSecurityObjectId', []);

        return parent::getResourceSecurityObjectId();
    }

    /**
     * {@inheritDoc}
     */
    public function setResourceSecurityObjectId(?string $resourceSecurityObjectId): \Sulu\Bundle\TrashBundle\Domain\Model\TrashItemInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setResourceSecurityObjectId', [$resourceSecurityObjectId]);

        return parent::setResourceSecurityObjectId($resourceSecurityObjectId);
    }

    /**
     * {@inheritDoc}
     */
    public function getStoreTimestamp(): \DateTimeImmutable
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStoreTimestamp', []);

        return parent::getStoreTimestamp();
    }

    /**
     * {@inheritDoc}
     */
    public function setStoreTimestamp(\DateTimeImmutable $storeTimestamp): \Sulu\Bundle\TrashBundle\Domain\Model\TrashItemInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStoreTimestamp', [$storeTimestamp]);

        return parent::setStoreTimestamp($storeTimestamp);
    }

    /**
     * {@inheritDoc}
     */
    public function getUser(): ?\Sulu\Component\Security\Authentication\UserInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', []);

        return parent::getUser();
    }

    /**
     * {@inheritDoc}
     */
    public function getUserId(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserId', []);

        return parent::getUserId();
    }

    /**
     * {@inheritDoc}
     */
    public function setUser(?\Sulu\Component\Security\Authentication\UserInterface $user): \Sulu\Bundle\TrashBundle\Domain\Model\TrashItemInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', [$user]);

        return parent::setUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getTranslation(string $locale = NULL, bool $fallback = false): \Sulu\Bundle\TrashBundle\Domain\Model\TrashItemTranslation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTranslation', [$locale, $fallback]);

        return parent::getTranslation($locale, $fallback);
    }

}
