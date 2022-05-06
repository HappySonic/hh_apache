<?php

namespace Symfony\Config\SuluCore;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Content'.\DIRECTORY_SEPARATOR.'LanguageConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Content'.\DIRECTORY_SEPARATOR.'NodeNamesConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Content'.\DIRECTORY_SEPARATOR.'StructureConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class ContentConfig 
{
    private $internalPrefix;
    private $language;
    private $nodeNames;
    private $structure;
    private $_usedProperties = [];
    
    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function internalPrefix($value): self
    {
        $this->_usedProperties['internalPrefix'] = true;
        $this->internalPrefix = $value;
    
        return $this;
    }
    
    public function language(array $value = []): \Symfony\Config\SuluCore\Content\LanguageConfig
    {
        if (null === $this->language) {
            $this->_usedProperties['language'] = true;
            $this->language = new \Symfony\Config\SuluCore\Content\LanguageConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "language()" has already been initialized. You cannot pass values the second time you call language().');
        }
    
        return $this->language;
    }
    
    public function nodeNames(array $value = []): \Symfony\Config\SuluCore\Content\NodeNamesConfig
    {
        if (null === $this->nodeNames) {
            $this->_usedProperties['nodeNames'] = true;
            $this->nodeNames = new \Symfony\Config\SuluCore\Content\NodeNamesConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "nodeNames()" has already been initialized. You cannot pass values the second time you call nodeNames().');
        }
    
        return $this->nodeNames;
    }
    
    public function structure(array $value = []): \Symfony\Config\SuluCore\Content\StructureConfig
    {
        if (null === $this->structure) {
            $this->_usedProperties['structure'] = true;
            $this->structure = new \Symfony\Config\SuluCore\Content\StructureConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "structure()" has already been initialized. You cannot pass values the second time you call structure().');
        }
    
        return $this->structure;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('internal_prefix', $value)) {
            $this->_usedProperties['internalPrefix'] = true;
            $this->internalPrefix = $value['internal_prefix'];
            unset($value['internal_prefix']);
        }
    
        if (array_key_exists('language', $value)) {
            $this->_usedProperties['language'] = true;
            $this->language = new \Symfony\Config\SuluCore\Content\LanguageConfig($value['language']);
            unset($value['language']);
        }
    
        if (array_key_exists('node_names', $value)) {
            $this->_usedProperties['nodeNames'] = true;
            $this->nodeNames = new \Symfony\Config\SuluCore\Content\NodeNamesConfig($value['node_names']);
            unset($value['node_names']);
        }
    
        if (array_key_exists('structure', $value)) {
            $this->_usedProperties['structure'] = true;
            $this->structure = new \Symfony\Config\SuluCore\Content\StructureConfig($value['structure']);
            unset($value['structure']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['internalPrefix'])) {
            $output['internal_prefix'] = $this->internalPrefix;
        }
        if (isset($this->_usedProperties['language'])) {
            $output['language'] = $this->language->toArray();
        }
        if (isset($this->_usedProperties['nodeNames'])) {
            $output['node_names'] = $this->nodeNames->toArray();
        }
        if (isset($this->_usedProperties['structure'])) {
            $output['structure'] = $this->structure->toArray();
        }
    
        return $output;
    }

}
