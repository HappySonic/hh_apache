<?php

namespace Symfony\Config\SuluLocation;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Geolocators'.\DIRECTORY_SEPARATOR.'NominatimConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Geolocators'.\DIRECTORY_SEPARATOR.'GoogleConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class GeolocatorsConfig 
{
    private $nominatim;
    private $google;
    private $_usedProperties = [];
    
    public function nominatim(array $value = []): \Symfony\Config\SuluLocation\Geolocators\NominatimConfig
    {
        if (null === $this->nominatim) {
            $this->_usedProperties['nominatim'] = true;
            $this->nominatim = new \Symfony\Config\SuluLocation\Geolocators\NominatimConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "nominatim()" has already been initialized. You cannot pass values the second time you call nominatim().');
        }
    
        return $this->nominatim;
    }
    
    public function google(array $value = []): \Symfony\Config\SuluLocation\Geolocators\GoogleConfig
    {
        if (null === $this->google) {
            $this->_usedProperties['google'] = true;
            $this->google = new \Symfony\Config\SuluLocation\Geolocators\GoogleConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "google()" has already been initialized. You cannot pass values the second time you call google().');
        }
    
        return $this->google;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('nominatim', $value)) {
            $this->_usedProperties['nominatim'] = true;
            $this->nominatim = new \Symfony\Config\SuluLocation\Geolocators\NominatimConfig($value['nominatim']);
            unset($value['nominatim']);
        }
    
        if (array_key_exists('google', $value)) {
            $this->_usedProperties['google'] = true;
            $this->google = new \Symfony\Config\SuluLocation\Geolocators\GoogleConfig($value['google']);
            unset($value['google']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['nominatim'])) {
            $output['nominatim'] = $this->nominatim->toArray();
        }
        if (isset($this->_usedProperties['google'])) {
            $output['google'] = $this->google->toArray();
        }
    
        return $output;
    }

}
