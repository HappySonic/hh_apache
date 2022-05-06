<?php

namespace Symfony\Config\SuluAdmin;

require_once __DIR__.\DIRECTORY_SEPARATOR.'ResourcesConfig'.\DIRECTORY_SEPARATOR.'RoutesConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\Config\Loader\ParamConfigurator;


/**
 * This class is automatically generated to help in creating a config.
 */
class ResourcesConfig 
{
    private $routes;
    private $securityContext;
    private $securityClass;
    private $_usedProperties = [];
    
    public function routes(array $value = []): \Symfony\Config\SuluAdmin\ResourcesConfig\RoutesConfig
    {
        if (null === $this->routes) {
            $this->_usedProperties['routes'] = true;
            $this->routes = new \Symfony\Config\SuluAdmin\ResourcesConfig\RoutesConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "routes()" has already been initialized. You cannot pass values the second time you call routes().');
        }
    
        return $this->routes;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function securityContext($value): self
    {
        $this->_usedProperties['securityContext'] = true;
        $this->securityContext = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function securityClass($value): self
    {
        $this->_usedProperties['securityClass'] = true;
        $this->securityClass = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('routes', $value)) {
            $this->_usedProperties['routes'] = true;
            $this->routes = new \Symfony\Config\SuluAdmin\ResourcesConfig\RoutesConfig($value['routes']);
            unset($value['routes']);
        }
    
        if (array_key_exists('security_context', $value)) {
            $this->_usedProperties['securityContext'] = true;
            $this->securityContext = $value['security_context'];
            unset($value['security_context']);
        }
    
        if (array_key_exists('security_class', $value)) {
            $this->_usedProperties['securityClass'] = true;
            $this->securityClass = $value['security_class'];
            unset($value['security_class']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['routes'])) {
            $output['routes'] = $this->routes->toArray();
        }
        if (isset($this->_usedProperties['securityContext'])) {
            $output['security_context'] = $this->securityContext;
        }
        if (isset($this->_usedProperties['securityClass'])) {
            $output['security_class'] = $this->securityClass;
        }
    
        return $output;
    }

}
