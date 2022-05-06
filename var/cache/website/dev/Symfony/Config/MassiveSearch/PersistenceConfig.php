<?php

namespace Symfony\Config\MassiveSearch;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'DoctrineOrmConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class PersistenceConfig 
{
    private $doctrineOrm;
    private $_usedProperties = [];
    
    public function doctrineOrm(array $value = []): \Symfony\Config\MassiveSearch\Persistence\DoctrineOrmConfig
    {
        if (null === $this->doctrineOrm) {
            $this->_usedProperties['doctrineOrm'] = true;
            $this->doctrineOrm = new \Symfony\Config\MassiveSearch\Persistence\DoctrineOrmConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "doctrineOrm()" has already been initialized. You cannot pass values the second time you call doctrineOrm().');
        }
    
        return $this->doctrineOrm;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('doctrine_orm', $value)) {
            $this->_usedProperties['doctrineOrm'] = true;
            $this->doctrineOrm = new \Symfony\Config\MassiveSearch\Persistence\DoctrineOrmConfig($value['doctrine_orm']);
            unset($value['doctrine_orm']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['doctrineOrm'])) {
            $output['doctrine_orm'] = $this->doctrineOrm->toArray();
        }
    
        return $output;
    }

}
