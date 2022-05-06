<?php

namespace Symfony\Config\SuluSecurity;

require_once __DIR__.\DIRECTORY_SEPARATOR.'ResetPassword'.\DIRECTORY_SEPARATOR.'MailConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class ResetPasswordConfig 
{
    private $mail;
    private $_usedProperties = [];
    
    public function mail(array $value = []): \Symfony\Config\SuluSecurity\ResetPassword\MailConfig
    {
        if (null === $this->mail) {
            $this->_usedProperties['mail'] = true;
            $this->mail = new \Symfony\Config\SuluSecurity\ResetPassword\MailConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "mail()" has already been initialized. You cannot pass values the second time you call mail().');
        }
    
        return $this->mail;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('mail', $value)) {
            $this->_usedProperties['mail'] = true;
            $this->mail = new \Symfony\Config\SuluSecurity\ResetPassword\MailConfig($value['mail']);
            unset($value['mail']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['mail'])) {
            $output['mail'] = $this->mail->toArray();
        }
    
        return $output;
    }

}
