<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'SuluCategory'.\DIRECTORY_SEPARATOR.'ObjectsConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class SuluCategoryConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $objects;
    private $_usedProperties = [];
    
    public function objects(array $value = []): \Symfony\Config\SuluCategory\ObjectsConfig
    {
        if (null === $this->objects) {
            $this->_usedProperties['objects'] = true;
            $this->objects = new \Symfony\Config\SuluCategory\ObjectsConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "objects()" has already been initialized. You cannot pass values the second time you call objects().');
        }
    
        return $this->objects;
    }
    
    public function getExtensionAlias(): string
    {
        return 'sulu_category';
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('objects', $value)) {
            $this->_usedProperties['objects'] = true;
            $this->objects = new \Symfony\Config\SuluCategory\ObjectsConfig($value['objects']);
            unset($value['objects']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['objects'])) {
            $output['objects'] = $this->objects->toArray();
        }
    
        return $output;
    }

}
