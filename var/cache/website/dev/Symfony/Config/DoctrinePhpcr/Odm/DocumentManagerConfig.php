<?php

namespace Symfony\Config\DoctrinePhpcr\Odm;

require_once __DIR__.\DIRECTORY_SEPARATOR.'DocumentManagerConfig'.\DIRECTORY_SEPARATOR.'MetadataCacheDriverConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'DocumentManagerConfig'.\DIRECTORY_SEPARATOR.'MappingConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\Config\Loader\ParamConfigurator;


/**
 * This class is automatically generated to help in creating a config.
 */
class DocumentManagerConfig 
{
    private $metadataCacheDriver;
    private $session;
    private $configurationId;
    private $classMetadataFactoryName;
    private $autoMapping;
    private $defaultRepositoryClass;
    private $repositoryFactory;
    private $mappings;
    private $_usedProperties = [];
    
    public function metadataCacheDriver(array $value = []): \Symfony\Config\DoctrinePhpcr\Odm\DocumentManagerConfig\MetadataCacheDriverConfig
    {
        if (null === $this->metadataCacheDriver) {
            $this->_usedProperties['metadataCacheDriver'] = true;
            $this->metadataCacheDriver = new \Symfony\Config\DoctrinePhpcr\Odm\DocumentManagerConfig\MetadataCacheDriverConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "metadataCacheDriver()" has already been initialized. You cannot pass values the second time you call metadataCacheDriver().');
        }
    
        return $this->metadataCacheDriver;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function session($value): self
    {
        $this->_usedProperties['session'] = true;
        $this->session = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function configurationId($value): self
    {
        $this->_usedProperties['configurationId'] = true;
        $this->configurationId = $value;
    
        return $this;
    }
    
    /**
     * @default 'Doctrine\\ODM\\PHPCR\\Mapping\\ClassMetadataFactory'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function classMetadataFactoryName($value): self
    {
        $this->_usedProperties['classMetadataFactoryName'] = true;
        $this->classMetadataFactoryName = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function autoMapping($value): self
    {
        $this->_usedProperties['autoMapping'] = true;
        $this->autoMapping = $value;
    
        return $this;
    }
    
    /**
     * @default 'Doctrine\\ODM\\PHPCR\\DocumentRepository'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function defaultRepositoryClass($value): self
    {
        $this->_usedProperties['defaultRepositoryClass'] = true;
        $this->defaultRepositoryClass = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function repositoryFactory($value): self
    {
        $this->_usedProperties['repositoryFactory'] = true;
        $this->repositoryFactory = $value;
    
        return $this;
    }
    
    public function mapping(string $name, array $value = []): \Symfony\Config\DoctrinePhpcr\Odm\DocumentManagerConfig\MappingConfig
    {
        if (!isset($this->mappings[$name])) {
            $this->_usedProperties['mappings'] = true;
    
            return $this->mappings[$name] = new \Symfony\Config\DoctrinePhpcr\Odm\DocumentManagerConfig\MappingConfig($value);
        }
        if ([] === $value) {
            return $this->mappings[$name];
        }
    
        throw new InvalidConfigurationException('The node created by "mapping()" has already been initialized. You cannot pass values the second time you call mapping().');
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('metadata_cache_driver', $value)) {
            $this->_usedProperties['metadataCacheDriver'] = true;
            $this->metadataCacheDriver = new \Symfony\Config\DoctrinePhpcr\Odm\DocumentManagerConfig\MetadataCacheDriverConfig($value['metadata_cache_driver']);
            unset($value['metadata_cache_driver']);
        }
    
        if (array_key_exists('session', $value)) {
            $this->_usedProperties['session'] = true;
            $this->session = $value['session'];
            unset($value['session']);
        }
    
        if (array_key_exists('configuration_id', $value)) {
            $this->_usedProperties['configurationId'] = true;
            $this->configurationId = $value['configuration_id'];
            unset($value['configuration_id']);
        }
    
        if (array_key_exists('class_metadata_factory_name', $value)) {
            $this->_usedProperties['classMetadataFactoryName'] = true;
            $this->classMetadataFactoryName = $value['class_metadata_factory_name'];
            unset($value['class_metadata_factory_name']);
        }
    
        if (array_key_exists('auto_mapping', $value)) {
            $this->_usedProperties['autoMapping'] = true;
            $this->autoMapping = $value['auto_mapping'];
            unset($value['auto_mapping']);
        }
    
        if (array_key_exists('default_repository_class', $value)) {
            $this->_usedProperties['defaultRepositoryClass'] = true;
            $this->defaultRepositoryClass = $value['default_repository_class'];
            unset($value['default_repository_class']);
        }
    
        if (array_key_exists('repository_factory', $value)) {
            $this->_usedProperties['repositoryFactory'] = true;
            $this->repositoryFactory = $value['repository_factory'];
            unset($value['repository_factory']);
        }
    
        if (array_key_exists('mappings', $value)) {
            $this->_usedProperties['mappings'] = true;
            $this->mappings = array_map(function ($v) { return new \Symfony\Config\DoctrinePhpcr\Odm\DocumentManagerConfig\MappingConfig($v); }, $value['mappings']);
            unset($value['mappings']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['metadataCacheDriver'])) {
            $output['metadata_cache_driver'] = $this->metadataCacheDriver->toArray();
        }
        if (isset($this->_usedProperties['session'])) {
            $output['session'] = $this->session;
        }
        if (isset($this->_usedProperties['configurationId'])) {
            $output['configuration_id'] = $this->configurationId;
        }
        if (isset($this->_usedProperties['classMetadataFactoryName'])) {
            $output['class_metadata_factory_name'] = $this->classMetadataFactoryName;
        }
        if (isset($this->_usedProperties['autoMapping'])) {
            $output['auto_mapping'] = $this->autoMapping;
        }
        if (isset($this->_usedProperties['defaultRepositoryClass'])) {
            $output['default_repository_class'] = $this->defaultRepositoryClass;
        }
        if (isset($this->_usedProperties['repositoryFactory'])) {
            $output['repository_factory'] = $this->repositoryFactory;
        }
        if (isset($this->_usedProperties['mappings'])) {
            $output['mappings'] = array_map(function ($v) { return $v->toArray(); }, $this->mappings);
        }
    
        return $output;
    }

}
