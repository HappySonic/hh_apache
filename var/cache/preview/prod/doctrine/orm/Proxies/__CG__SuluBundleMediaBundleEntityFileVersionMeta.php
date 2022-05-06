<?php

namespace Proxies\__CG__\Sulu\Bundle\MediaBundle\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class FileVersionMeta extends \Sulu\Bundle\MediaBundle\Entity\FileVersionMeta implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Sulu\\Bundle\\MediaBundle\\Entity\\FileVersionMeta' . "\0" . 'id', '' . "\0" . 'Sulu\\Bundle\\MediaBundle\\Entity\\FileVersionMeta' . "\0" . 'title', '' . "\0" . 'Sulu\\Bundle\\MediaBundle\\Entity\\FileVersionMeta' . "\0" . 'description', '' . "\0" . 'Sulu\\Bundle\\MediaBundle\\Entity\\FileVersionMeta' . "\0" . 'copyright', '' . "\0" . 'Sulu\\Bundle\\MediaBundle\\Entity\\FileVersionMeta' . "\0" . 'credits', '' . "\0" . 'Sulu\\Bundle\\MediaBundle\\Entity\\FileVersionMeta' . "\0" . 'locale', '' . "\0" . 'Sulu\\Bundle\\MediaBundle\\Entity\\FileVersionMeta' . "\0" . 'fileVersion'];
        }

        return ['__isInitialized__', '' . "\0" . 'Sulu\\Bundle\\MediaBundle\\Entity\\FileVersionMeta' . "\0" . 'id', '' . "\0" . 'Sulu\\Bundle\\MediaBundle\\Entity\\FileVersionMeta' . "\0" . 'title', '' . "\0" . 'Sulu\\Bundle\\MediaBundle\\Entity\\FileVersionMeta' . "\0" . 'description', '' . "\0" . 'Sulu\\Bundle\\MediaBundle\\Entity\\FileVersionMeta' . "\0" . 'copyright', '' . "\0" . 'Sulu\\Bundle\\MediaBundle\\Entity\\FileVersionMeta' . "\0" . 'credits', '' . "\0" . 'Sulu\\Bundle\\MediaBundle\\Entity\\FileVersionMeta' . "\0" . 'locale', '' . "\0" . 'Sulu\\Bundle\\MediaBundle\\Entity\\FileVersionMeta' . "\0" . 'fileVersion'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (FileVersionMeta $proxy) {
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
     * {@inheritDoc}
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);

        parent::__clone();
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
    public function setTitle($title)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitle', [$title]);

        return parent::setTitle($title);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitle', []);

        return parent::getTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setCopyright($copyright)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCopyright', [$copyright]);

        return parent::setCopyright($copyright);
    }

    /**
     * {@inheritDoc}
     */
    public function getCopyright()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCopyright', []);

        return parent::getCopyright();
    }

    /**
     * {@inheritDoc}
     */
    public function setCredits($credits)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCredits', [$credits]);

        return parent::setCredits($credits);
    }

    /**
     * {@inheritDoc}
     */
    public function getCredits()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCredits', []);

        return parent::getCredits();
    }

    /**
     * {@inheritDoc}
     */
    public function setLocale($locale)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLocale', [$locale]);

        return parent::setLocale($locale);
    }

    /**
     * {@inheritDoc}
     */
    public function getLocale()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLocale', []);

        return parent::getLocale();
    }

    /**
     * {@inheritDoc}
     */
    public function setFileVersion(\Sulu\Bundle\MediaBundle\Entity\FileVersion $fileVersion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFileVersion', [$fileVersion]);

        return parent::setFileVersion($fileVersion);
    }

    /**
     * {@inheritDoc}
     */
    public function getFileVersion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFileVersion', []);

        return parent::getFileVersion();
    }

}