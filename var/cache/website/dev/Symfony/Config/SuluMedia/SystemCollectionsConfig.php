<?php

namespace Symfony\Config\SuluMedia;

require_once __DIR__.\DIRECTORY_SEPARATOR.'SystemCollectionsConfig'.\DIRECTORY_SEPARATOR.'CollectionsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class SystemCollectionsConfig 
{
    private $metaTitle;
    private $collections;
    private $_usedProperties = [];
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function metaTitle($value): self
    {
        $this->_usedProperties['metaTitle'] = true;
        $this->metaTitle = $value;
    
        return $this;
    }
    
    public function collections(string $key, array $value = []): \Symfony\Config\SuluMedia\SystemCollectionsConfig\CollectionsConfig
    {
        if (!isset($this->collections[$key])) {
            $this->_usedProperties['collections'] = true;
    
            return $this->collections[$key] = new \Symfony\Config\SuluMedia\SystemCollectionsConfig\CollectionsConfig($value);
        }
        if ([] === $value) {
            return $this->collections[$key];
        }
    
        throw new InvalidConfigurationException('The node created by "collections()" has already been initialized. You cannot pass values the second time you call collections().');
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('meta_title', $value)) {
            $this->_usedProperties['metaTitle'] = true;
            $this->metaTitle = $value['meta_title'];
            unset($value['meta_title']);
        }
    
        if (array_key_exists('collections', $value)) {
            $this->_usedProperties['collections'] = true;
            $this->collections = array_map(function ($v) { return new \Symfony\Config\SuluMedia\SystemCollectionsConfig\CollectionsConfig($v); }, $value['collections']);
            unset($value['collections']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['metaTitle'])) {
            $output['meta_title'] = $this->metaTitle;
        }
        if (isset($this->_usedProperties['collections'])) {
            $output['collections'] = array_map(function ($v) { return $v->toArray(); }, $this->collections);
        }
    
        return $output;
    }

}
