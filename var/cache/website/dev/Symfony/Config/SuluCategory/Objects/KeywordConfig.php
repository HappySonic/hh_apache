<?php

namespace Symfony\Config\SuluCategory\Objects;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class KeywordConfig 
{
    private $model;
    private $repository;
    private $_usedProperties = [];
    
    /**
     * @default 'Sulu\\Bundle\\CategoryBundle\\Entity\\Keyword'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function model($value): self
    {
        $this->_usedProperties['model'] = true;
        $this->model = $value;
    
        return $this;
    }
    
    /**
     * @default 'Sulu\\Bundle\\CategoryBundle\\Entity\\KeywordRepository'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function repository($value): self
    {
        $this->_usedProperties['repository'] = true;
        $this->repository = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('model', $value)) {
            $this->_usedProperties['model'] = true;
            $this->model = $value['model'];
            unset($value['model']);
        }
    
        if (array_key_exists('repository', $value)) {
            $this->_usedProperties['repository'] = true;
            $this->repository = $value['repository'];
            unset($value['repository']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['model'])) {
            $output['model'] = $this->model;
        }
        if (isset($this->_usedProperties['repository'])) {
            $output['repository'] = $this->repository;
        }
    
        return $output;
    }

}
