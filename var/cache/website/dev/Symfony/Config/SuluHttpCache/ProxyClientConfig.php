<?php

namespace Symfony\Config\SuluHttpCache;

require_once __DIR__.\DIRECTORY_SEPARATOR.'ProxyClient'.\DIRECTORY_SEPARATOR.'SymfonyConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ProxyClient'.\DIRECTORY_SEPARATOR.'VarnishConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class ProxyClientConfig 
{
    private $symfony;
    private $varnish;
    private $_usedProperties = [];
    
    public function symfony(array $value = []): \Symfony\Config\SuluHttpCache\ProxyClient\SymfonyConfig
    {
        if (null === $this->symfony) {
            $this->_usedProperties['symfony'] = true;
            $this->symfony = new \Symfony\Config\SuluHttpCache\ProxyClient\SymfonyConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "symfony()" has already been initialized. You cannot pass values the second time you call symfony().');
        }
    
        return $this->symfony;
    }
    
    public function varnish(array $value = []): \Symfony\Config\SuluHttpCache\ProxyClient\VarnishConfig
    {
        if (null === $this->varnish) {
            $this->_usedProperties['varnish'] = true;
            $this->varnish = new \Symfony\Config\SuluHttpCache\ProxyClient\VarnishConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "varnish()" has already been initialized. You cannot pass values the second time you call varnish().');
        }
    
        return $this->varnish;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('symfony', $value)) {
            $this->_usedProperties['symfony'] = true;
            $this->symfony = new \Symfony\Config\SuluHttpCache\ProxyClient\SymfonyConfig($value['symfony']);
            unset($value['symfony']);
        }
    
        if (array_key_exists('varnish', $value)) {
            $this->_usedProperties['varnish'] = true;
            $this->varnish = new \Symfony\Config\SuluHttpCache\ProxyClient\VarnishConfig($value['varnish']);
            unset($value['varnish']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['symfony'])) {
            $output['symfony'] = $this->symfony->toArray();
        }
        if (isset($this->_usedProperties['varnish'])) {
            $output['varnish'] = $this->varnish->toArray();
        }
    
        return $output;
    }

}
