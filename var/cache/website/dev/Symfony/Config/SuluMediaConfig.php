<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'SuluMedia'.\DIRECTORY_SEPARATOR.'SystemCollectionsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'SuluMedia'.\DIRECTORY_SEPARATOR.'SearchConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'SuluMedia'.\DIRECTORY_SEPARATOR.'GhostScriptConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'SuluMedia'.\DIRECTORY_SEPARATOR.'UploadConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'SuluMedia'.\DIRECTORY_SEPARATOR.'FormatManagerConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'SuluMedia'.\DIRECTORY_SEPARATOR.'FormatCacheConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'SuluMedia'.\DIRECTORY_SEPARATOR.'DispositionTypeConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'SuluMedia'.\DIRECTORY_SEPARATOR.'RoutingConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'SuluMedia'.\DIRECTORY_SEPARATOR.'FfmpegConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'SuluMedia'.\DIRECTORY_SEPARATOR.'ObjectsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'SuluMedia'.\DIRECTORY_SEPARATOR.'StoragesConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class SuluMediaConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $adobeCreativeKey;
    private $adapter;
    private $imageFormatFiles;
    private $systemCollections;
    private $search;
    private $ghostScript;
    private $upload;
    private $formatManager;
    private $formatCache;
    private $dispositionType;
    private $routing;
    private $ffmpeg;
    private $objects;
    private $storages;
    private $storage;
    private $_usedProperties = [];
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function adobeCreativeKey($value): self
    {
        $this->_usedProperties['adobeCreativeKey'] = true;
        $this->adobeCreativeKey = $value;
    
        return $this;
    }
    
    /**
     * @default 'auto'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function adapter($value): self
    {
        $this->_usedProperties['adapter'] = true;
        $this->adapter = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function imageFormatFiles($value): self
    {
        $this->_usedProperties['imageFormatFiles'] = true;
        $this->imageFormatFiles = $value;
    
        return $this;
    }
    
    public function systemCollections(string $key, array $value = []): \Symfony\Config\SuluMedia\SystemCollectionsConfig
    {
        if (!isset($this->systemCollections[$key])) {
            $this->_usedProperties['systemCollections'] = true;
    
            return $this->systemCollections[$key] = new \Symfony\Config\SuluMedia\SystemCollectionsConfig($value);
        }
        if ([] === $value) {
            return $this->systemCollections[$key];
        }
    
        throw new InvalidConfigurationException('The node created by "systemCollections()" has already been initialized. You cannot pass values the second time you call systemCollections().');
    }
    
    public function search(array $value = []): \Symfony\Config\SuluMedia\SearchConfig
    {
        if (null === $this->search) {
            $this->_usedProperties['search'] = true;
            $this->search = new \Symfony\Config\SuluMedia\SearchConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "search()" has already been initialized. You cannot pass values the second time you call search().');
        }
    
        return $this->search;
    }
    
    public function ghostScript(array $value = []): \Symfony\Config\SuluMedia\GhostScriptConfig
    {
        if (null === $this->ghostScript) {
            $this->_usedProperties['ghostScript'] = true;
            $this->ghostScript = new \Symfony\Config\SuluMedia\GhostScriptConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "ghostScript()" has already been initialized. You cannot pass values the second time you call ghostScript().');
        }
    
        return $this->ghostScript;
    }
    
    public function upload(array $value = []): \Symfony\Config\SuluMedia\UploadConfig
    {
        if (null === $this->upload) {
            $this->_usedProperties['upload'] = true;
            $this->upload = new \Symfony\Config\SuluMedia\UploadConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "upload()" has already been initialized. You cannot pass values the second time you call upload().');
        }
    
        return $this->upload;
    }
    
    public function formatManager(array $value = []): \Symfony\Config\SuluMedia\FormatManagerConfig
    {
        if (null === $this->formatManager) {
            $this->_usedProperties['formatManager'] = true;
            $this->formatManager = new \Symfony\Config\SuluMedia\FormatManagerConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "formatManager()" has already been initialized. You cannot pass values the second time you call formatManager().');
        }
    
        return $this->formatManager;
    }
    
    public function formatCache(array $value = []): \Symfony\Config\SuluMedia\FormatCacheConfig
    {
        if (null === $this->formatCache) {
            $this->_usedProperties['formatCache'] = true;
            $this->formatCache = new \Symfony\Config\SuluMedia\FormatCacheConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "formatCache()" has already been initialized. You cannot pass values the second time you call formatCache().');
        }
    
        return $this->formatCache;
    }
    
    public function dispositionType(array $value = []): \Symfony\Config\SuluMedia\DispositionTypeConfig
    {
        if (null === $this->dispositionType) {
            $this->_usedProperties['dispositionType'] = true;
            $this->dispositionType = new \Symfony\Config\SuluMedia\DispositionTypeConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "dispositionType()" has already been initialized. You cannot pass values the second time you call dispositionType().');
        }
    
        return $this->dispositionType;
    }
    
    public function routing(array $value = []): \Symfony\Config\SuluMedia\RoutingConfig
    {
        if (null === $this->routing) {
            $this->_usedProperties['routing'] = true;
            $this->routing = new \Symfony\Config\SuluMedia\RoutingConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "routing()" has already been initialized. You cannot pass values the second time you call routing().');
        }
    
        return $this->routing;
    }
    
    public function ffmpeg(array $value = []): \Symfony\Config\SuluMedia\FfmpegConfig
    {
        if (null === $this->ffmpeg) {
            $this->_usedProperties['ffmpeg'] = true;
            $this->ffmpeg = new \Symfony\Config\SuluMedia\FfmpegConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "ffmpeg()" has already been initialized. You cannot pass values the second time you call ffmpeg().');
        }
    
        return $this->ffmpeg;
    }
    
    public function objects(array $value = []): \Symfony\Config\SuluMedia\ObjectsConfig
    {
        if (null === $this->objects) {
            $this->_usedProperties['objects'] = true;
            $this->objects = new \Symfony\Config\SuluMedia\ObjectsConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "objects()" has already been initialized. You cannot pass values the second time you call objects().');
        }
    
        return $this->objects;
    }
    
    public function storages(array $value = []): \Symfony\Config\SuluMedia\StoragesConfig
    {
        if (null === $this->storages) {
            $this->_usedProperties['storages'] = true;
            $this->storages = new \Symfony\Config\SuluMedia\StoragesConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "storages()" has already been initialized. You cannot pass values the second time you call storages().');
        }
    
        return $this->storages;
    }
    
    /**
     * @default 'local'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function storage($value): self
    {
        $this->_usedProperties['storage'] = true;
        $this->storage = $value;
    
        return $this;
    }
    
    public function getExtensionAlias(): string
    {
        return 'sulu_media';
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('adobe_creative_key', $value)) {
            $this->_usedProperties['adobeCreativeKey'] = true;
            $this->adobeCreativeKey = $value['adobe_creative_key'];
            unset($value['adobe_creative_key']);
        }
    
        if (array_key_exists('adapter', $value)) {
            $this->_usedProperties['adapter'] = true;
            $this->adapter = $value['adapter'];
            unset($value['adapter']);
        }
    
        if (array_key_exists('image_format_files', $value)) {
            $this->_usedProperties['imageFormatFiles'] = true;
            $this->imageFormatFiles = $value['image_format_files'];
            unset($value['image_format_files']);
        }
    
        if (array_key_exists('system_collections', $value)) {
            $this->_usedProperties['systemCollections'] = true;
            $this->systemCollections = array_map(function ($v) { return new \Symfony\Config\SuluMedia\SystemCollectionsConfig($v); }, $value['system_collections']);
            unset($value['system_collections']);
        }
    
        if (array_key_exists('search', $value)) {
            $this->_usedProperties['search'] = true;
            $this->search = new \Symfony\Config\SuluMedia\SearchConfig($value['search']);
            unset($value['search']);
        }
    
        if (array_key_exists('ghost_script', $value)) {
            $this->_usedProperties['ghostScript'] = true;
            $this->ghostScript = new \Symfony\Config\SuluMedia\GhostScriptConfig($value['ghost_script']);
            unset($value['ghost_script']);
        }
    
        if (array_key_exists('upload', $value)) {
            $this->_usedProperties['upload'] = true;
            $this->upload = new \Symfony\Config\SuluMedia\UploadConfig($value['upload']);
            unset($value['upload']);
        }
    
        if (array_key_exists('format_manager', $value)) {
            $this->_usedProperties['formatManager'] = true;
            $this->formatManager = new \Symfony\Config\SuluMedia\FormatManagerConfig($value['format_manager']);
            unset($value['format_manager']);
        }
    
        if (array_key_exists('format_cache', $value)) {
            $this->_usedProperties['formatCache'] = true;
            $this->formatCache = new \Symfony\Config\SuluMedia\FormatCacheConfig($value['format_cache']);
            unset($value['format_cache']);
        }
    
        if (array_key_exists('disposition_type', $value)) {
            $this->_usedProperties['dispositionType'] = true;
            $this->dispositionType = new \Symfony\Config\SuluMedia\DispositionTypeConfig($value['disposition_type']);
            unset($value['disposition_type']);
        }
    
        if (array_key_exists('routing', $value)) {
            $this->_usedProperties['routing'] = true;
            $this->routing = new \Symfony\Config\SuluMedia\RoutingConfig($value['routing']);
            unset($value['routing']);
        }
    
        if (array_key_exists('ffmpeg', $value)) {
            $this->_usedProperties['ffmpeg'] = true;
            $this->ffmpeg = new \Symfony\Config\SuluMedia\FfmpegConfig($value['ffmpeg']);
            unset($value['ffmpeg']);
        }
    
        if (array_key_exists('objects', $value)) {
            $this->_usedProperties['objects'] = true;
            $this->objects = new \Symfony\Config\SuluMedia\ObjectsConfig($value['objects']);
            unset($value['objects']);
        }
    
        if (array_key_exists('storages', $value)) {
            $this->_usedProperties['storages'] = true;
            $this->storages = new \Symfony\Config\SuluMedia\StoragesConfig($value['storages']);
            unset($value['storages']);
        }
    
        if (array_key_exists('storage', $value)) {
            $this->_usedProperties['storage'] = true;
            $this->storage = $value['storage'];
            unset($value['storage']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['adobeCreativeKey'])) {
            $output['adobe_creative_key'] = $this->adobeCreativeKey;
        }
        if (isset($this->_usedProperties['adapter'])) {
            $output['adapter'] = $this->adapter;
        }
        if (isset($this->_usedProperties['imageFormatFiles'])) {
            $output['image_format_files'] = $this->imageFormatFiles;
        }
        if (isset($this->_usedProperties['systemCollections'])) {
            $output['system_collections'] = array_map(function ($v) { return $v->toArray(); }, $this->systemCollections);
        }
        if (isset($this->_usedProperties['search'])) {
            $output['search'] = $this->search->toArray();
        }
        if (isset($this->_usedProperties['ghostScript'])) {
            $output['ghost_script'] = $this->ghostScript->toArray();
        }
        if (isset($this->_usedProperties['upload'])) {
            $output['upload'] = $this->upload->toArray();
        }
        if (isset($this->_usedProperties['formatManager'])) {
            $output['format_manager'] = $this->formatManager->toArray();
        }
        if (isset($this->_usedProperties['formatCache'])) {
            $output['format_cache'] = $this->formatCache->toArray();
        }
        if (isset($this->_usedProperties['dispositionType'])) {
            $output['disposition_type'] = $this->dispositionType->toArray();
        }
        if (isset($this->_usedProperties['routing'])) {
            $output['routing'] = $this->routing->toArray();
        }
        if (isset($this->_usedProperties['ffmpeg'])) {
            $output['ffmpeg'] = $this->ffmpeg->toArray();
        }
        if (isset($this->_usedProperties['objects'])) {
            $output['objects'] = $this->objects->toArray();
        }
        if (isset($this->_usedProperties['storages'])) {
            $output['storages'] = $this->storages->toArray();
        }
        if (isset($this->_usedProperties['storage'])) {
            $output['storage'] = $this->storage;
        }
    
        return $output;
    }

}
