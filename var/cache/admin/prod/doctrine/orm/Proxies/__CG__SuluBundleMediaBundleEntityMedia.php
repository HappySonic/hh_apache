<?php

namespace Proxies\__CG__\Sulu\Bundle\MediaBundle\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Media extends \Sulu\Bundle\MediaBundle\Entity\Media implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', 'id', 'files', 'collection', 'type', 'previewImage', 'creator', 'changer', 'created', 'changed'];
        }

        return ['__isInitialized__', 'id', 'files', 'collection', 'type', 'previewImage', 'creator', 'changer', 'created', 'changed'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Media $proxy) {
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
    public function addFile(\Sulu\Bundle\MediaBundle\Entity\File $files)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addFile', [$files]);

        return parent::addFile($files);
    }

    /**
     * {@inheritDoc}
     */
    public function removeFile(\Sulu\Bundle\MediaBundle\Entity\File $files)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeFile', [$files]);

        return parent::removeFile($files);
    }

    /**
     * {@inheritDoc}
     */
    public function getFiles()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFiles', []);

        return parent::getFiles();
    }

    /**
     * {@inheritDoc}
     */
    public function setCollection(\Sulu\Bundle\MediaBundle\Entity\CollectionInterface $collection)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCollection', [$collection]);

        return parent::setCollection($collection);
    }

    /**
     * {@inheritDoc}
     */
    public function getCollection()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCollection', []);

        return parent::getCollection();
    }

    /**
     * {@inheritDoc}
     */
    public function setType(\Sulu\Bundle\MediaBundle\Entity\MediaType $type)
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
    public function setPreviewImage(\Sulu\Bundle\MediaBundle\Entity\MediaInterface $previewImage = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPreviewImage', [$previewImage]);

        return parent::setPreviewImage($previewImage);
    }

    /**
     * {@inheritDoc}
     */
    public function getPreviewImage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPreviewImage', []);

        return parent::getPreviewImage();
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
