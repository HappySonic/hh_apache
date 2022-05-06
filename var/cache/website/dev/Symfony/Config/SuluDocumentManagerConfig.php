<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'SuluDocumentManager'.\DIRECTORY_SEPARATOR.'SessionsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'SuluDocumentManager'.\DIRECTORY_SEPARATOR.'VersioningConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'SuluDocumentManager'.\DIRECTORY_SEPARATOR.'MappingConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class SuluDocumentManagerConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $defaultSession;
    private $liveSession;
    private $sessions;
    private $namespace;
    private $versioning;
    private $debug;
    private $pathSegments;
    private $slugifier;
    private $mapping;
    private $_usedProperties = [];
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function defaultSession($value): self
    {
        $this->_usedProperties['defaultSession'] = true;
        $this->defaultSession = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function liveSession($value): self
    {
        $this->_usedProperties['liveSession'] = true;
        $this->liveSession = $value;
    
        return $this;
    }
    
    public function sessions(string $name, array $value = []): \Symfony\Config\SuluDocumentManager\SessionsConfig
    {
        if (!isset($this->sessions[$name])) {
            $this->_usedProperties['sessions'] = true;
    
            return $this->sessions[$name] = new \Symfony\Config\SuluDocumentManager\SessionsConfig($value);
        }
        if ([] === $value) {
            return $this->sessions[$name];
        }
    
        throw new InvalidConfigurationException('The node created by "sessions()" has already been initialized. You cannot pass values the second time you call sessions().');
    }
    
    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function namespace(string $role, $value): self
    {
        $this->_usedProperties['namespace'] = true;
        $this->namespace[$role] = $value;
    
        return $this;
    }
    
    public function versioning(array $value = []): \Symfony\Config\SuluDocumentManager\VersioningConfig
    {
        if (null === $this->versioning) {
            $this->_usedProperties['versioning'] = true;
            $this->versioning = new \Symfony\Config\SuluDocumentManager\VersioningConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "versioning()" has already been initialized. You cannot pass values the second time you call versioning().');
        }
    
        return $this->versioning;
    }
    
    /**
     * Enable the debug event dispatcher. Logs all document manager events. Very slow.
     * @default false
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function debug($value): self
    {
        $this->_usedProperties['debug'] = true;
        $this->debug = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function pathSegments(string $key, $value): self
    {
        $this->_usedProperties['pathSegments'] = true;
        $this->pathSegments[$key] = $value;
    
        return $this;
    }
    
    /**
     * @default 'Sulu\\Bundle\\DocumentManagerBundle\\Slugifier\\Urlizer::urlize'
     * @param ParamConfigurator|mixed $value
     * @deprecated The "sulu_document_manager.slugifier" configuration is not used anymore since 2.1 and will be removed in 3.0.
     * @return $this
     */
    public function slugifier($value): self
    {
        $this->_usedProperties['slugifier'] = true;
        $this->slugifier = $value;
    
        return $this;
    }
    
    public function mapping(string $alias, array $value = []): \Symfony\Config\SuluDocumentManager\MappingConfig
    {
        if (!isset($this->mapping[$alias])) {
            $this->_usedProperties['mapping'] = true;
    
            return $this->mapping[$alias] = new \Symfony\Config\SuluDocumentManager\MappingConfig($value);
        }
        if ([] === $value) {
            return $this->mapping[$alias];
        }
    
        throw new InvalidConfigurationException('The node created by "mapping()" has already been initialized. You cannot pass values the second time you call mapping().');
    }
    
    public function getExtensionAlias(): string
    {
        return 'sulu_document_manager';
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('default_session', $value)) {
            $this->_usedProperties['defaultSession'] = true;
            $this->defaultSession = $value['default_session'];
            unset($value['default_session']);
        }
    
        if (array_key_exists('live_session', $value)) {
            $this->_usedProperties['liveSession'] = true;
            $this->liveSession = $value['live_session'];
            unset($value['live_session']);
        }
    
        if (array_key_exists('sessions', $value)) {
            $this->_usedProperties['sessions'] = true;
            $this->sessions = array_map(function ($v) { return new \Symfony\Config\SuluDocumentManager\SessionsConfig($v); }, $value['sessions']);
            unset($value['sessions']);
        }
    
        if (array_key_exists('namespace', $value)) {
            $this->_usedProperties['namespace'] = true;
            $this->namespace = $value['namespace'];
            unset($value['namespace']);
        }
    
        if (array_key_exists('versioning', $value)) {
            $this->_usedProperties['versioning'] = true;
            $this->versioning = new \Symfony\Config\SuluDocumentManager\VersioningConfig($value['versioning']);
            unset($value['versioning']);
        }
    
        if (array_key_exists('debug', $value)) {
            $this->_usedProperties['debug'] = true;
            $this->debug = $value['debug'];
            unset($value['debug']);
        }
    
        if (array_key_exists('path_segments', $value)) {
            $this->_usedProperties['pathSegments'] = true;
            $this->pathSegments = $value['path_segments'];
            unset($value['path_segments']);
        }
    
        if (array_key_exists('slugifier', $value)) {
            $this->_usedProperties['slugifier'] = true;
            $this->slugifier = $value['slugifier'];
            unset($value['slugifier']);
        }
    
        if (array_key_exists('mapping', $value)) {
            $this->_usedProperties['mapping'] = true;
            $this->mapping = array_map(function ($v) { return new \Symfony\Config\SuluDocumentManager\MappingConfig($v); }, $value['mapping']);
            unset($value['mapping']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['defaultSession'])) {
            $output['default_session'] = $this->defaultSession;
        }
        if (isset($this->_usedProperties['liveSession'])) {
            $output['live_session'] = $this->liveSession;
        }
        if (isset($this->_usedProperties['sessions'])) {
            $output['sessions'] = array_map(function ($v) { return $v->toArray(); }, $this->sessions);
        }
        if (isset($this->_usedProperties['namespace'])) {
            $output['namespace'] = $this->namespace;
        }
        if (isset($this->_usedProperties['versioning'])) {
            $output['versioning'] = $this->versioning->toArray();
        }
        if (isset($this->_usedProperties['debug'])) {
            $output['debug'] = $this->debug;
        }
        if (isset($this->_usedProperties['pathSegments'])) {
            $output['path_segments'] = $this->pathSegments;
        }
        if (isset($this->_usedProperties['slugifier'])) {
            $output['slugifier'] = $this->slugifier;
        }
        if (isset($this->_usedProperties['mapping'])) {
            $output['mapping'] = array_map(function ($v) { return $v->toArray(); }, $this->mapping);
        }
    
        return $output;
    }

}
