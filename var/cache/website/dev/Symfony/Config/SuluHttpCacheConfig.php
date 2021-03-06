<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'SuluHttpCache'.\DIRECTORY_SEPARATOR.'TagsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'SuluHttpCache'.\DIRECTORY_SEPARATOR.'CacheConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'SuluHttpCache'.\DIRECTORY_SEPARATOR.'ProxyClientConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'SuluHttpCache'.\DIRECTORY_SEPARATOR.'DebugConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class SuluHttpCacheConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $tags;
    private $cache;
    private $proxyClient;
    private $debug;
    private $_usedProperties = [];
    
    public function tags(array $value = []): \Symfony\Config\SuluHttpCache\TagsConfig
    {
        if (null === $this->tags) {
            $this->_usedProperties['tags'] = true;
            $this->tags = new \Symfony\Config\SuluHttpCache\TagsConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "tags()" has already been initialized. You cannot pass values the second time you call tags().');
        }
    
        return $this->tags;
    }
    
    public function cache(array $value = []): \Symfony\Config\SuluHttpCache\CacheConfig
    {
        if (null === $this->cache) {
            $this->_usedProperties['cache'] = true;
            $this->cache = new \Symfony\Config\SuluHttpCache\CacheConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "cache()" has already been initialized. You cannot pass values the second time you call cache().');
        }
    
        return $this->cache;
    }
    
    public function proxyClient(array $value = []): \Symfony\Config\SuluHttpCache\ProxyClientConfig
    {
        if (null === $this->proxyClient) {
            $this->_usedProperties['proxyClient'] = true;
            $this->proxyClient = new \Symfony\Config\SuluHttpCache\ProxyClientConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "proxyClient()" has already been initialized. You cannot pass values the second time you call proxyClient().');
        }
    
        return $this->proxyClient;
    }
    
    public function debug(array $value = []): \Symfony\Config\SuluHttpCache\DebugConfig
    {
        if (null === $this->debug) {
            $this->_usedProperties['debug'] = true;
            $this->debug = new \Symfony\Config\SuluHttpCache\DebugConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "debug()" has already been initialized. You cannot pass values the second time you call debug().');
        }
    
        return $this->debug;
    }
    
    public function getExtensionAlias(): string
    {
        return 'sulu_http_cache';
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('tags', $value)) {
            $this->_usedProperties['tags'] = true;
            $this->tags = new \Symfony\Config\SuluHttpCache\TagsConfig($value['tags']);
            unset($value['tags']);
        }
    
        if (array_key_exists('cache', $value)) {
            $this->_usedProperties['cache'] = true;
            $this->cache = new \Symfony\Config\SuluHttpCache\CacheConfig($value['cache']);
            unset($value['cache']);
        }
    
        if (array_key_exists('proxy_client', $value)) {
            $this->_usedProperties['proxyClient'] = true;
            $this->proxyClient = new \Symfony\Config\SuluHttpCache\ProxyClientConfig($value['proxy_client']);
            unset($value['proxy_client']);
        }
    
        if (array_key_exists('debug', $value)) {
            $this->_usedProperties['debug'] = true;
            $this->debug = new \Symfony\Config\SuluHttpCache\DebugConfig($value['debug']);
            unset($value['debug']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['tags'])) {
            $output['tags'] = $this->tags->toArray();
        }
        if (isset($this->_usedProperties['cache'])) {
            $output['cache'] = $this->cache->toArray();
        }
        if (isset($this->_usedProperties['proxyClient'])) {
            $output['proxy_client'] = $this->proxyClient->toArray();
        }
        if (isset($this->_usedProperties['debug'])) {
            $output['debug'] = $this->debug->toArray();
        }
    
        return $output;
    }

}
