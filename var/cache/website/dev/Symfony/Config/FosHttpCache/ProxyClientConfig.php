<?php

namespace Symfony\Config\FosHttpCache;

require_once __DIR__.\DIRECTORY_SEPARATOR.'ProxyClient'.\DIRECTORY_SEPARATOR.'VarnishConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ProxyClient'.\DIRECTORY_SEPARATOR.'NginxConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ProxyClient'.\DIRECTORY_SEPARATOR.'SymfonyConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class ProxyClientConfig 
{
    private $default;
    private $varnish;
    private $nginx;
    private $symfony;
    private $noop;
    private $_usedProperties = [];
    
    /**
     * If you configure more than one proxy client, you need to specify which client is the default.
     * @default null
     * @param ParamConfigurator|'varnish'|'nginx'|'symfony'|'noop' $value
     * @return $this
     */
    public function default($value): self
    {
        $this->_usedProperties['default'] = true;
        $this->default = $value;
    
        return $this;
    }
    
    public function varnish(array $value = []): \Symfony\Config\FosHttpCache\ProxyClient\VarnishConfig
    {
        if (null === $this->varnish) {
            $this->_usedProperties['varnish'] = true;
            $this->varnish = new \Symfony\Config\FosHttpCache\ProxyClient\VarnishConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "varnish()" has already been initialized. You cannot pass values the second time you call varnish().');
        }
    
        return $this->varnish;
    }
    
    public function nginx(array $value = []): \Symfony\Config\FosHttpCache\ProxyClient\NginxConfig
    {
        if (null === $this->nginx) {
            $this->_usedProperties['nginx'] = true;
            $this->nginx = new \Symfony\Config\FosHttpCache\ProxyClient\NginxConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "nginx()" has already been initialized. You cannot pass values the second time you call nginx().');
        }
    
        return $this->nginx;
    }
    
    public function symfony(array $value = []): \Symfony\Config\FosHttpCache\ProxyClient\SymfonyConfig
    {
        if (null === $this->symfony) {
            $this->_usedProperties['symfony'] = true;
            $this->symfony = new \Symfony\Config\FosHttpCache\ProxyClient\SymfonyConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "symfony()" has already been initialized. You cannot pass values the second time you call symfony().');
        }
    
        return $this->symfony;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function noop($value): self
    {
        $this->_usedProperties['noop'] = true;
        $this->noop = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('default', $value)) {
            $this->_usedProperties['default'] = true;
            $this->default = $value['default'];
            unset($value['default']);
        }
    
        if (array_key_exists('varnish', $value)) {
            $this->_usedProperties['varnish'] = true;
            $this->varnish = new \Symfony\Config\FosHttpCache\ProxyClient\VarnishConfig($value['varnish']);
            unset($value['varnish']);
        }
    
        if (array_key_exists('nginx', $value)) {
            $this->_usedProperties['nginx'] = true;
            $this->nginx = new \Symfony\Config\FosHttpCache\ProxyClient\NginxConfig($value['nginx']);
            unset($value['nginx']);
        }
    
        if (array_key_exists('symfony', $value)) {
            $this->_usedProperties['symfony'] = true;
            $this->symfony = new \Symfony\Config\FosHttpCache\ProxyClient\SymfonyConfig($value['symfony']);
            unset($value['symfony']);
        }
    
        if (array_key_exists('noop', $value)) {
            $this->_usedProperties['noop'] = true;
            $this->noop = $value['noop'];
            unset($value['noop']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['default'])) {
            $output['default'] = $this->default;
        }
        if (isset($this->_usedProperties['varnish'])) {
            $output['varnish'] = $this->varnish->toArray();
        }
        if (isset($this->_usedProperties['nginx'])) {
            $output['nginx'] = $this->nginx->toArray();
        }
        if (isset($this->_usedProperties['symfony'])) {
            $output['symfony'] = $this->symfony->toArray();
        }
        if (isset($this->_usedProperties['noop'])) {
            $output['noop'] = $this->noop;
        }
    
        return $output;
    }

}
