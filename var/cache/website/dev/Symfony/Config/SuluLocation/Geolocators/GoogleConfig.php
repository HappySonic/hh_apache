<?php

namespace Symfony\Config\SuluLocation\Geolocators;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class GoogleConfig 
{
    private $apiKey;
    private $_usedProperties = [];
    
    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function apiKey($value): self
    {
        $this->_usedProperties['apiKey'] = true;
        $this->apiKey = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('api_key', $value)) {
            $this->_usedProperties['apiKey'] = true;
            $this->apiKey = $value['api_key'];
            unset($value['api_key']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['apiKey'])) {
            $output['api_key'] = $this->apiKey;
        }
    
        return $output;
    }

}
