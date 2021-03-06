<?php

namespace Proxies\__CG__\Sulu\Bundle\ContactBundle\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Contact extends \Sulu\Bundle\ContactBundle\Entity\Contact implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', 'id', 'firstName', 'middleName', 'lastName', 'title', 'birthday', 'created', 'changed', 'locales', 'changer', 'creator', 'note', 'notes', 'emails', 'phones', 'faxes', 'socialMediaProfiles', 'formOfAddress', 'salutation', 'tags', 'account', 'addresses', 'accountContacts', 'newsletter', 'gender', 'mainEmail', 'mainPhone', 'mainFax', 'mainUrl', 'contactAddresses', 'medias', 'categories', 'urls', 'bankAccounts', 'avatar', 'apiBasePath', 'apiPath'];
        }

        return ['__isInitialized__', 'id', 'firstName', 'middleName', 'lastName', 'title', 'birthday', 'created', 'changed', 'locales', 'changer', 'creator', 'note', 'notes', 'emails', 'phones', 'faxes', 'socialMediaProfiles', 'formOfAddress', 'salutation', 'tags', 'account', 'addresses', 'accountContacts', 'newsletter', 'gender', 'mainEmail', 'mainPhone', 'mainFax', 'mainUrl', 'contactAddresses', 'medias', 'categories', 'urls', 'bankAccounts', 'avatar', 'apiBasePath', 'apiPath'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Contact $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setFirstName($firstName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFirstName', [$firstName]);

        return parent::setFirstName($firstName);
    }

    /**
     * {@inheritDoc}
     */
    public function getFirstName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFirstName', []);

        return parent::getFirstName();
    }

    /**
     * {@inheritDoc}
     */
    public function setMiddleName($middleName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMiddleName', [$middleName]);

        return parent::setMiddleName($middleName);
    }

    /**
     * {@inheritDoc}
     */
    public function getMiddleName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMiddleName', []);

        return parent::getMiddleName();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastName($lastName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastName', [$lastName]);

        return parent::setLastName($lastName);
    }

    /**
     * {@inheritDoc}
     */
    public function setAvatar($avatar)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAvatar', [$avatar]);

        return parent::setAvatar($avatar);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastName', []);

        return parent::getLastName();
    }

    /**
     * {@inheritDoc}
     */
    public function getFullName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFullName', []);

        return parent::getFullName();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitle($title)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitle', [$title]);

        return parent::setTitle($title);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitle', []);

        return parent::getTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setPosition($position)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPosition', [$position]);

        return parent::setPosition($position);
    }

    /**
     * {@inheritDoc}
     */
    public function getPosition()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPosition', []);

        return parent::getPosition();
    }

    /**
     * {@inheritDoc}
     */
    public function setBirthday($birthday)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBirthday', [$birthday]);

        return parent::setBirthday($birthday);
    }

    /**
     * {@inheritDoc}
     */
    public function getBirthday()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBirthday', []);

        return parent::getBirthday();
    }

    /**
     * {@inheritDoc}
     */
    public function getCreated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreated', []);

        return parent::getCreated();
    }

    /**
     * {@inheritDoc}
     */
    public function getChanged()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChanged', []);

        return parent::getChanged();
    }

    /**
     * {@inheritDoc}
     */
    public function addLocale(\Sulu\Bundle\ContactBundle\Entity\ContactLocale $locale)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addLocale', [$locale]);

        return parent::addLocale($locale);
    }

    /**
     * {@inheritDoc}
     */
    public function removeLocale(\Sulu\Bundle\ContactBundle\Entity\ContactLocale $locale)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeLocale', [$locale]);

        return parent::removeLocale($locale);
    }

    /**
     * {@inheritDoc}
     */
    public function getLocales()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLocales', []);

        return parent::getLocales();
    }

    /**
     * {@inheritDoc}
     */
    public function setChanger(\Sulu\Component\Security\Authentication\UserInterface $changer = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChanger', [$changer]);

        return parent::setChanger($changer);
    }

    /**
     * {@inheritDoc}
     */
    public function getChanger()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChanger', []);

        return parent::getChanger();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreator(\Sulu\Component\Security\Authentication\UserInterface $creator = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreator', [$creator]);

        return parent::setCreator($creator);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreator()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreator', []);

        return parent::getCreator();
    }

    /**
     * {@inheritDoc}
     */
    public function setNote(?string $note): \Sulu\Bundle\ContactBundle\Entity\ContactInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNote', [$note]);

        return parent::setNote($note);
    }

    /**
     * {@inheritDoc}
     */
    public function getNote(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNote', []);

        return parent::getNote();
    }

    /**
     * {@inheritDoc}
     */
    public function addNote(\Sulu\Bundle\ContactBundle\Entity\Note $note)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addNote', [$note]);

        return parent::addNote($note);
    }

    /**
     * {@inheritDoc}
     */
    public function removeNote(\Sulu\Bundle\ContactBundle\Entity\Note $note)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeNote', [$note]);

        return parent::removeNote($note);
    }

    /**
     * {@inheritDoc}
     */
    public function getNotes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNotes', []);

        return parent::getNotes();
    }

    /**
     * {@inheritDoc}
     */
    public function addEmail(\Sulu\Bundle\ContactBundle\Entity\Email $email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addEmail', [$email]);

        return parent::addEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function removeEmail(\Sulu\Bundle\ContactBundle\Entity\Email $email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeEmail', [$email]);

        return parent::removeEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmails()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmails', []);

        return parent::getEmails();
    }

    /**
     * {@inheritDoc}
     */
    public function addPhone(\Sulu\Bundle\ContactBundle\Entity\Phone $phone)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPhone', [$phone]);

        return parent::addPhone($phone);
    }

    /**
     * {@inheritDoc}
     */
    public function removePhone(\Sulu\Bundle\ContactBundle\Entity\Phone $phone)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removePhone', [$phone]);

        return parent::removePhone($phone);
    }

    /**
     * {@inheritDoc}
     */
    public function getPhones()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhones', []);

        return parent::getPhones();
    }

    /**
     * {@inheritDoc}
     */
    public function addFax(\Sulu\Bundle\ContactBundle\Entity\Fax $fax)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addFax', [$fax]);

        return parent::addFax($fax);
    }

    /**
     * {@inheritDoc}
     */
    public function removeFax(\Sulu\Bundle\ContactBundle\Entity\Fax $fax)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeFax', [$fax]);

        return parent::removeFax($fax);
    }

    /**
     * {@inheritDoc}
     */
    public function getFaxes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFaxes', []);

        return parent::getFaxes();
    }

    /**
     * {@inheritDoc}
     */
    public function addSocialMediaProfile(\Sulu\Bundle\ContactBundle\Entity\SocialMediaProfile $socialMediaProfile)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addSocialMediaProfile', [$socialMediaProfile]);

        return parent::addSocialMediaProfile($socialMediaProfile);
    }

    /**
     * {@inheritDoc}
     */
    public function removeSocialMediaProfile(\Sulu\Bundle\ContactBundle\Entity\SocialMediaProfile $socialMediaProfile)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeSocialMediaProfile', [$socialMediaProfile]);

        return parent::removeSocialMediaProfile($socialMediaProfile);
    }

    /**
     * {@inheritDoc}
     */
    public function getSocialMediaProfiles()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSocialMediaProfiles', []);

        return parent::getSocialMediaProfiles();
    }

    /**
     * {@inheritDoc}
     */
    public function addUrl(\Sulu\Bundle\ContactBundle\Entity\Url $url)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addUrl', [$url]);

        return parent::addUrl($url);
    }

    /**
     * {@inheritDoc}
     */
    public function removeUrl(\Sulu\Bundle\ContactBundle\Entity\Url $url)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeUrl', [$url]);

        return parent::removeUrl($url);
    }

    /**
     * {@inheritDoc}
     */
    public function getUrls()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUrls', []);

        return parent::getUrls();
    }

    /**
     * {@inheritDoc}
     */
    public function setFormOfAddress($formOfAddress)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFormOfAddress', [$formOfAddress]);

        return parent::setFormOfAddress($formOfAddress);
    }

    /**
     * {@inheritDoc}
     */
    public function getFormOfAddress()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFormOfAddress', []);

        return parent::getFormOfAddress();
    }

    /**
     * {@inheritDoc}
     */
    public function setSalutation($salutation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSalutation', [$salutation]);

        return parent::setSalutation($salutation);
    }

    /**
     * {@inheritDoc}
     */
    public function getSalutation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSalutation', []);

        return parent::getSalutation();
    }

    /**
     * {@inheritDoc}
     */
    public function addTag(\Sulu\Bundle\TagBundle\Tag\TagInterface $tag)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addTag', [$tag]);

        return parent::addTag($tag);
    }

    /**
     * {@inheritDoc}
     */
    public function removeTag(\Sulu\Bundle\TagBundle\Tag\TagInterface $tag)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeTag', [$tag]);

        return parent::removeTag($tag);
    }

    /**
     * {@inheritDoc}
     */
    public function getTags()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTags', []);

        return parent::getTags();
    }

    /**
     * {@inheritDoc}
     */
    public function getTagNameArray()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTagNameArray', []);

        return parent::getTagNameArray();
    }

    /**
     * {@inheritDoc}
     */
    public function addAccountContact(\Sulu\Bundle\ContactBundle\Entity\AccountContact $accountContact)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addAccountContact', [$accountContact]);

        return parent::addAccountContact($accountContact);
    }

    /**
     * {@inheritDoc}
     */
    public function removeAccountContact(\Sulu\Bundle\ContactBundle\Entity\AccountContact $accountContact)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeAccountContact', [$accountContact]);

        return parent::removeAccountContact($accountContact);
    }

    /**
     * {@inheritDoc}
     */
    public function getAccountContacts()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAccountContacts', []);

        return parent::getAccountContacts();
    }

    /**
     * {@inheritDoc}
     */
    public function setNewsletter($newsletter)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNewsletter', [$newsletter]);

        return parent::setNewsletter($newsletter);
    }

    /**
     * {@inheritDoc}
     */
    public function getNewsletter()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNewsletter', []);

        return parent::getNewsletter();
    }

    /**
     * {@inheritDoc}
     */
    public function setGender($gender)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGender', [$gender]);

        return parent::setGender($gender);
    }

    /**
     * {@inheritDoc}
     */
    public function getGender()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGender', []);

        return parent::getGender();
    }

    /**
     * {@inheritDoc}
     */
    public function getMainAccount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMainAccount', []);

        return parent::getMainAccount();
    }

    /**
     * {@inheritDoc}
     */
    public function getAddresses()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddresses', []);

        return parent::getAddresses();
    }

    /**
     * {@inheritDoc}
     */
    public function setMainEmail($mainEmail)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMainEmail', [$mainEmail]);

        return parent::setMainEmail($mainEmail);
    }

    /**
     * {@inheritDoc}
     */
    public function getMainEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMainEmail', []);

        return parent::getMainEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setMainPhone($mainPhone)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMainPhone', [$mainPhone]);

        return parent::setMainPhone($mainPhone);
    }

    /**
     * {@inheritDoc}
     */
    public function getMainPhone()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMainPhone', []);

        return parent::getMainPhone();
    }

    /**
     * {@inheritDoc}
     */
    public function setMainFax($mainFax)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMainFax', [$mainFax]);

        return parent::setMainFax($mainFax);
    }

    /**
     * {@inheritDoc}
     */
    public function getMainFax()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMainFax', []);

        return parent::getMainFax();
    }

    /**
     * {@inheritDoc}
     */
    public function setMainUrl($mainUrl)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMainUrl', [$mainUrl]);

        return parent::setMainUrl($mainUrl);
    }

    /**
     * {@inheritDoc}
     */
    public function getMainUrl()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMainUrl', []);

        return parent::getMainUrl();
    }

    /**
     * {@inheritDoc}
     */
    public function addContactAddress(\Sulu\Bundle\ContactBundle\Entity\ContactAddress $contactAddress)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addContactAddress', [$contactAddress]);

        return parent::addContactAddress($contactAddress);
    }

    /**
     * {@inheritDoc}
     */
    public function removeContactAddress(\Sulu\Bundle\ContactBundle\Entity\ContactAddress $contactAddress)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeContactAddress', [$contactAddress]);

        return parent::removeContactAddress($contactAddress);
    }

    /**
     * {@inheritDoc}
     */
    public function getContactAddresses()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContactAddresses', []);

        return parent::getContactAddresses();
    }

    /**
     * {@inheritDoc}
     */
    public function getMainAddress()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMainAddress', []);

        return parent::getMainAddress();
    }

    /**
     * {@inheritDoc}
     */
    public function addMedia(\Sulu\Bundle\MediaBundle\Entity\MediaInterface $media)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addMedia', [$media]);

        return parent::addMedia($media);
    }

    /**
     * {@inheritDoc}
     */
    public function removeMedia(\Sulu\Bundle\MediaBundle\Entity\MediaInterface $media)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeMedia', [$media]);

        return parent::removeMedia($media);
    }

    /**
     * {@inheritDoc}
     */
    public function getMedias()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMedias', []);

        return parent::getMedias();
    }

    /**
     * {@inheritDoc}
     */
    public function getAvatar()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAvatar', []);

        return parent::getAvatar();
    }

    /**
     * {@inheritDoc}
     */
    public function addCategory(\Sulu\Bundle\CategoryBundle\Entity\CategoryInterface $category)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCategory', [$category]);

        return parent::addCategory($category);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCategory(\Sulu\Bundle\CategoryBundle\Entity\CategoryInterface $category)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCategory', [$category]);

        return parent::removeCategory($category);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategories()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategories', []);

        return parent::getCategories();
    }

    /**
     * {@inheritDoc}
     */
    public function addBankAccount(\Sulu\Bundle\ContactBundle\Entity\BankAccount $bankAccount)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addBankAccount', [$bankAccount]);

        return parent::addBankAccount($bankAccount);
    }

    /**
     * {@inheritDoc}
     */
    public function removeBankAccount(\Sulu\Bundle\ContactBundle\Entity\BankAccount $bankAccounts)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeBankAccount', [$bankAccounts]);

        return parent::removeBankAccount($bankAccounts);
    }

    /**
     * {@inheritDoc}
     */
    public function getBankAccounts()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBankAccounts', []);

        return parent::getBankAccounts();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreated(\DateTime $created)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreated', [$created]);

        return parent::setCreated($created);
    }

    /**
     * {@inheritDoc}
     */
    public function setChanged(\DateTime $changed)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChanged', [$changed]);

        return parent::setChanged($changed);
    }

    /**
     * {@inheritDoc}
     */
    public function toArray()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'toArray', []);

        return parent::toArray();
    }

    /**
     * {@inheritDoc}
     */
    public function getLinks()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLinks', []);

        return parent::getLinks();
    }

    /**
     * {@inheritDoc}
     */
    public function createSelfLink()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'createSelfLink', []);

        return parent::createSelfLink();
    }

    /**
     * {@inheritDoc}
     */
    public function getApiPath()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApiPath', []);

        return parent::getApiPath();
    }

    /**
     * {@inheritDoc}
     */
    public function hasApiPath()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasApiPath', []);

        return parent::hasApiPath();
    }

}
