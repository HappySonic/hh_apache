<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'SuluSecurity'.\DIRECTORY_SEPARATOR.'CheckerConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'SuluSecurity'.\DIRECTORY_SEPARATOR.'SecurityTypesConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'SuluSecurity'.\DIRECTORY_SEPARATOR.'ResetPasswordConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'SuluSecurity'.\DIRECTORY_SEPARATOR.'ObjectsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class SuluSecurityConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $system;
    private $checker;
    private $securityTypes;
    private $resetPassword;
    private $objects;
    private $_usedProperties = [];
    
    /**
     * @default 'Sulu'
     * @param ParamConfigurator|mixed $value
     * @deprecated The system option is deprecated and will be removed. Setting this option in the admin context will break the permissions registered by the bundles.
     * @return $this
     */
    public function system($value): self
    {
        $this->_usedProperties['system'] = true;
        $this->system = $value;
    
        return $this;
    }
    
    public function checker(array $value = []): \Symfony\Config\SuluSecurity\CheckerConfig
    {
        if (null === $this->checker) {
            $this->_usedProperties['checker'] = true;
            $this->checker = new \Symfony\Config\SuluSecurity\CheckerConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "checker()" has already been initialized. You cannot pass values the second time you call checker().');
        }
    
        return $this->checker;
    }
    
    public function securityTypes(array $value = []): \Symfony\Config\SuluSecurity\SecurityTypesConfig
    {
        if (null === $this->securityTypes) {
            $this->_usedProperties['securityTypes'] = true;
            $this->securityTypes = new \Symfony\Config\SuluSecurity\SecurityTypesConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "securityTypes()" has already been initialized. You cannot pass values the second time you call securityTypes().');
        }
    
        return $this->securityTypes;
    }
    
    public function resetPassword(array $value = []): \Symfony\Config\SuluSecurity\ResetPasswordConfig
    {
        if (null === $this->resetPassword) {
            $this->_usedProperties['resetPassword'] = true;
            $this->resetPassword = new \Symfony\Config\SuluSecurity\ResetPasswordConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "resetPassword()" has already been initialized. You cannot pass values the second time you call resetPassword().');
        }
    
        return $this->resetPassword;
    }
    
    public function objects(array $value = []): \Symfony\Config\SuluSecurity\ObjectsConfig
    {
        if (null === $this->objects) {
            $this->_usedProperties['objects'] = true;
            $this->objects = new \Symfony\Config\SuluSecurity\ObjectsConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "objects()" has already been initialized. You cannot pass values the second time you call objects().');
        }
    
        return $this->objects;
    }
    
    public function getExtensionAlias(): string
    {
        return 'sulu_security';
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('system', $value)) {
            $this->_usedProperties['system'] = true;
            $this->system = $value['system'];
            unset($value['system']);
        }
    
        if (array_key_exists('checker', $value)) {
            $this->_usedProperties['checker'] = true;
            $this->checker = new \Symfony\Config\SuluSecurity\CheckerConfig($value['checker']);
            unset($value['checker']);
        }
    
        if (array_key_exists('security_types', $value)) {
            $this->_usedProperties['securityTypes'] = true;
            $this->securityTypes = new \Symfony\Config\SuluSecurity\SecurityTypesConfig($value['security_types']);
            unset($value['security_types']);
        }
    
        if (array_key_exists('reset_password', $value)) {
            $this->_usedProperties['resetPassword'] = true;
            $this->resetPassword = new \Symfony\Config\SuluSecurity\ResetPasswordConfig($value['reset_password']);
            unset($value['reset_password']);
        }
    
        if (array_key_exists('objects', $value)) {
            $this->_usedProperties['objects'] = true;
            $this->objects = new \Symfony\Config\SuluSecurity\ObjectsConfig($value['objects']);
            unset($value['objects']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['system'])) {
            $output['system'] = $this->system;
        }
        if (isset($this->_usedProperties['checker'])) {
            $output['checker'] = $this->checker->toArray();
        }
        if (isset($this->_usedProperties['securityTypes'])) {
            $output['security_types'] = $this->securityTypes->toArray();
        }
        if (isset($this->_usedProperties['resetPassword'])) {
            $output['reset_password'] = $this->resetPassword->toArray();
        }
        if (isset($this->_usedProperties['objects'])) {
            $output['objects'] = $this->objects->toArray();
        }
    
        return $output;
    }

}
