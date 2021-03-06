<?php

namespace Symfony\Config\SuluAdmin;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class FormsConfig 
{
    private $directories;
    private $_usedProperties = [];
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function directories($value): self
    {
        $this->_usedProperties['directories'] = true;
        $this->directories = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('directories', $value)) {
            $this->_usedProperties['directories'] = true;
            $this->directories = $value['directories'];
            unset($value['directories']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['directories'])) {
            $output['directories'] = $this->directories;
        }
    
        return $output;
    }

}
