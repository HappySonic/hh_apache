<?php

namespace Proxies\__CG__\Sulu\Bundle\MediaBundle\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Collection extends \Sulu\Bundle\MediaBundle\Entity\Collection implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', 'id', 'style', 'lft', 'rgt', 'depth', 'created', 'changed', 'type', 'changer', 'creator', '' . "\0" . 'Sulu\\Bundle\\MediaBundle\\Entity\\Collection' . "\0" . 'key', '' . "\0" . 'Sulu\\Bundle\\MediaBundle\\Entity\\Collection' . "\0" . 'meta', '' . "\0" . 'Sulu\\Bundle\\MediaBundle\\Entity\\Collection' . "\0" . 'media', '' . "\0" . 'Sulu\\Bundle\\MediaBundle\\Entity\\Collection' . "\0" . 'children', '' . "\0" . 'Sulu\\Bundle\\MediaBundle\\Entity\\Collection' . "\0" . 'parent', '' . "\0" . 'Sulu\\Bundle\\MediaBundle\\Entity\\Collection' . "\0" . 'defaultMeta'];
        }

        return ['__isInitialized__', 'id', 'style', 'lft', 'rgt', 'depth', 'created', 'changed', 'type', 'changer', 'creator', '' . "\0" . 'Sulu\\Bundle\\MediaBundle\\Entity\\Collection' . "\0" . 'key', '' . "\0" . 'Sulu\\Bundle\\MediaBundle\\Entity\\Collection' . "\0" . 'meta', '' . "\0" . 'Sulu\\Bundle\\MediaBundle\\Entity\\Collection' . "\0" . 'media', '' . "\0" . 'Sulu\\Bundle\\MediaBundle\\Entity\\Collection' . "\0" . 'children', '' . "\0" . 'Sulu\\Bundle\\MediaBundle\\Entity\\Collection' . "\0" . 'parent', '' . "\0" . 'Sulu\\Bundle\\MediaBundle\\Entity\\Collection' . "\0" . 'defaultMeta'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Collection $proxy) {
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
    public function setChanger(\Sulu\Component\Security\Authentication\UserInterface $changer = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChanger', [$changer]);

        return parent::setChanger($changer);
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
    public function setCreator(\Sulu\Component\Security\Authentication\UserInterface $creator = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreator', [$creator]);

        return parent::setCreator($creator);
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
    public function setStyle($style)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStyle', [$style]);

        return parent::setStyle($style);
    }

    /**
     * {@inheritDoc}
     */
    public function getStyle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStyle', []);

        return parent::getStyle();
    }

    /**
     * {@inheritDoc}
     */
    public function setLft($lft)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLft', [$lft]);

        return parent::setLft($lft);
    }

    /**
     * {@inheritDoc}
     */
    public function getLft()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLft', []);

        return parent::getLft();
    }

    /**
     * {@inheritDoc}
     */
    public function setRgt($rgt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRgt', [$rgt]);

        return parent::setRgt($rgt);
    }

    /**
     * {@inheritDoc}
     */
    public function getRgt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRgt', []);

        return parent::getRgt();
    }

    /**
     * {@inheritDoc}
     */
    public function setDepth($depth)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDepth', [$depth]);

        return parent::setDepth($depth);
    }

    /**
     * {@inheritDoc}
     */
    public function getDepth()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDepth', []);

        return parent::getDepth();
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
    public function getChanged()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChanged', []);

        return parent::getChanged();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreated(\DateTime $created)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreated', [$created]);

        return parent::setCreated($created);
    }

    /**
     * {@inheritDoc}
     */
    public function setChanged(\DateTime $changed)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChanged', [$changed]);

        return parent::setChanged($changed);
    }

    /**
     * {@inheritDoc}
     */
    public function setType(\Sulu\Bundle\MediaBundle\Entity\CollectionType $type)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setType', [$type]);

        return parent::setType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function getType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getType', []);

        return parent::getType();
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
    public function getChildren()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChildren', []);

        return parent::getChildren();
    }

    /**
     * {@inheritDoc}
     */
    public function setChildren(\Doctrine\Common\Collections\Collection $children)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChildren', [$children]);

        return parent::setChildren($children);
    }

    /**
     * {@inheritDoc}
     */
    public function setParent(\Sulu\Bundle\MediaBundle\Entity\CollectionInterface $parent = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setParent', [$parent]);

        return parent::setParent($parent);
    }

    /**
     * {@inheritDoc}
     */
    public function getParent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getParent', []);

        return parent::getParent();
    }

    /**
     * {@inheritDoc}
     */
    public function getParentId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getParentId', []);

        return parent::getParentId();
    }

    /**
     * {@inheritDoc}
     */
    public function addMeta(\Sulu\Bundle\MediaBundle\Entity\CollectionMeta $meta)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addMeta', [$meta]);

        return parent::addMeta($meta);
    }

    /**
     * {@inheritDoc}
     */
    public function removeMeta(\Sulu\Bundle\MediaBundle\Entity\CollectionMeta $meta)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeMeta', [$meta]);

        return parent::removeMeta($meta);
    }

    /**
     * {@inheritDoc}
     */
    public function getMeta()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMeta', []);

        return parent::getMeta();
    }

    /**
     * {@inheritDoc}
     */
    public function addMedia(\Sulu\Bundle\MediaBundle\Entity\MediaInterface $media)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addMedia', [$media]);

        return parent::addMedia($media);
    }

    /**
     * {@inheritDoc}
     */
    public function removeMedia(\Sulu\Bundle\MediaBundle\Entity\MediaInterface $media)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeMedia', [$media]);

        return parent::removeMedia($media);
    }

    /**
     * {@inheritDoc}
     */
    public function getMedia()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMedia', []);

        return parent::getMedia();
    }

    /**
     * {@inheritDoc}
     */
    public function addChildren(\Sulu\Bundle\MediaBundle\Entity\CollectionInterface $children)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addChildren', [$children]);

        return parent::addChildren($children);
    }

    /**
     * {@inheritDoc}
     */
    public function removeChildren(\Sulu\Bundle\MediaBundle\Entity\CollectionInterface $children)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeChildren', [$children]);

        return parent::removeChildren($children);
    }

    /**
     * {@inheritDoc}
     */
    public function setDefaultMeta(\Sulu\Bundle\MediaBundle\Entity\CollectionMeta $defaultMeta = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDefaultMeta', [$defaultMeta]);

        return parent::setDefaultMeta($defaultMeta);
    }

    /**
     * {@inheritDoc}
     */
    public function getDefaultMeta()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDefaultMeta', []);

        return parent::getDefaultMeta();
    }

    /**
     * {@inheritDoc}
     */
    public function getSecurityContext()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSecurityContext', []);

        return parent::getSecurityContext();
    }

}
