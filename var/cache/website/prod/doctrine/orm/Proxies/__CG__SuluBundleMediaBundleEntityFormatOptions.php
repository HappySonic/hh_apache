<?php

namespace Proxies\__CG__\Sulu\Bundle\MediaBundle\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class FormatOptions extends \Sulu\Bundle\MediaBundle\Entity\FormatOptions implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Sulu\\Bundle\\MediaBundle\\Entity\\FormatOptions' . "\0" . 'cropX', '' . "\0" . 'Sulu\\Bundle\\MediaBundle\\Entity\\FormatOptions' . "\0" . 'cropY', '' . "\0" . 'Sulu\\Bundle\\MediaBundle\\Entity\\FormatOptions' . "\0" . 'cropWidth', '' . "\0" . 'Sulu\\Bundle\\MediaBundle\\Entity\\FormatOptions' . "\0" . 'cropHeight', '' . "\0" . 'Sulu\\Bundle\\MediaBundle\\Entity\\FormatOptions' . "\0" . 'formatKey', '' . "\0" . 'Sulu\\Bundle\\MediaBundle\\Entity\\FormatOptions' . "\0" . 'fileVersion'];
        }

        return ['__isInitialized__', '' . "\0" . 'Sulu\\Bundle\\MediaBundle\\Entity\\FormatOptions' . "\0" . 'cropX', '' . "\0" . 'Sulu\\Bundle\\MediaBundle\\Entity\\FormatOptions' . "\0" . 'cropY', '' . "\0" . 'Sulu\\Bundle\\MediaBundle\\Entity\\FormatOptions' . "\0" . 'cropWidth', '' . "\0" . 'Sulu\\Bundle\\MediaBundle\\Entity\\FormatOptions' . "\0" . 'cropHeight', '' . "\0" . 'Sulu\\Bundle\\MediaBundle\\Entity\\FormatOptions' . "\0" . 'formatKey', '' . "\0" . 'Sulu\\Bundle\\MediaBundle\\Entity\\FormatOptions' . "\0" . 'fileVersion'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (FormatOptions $proxy) {
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
    public function setCropX($cropX)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCropX', [$cropX]);

        return parent::setCropX($cropX);
    }

    /**
     * {@inheritDoc}
     */
    public function getCropX()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCropX', []);

        return parent::getCropX();
    }

    /**
     * {@inheritDoc}
     */
    public function setCropY($cropY)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCropY', [$cropY]);

        return parent::setCropY($cropY);
    }

    /**
     * {@inheritDoc}
     */
    public function getCropY()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCropY', []);

        return parent::getCropY();
    }

    /**
     * {@inheritDoc}
     */
    public function setCropWidth($cropWidth)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCropWidth', [$cropWidth]);

        return parent::setCropWidth($cropWidth);
    }

    /**
     * {@inheritDoc}
     */
    public function getCropWidth()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCropWidth', []);

        return parent::getCropWidth();
    }

    /**
     * {@inheritDoc}
     */
    public function setCropHeight($cropHeight)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCropHeight', [$cropHeight]);

        return parent::setCropHeight($cropHeight);
    }

    /**
     * {@inheritDoc}
     */
    public function getCropHeight()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCropHeight', []);

        return parent::getCropHeight();
    }

    /**
     * {@inheritDoc}
     */
    public function setFormatKey($formatKey)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFormatKey', [$formatKey]);

        return parent::setFormatKey($formatKey);
    }

    /**
     * {@inheritDoc}
     */
    public function getFormatKey()
    {
        if ($this->__isInitialized__ === false) {
            return  parent::getFormatKey();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFormatKey', []);

        return parent::getFormatKey();
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
