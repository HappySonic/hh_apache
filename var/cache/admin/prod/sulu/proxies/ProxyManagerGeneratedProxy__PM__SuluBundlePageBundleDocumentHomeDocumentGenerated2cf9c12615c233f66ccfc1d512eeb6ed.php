<?php

namespace ProxyManagerGeneratedProxy\__PM__\Sulu\Bundle\PageBundle\Document\HomeDocument;

class Generated2cf9c12615c233f66ccfc1d512eeb6ed extends \Sulu\Bundle\PageBundle\Document\HomeDocument implements \ProxyManager\Proxy\GhostObjectInterface
{
    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera2e88 = null;

    /**
     * @var bool tracks initialization status - true while the object is initializing
     */
    private $initializationTrackerdccc7 = false;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesa4d84 = [
        
    ];

    /**
     * @var array[][] visibility and default value of defined properties, indexed by
     * property name and class name
     */
    private static $privatePropertiescf19e = [
        
    ];

    /**
     * @var string[][] declaring class name of defined protected properties, indexed by
     * property name
     */
    private static $protectedPropertiesa6c19 = [
        'nodeName' => 'Sulu\\Bundle\\PageBundle\\Document\\BasePageDocument',
        'created' => 'Sulu\\Bundle\\PageBundle\\Document\\BasePageDocument',
        'changed' => 'Sulu\\Bundle\\PageBundle\\Document\\BasePageDocument',
        'creator' => 'Sulu\\Bundle\\PageBundle\\Document\\BasePageDocument',
        'changer' => 'Sulu\\Bundle\\PageBundle\\Document\\BasePageDocument',
        'title' => 'Sulu\\Bundle\\PageBundle\\Document\\BasePageDocument',
        'resourceSegment' => 'Sulu\\Bundle\\PageBundle\\Document\\BasePageDocument',
        'navigationContexts' => 'Sulu\\Bundle\\PageBundle\\Document\\BasePageDocument',
        'redirectType' => 'Sulu\\Bundle\\PageBundle\\Document\\BasePageDocument',
        'redirectTarget' => 'Sulu\\Bundle\\PageBundle\\Document\\BasePageDocument',
        'redirectExternal' => 'Sulu\\Bundle\\PageBundle\\Document\\BasePageDocument',
        'workflowStage' => 'Sulu\\Bundle\\PageBundle\\Document\\BasePageDocument',
        'published' => 'Sulu\\Bundle\\PageBundle\\Document\\BasePageDocument',
        'shadowLocaleEnabled' => 'Sulu\\Bundle\\PageBundle\\Document\\BasePageDocument',
        'shadowLocale' => 'Sulu\\Bundle\\PageBundle\\Document\\BasePageDocument',
        'uuid' => 'Sulu\\Bundle\\PageBundle\\Document\\BasePageDocument',
        'structureType' => 'Sulu\\Bundle\\PageBundle\\Document\\BasePageDocument',
        'structure' => 'Sulu\\Bundle\\PageBundle\\Document\\BasePageDocument',
        'locale' => 'Sulu\\Bundle\\PageBundle\\Document\\BasePageDocument',
        'originalLocale' => 'Sulu\\Bundle\\PageBundle\\Document\\BasePageDocument',
        'children' => 'Sulu\\Bundle\\PageBundle\\Document\\BasePageDocument',
        'path' => 'Sulu\\Bundle\\PageBundle\\Document\\BasePageDocument',
        'extensions' => 'Sulu\\Bundle\\PageBundle\\Document\\BasePageDocument',
        'webspaceName' => 'Sulu\\Bundle\\PageBundle\\Document\\BasePageDocument',
        'suluOrder' => 'Sulu\\Bundle\\PageBundle\\Document\\BasePageDocument',
        'permissions' => 'Sulu\\Bundle\\PageBundle\\Document\\BasePageDocument',
        'versions' => 'Sulu\\Bundle\\PageBundle\\Document\\BasePageDocument',
        'authored' => 'Sulu\\Bundle\\PageBundle\\Document\\BasePageDocument',
        'author' => 'Sulu\\Bundle\\PageBundle\\Document\\BasePageDocument',
    ];

    private static $signature2cf9c12615c233f66ccfc1d512eeb6ed = 'YTo0OntzOjk6ImNsYXNzTmFtZSI7czo0NDoiU3VsdVxCdW5kbGVcUGFnZUJ1bmRsZVxEb2N1bWVudFxIb21lRG9jdW1lbnQiO3M6NzoiZmFjdG9yeSI7czo0NDoiUHJveHlNYW5hZ2VyXEZhY3RvcnlcTGF6eUxvYWRpbmdHaG9zdEZhY3RvcnkiO3M6MTk6InByb3h5TWFuYWdlclZlcnNpb24iO3M6NDc6InYxLjAuOEA1ODFhYjM1ZjgzY2UyMTM1MDU3ZTBhZmFlODkyZmJmMWM1ODNiZmI5IjtzOjEyOiJwcm94eU9wdGlvbnMiO2E6MDp7fX0=';

    /**
     * Triggers initialization logic for this ghost object
     *
     * @param string  $methodName
     * @param mixed[] $parameters
     *
     * @return mixed
     */
    private function callInitializer38255($methodName, array $parameters)
    {
        if ($this->initializationTrackerdccc7 || ! $this->initializera2e88) {
            return;
        }

        $this->initializationTrackerdccc7 = true;

        $this->nodeName = null;
        $this->created = null;
        $this->changed = null;
        $this->creator = null;
        $this->changer = null;
        $this->title = null;
        $this->resourceSegment = null;
        $this->navigationContexts = [];
        $this->redirectType = null;
        $this->redirectTarget = null;
        $this->redirectExternal = null;
        $this->workflowStage = null;
        $this->published = null;
        $this->shadowLocaleEnabled = false;
        $this->shadowLocale = null;
        $this->uuid = null;
        $this->structureType = null;
        $this->structure = null;
        $this->locale = null;
        $this->originalLocale = null;
        $this->children = null;
        $this->path = null;
        $this->extensions = null;
        $this->webspaceName = null;
        $this->suluOrder = null;
        $this->permissions = [];
        $this->versions = [];
        $this->authored = null;
        $this->author = null;


        $properties = [
            '' . "\0" . '*' . "\0" . 'nodeName' => & $this->nodeName,
            '' . "\0" . '*' . "\0" . 'created' => & $this->created,
            '' . "\0" . '*' . "\0" . 'changed' => & $this->changed,
            '' . "\0" . '*' . "\0" . 'creator' => & $this->creator,
            '' . "\0" . '*' . "\0" . 'changer' => & $this->changer,
            '' . "\0" . '*' . "\0" . 'title' => & $this->title,
            '' . "\0" . '*' . "\0" . 'resourceSegment' => & $this->resourceSegment,
            '' . "\0" . '*' . "\0" . 'navigationContexts' => & $this->navigationContexts,
            '' . "\0" . '*' . "\0" . 'redirectType' => & $this->redirectType,
            '' . "\0" . '*' . "\0" . 'redirectTarget' => & $this->redirectTarget,
            '' . "\0" . '*' . "\0" . 'redirectExternal' => & $this->redirectExternal,
            '' . "\0" . '*' . "\0" . 'workflowStage' => & $this->workflowStage,
            '' . "\0" . '*' . "\0" . 'published' => & $this->published,
            '' . "\0" . '*' . "\0" . 'shadowLocaleEnabled' => & $this->shadowLocaleEnabled,
            '' . "\0" . '*' . "\0" . 'shadowLocale' => & $this->shadowLocale,
            '' . "\0" . '*' . "\0" . 'uuid' => & $this->uuid,
            '' . "\0" . '*' . "\0" . 'structureType' => & $this->structureType,
            '' . "\0" . '*' . "\0" . 'structure' => & $this->structure,
            '' . "\0" . '*' . "\0" . 'locale' => & $this->locale,
            '' . "\0" . '*' . "\0" . 'originalLocale' => & $this->originalLocale,
            '' . "\0" . '*' . "\0" . 'children' => & $this->children,
            '' . "\0" . '*' . "\0" . 'path' => & $this->path,
            '' . "\0" . '*' . "\0" . 'extensions' => & $this->extensions,
            '' . "\0" . '*' . "\0" . 'webspaceName' => & $this->webspaceName,
            '' . "\0" . '*' . "\0" . 'suluOrder' => & $this->suluOrder,
            '' . "\0" . '*' . "\0" . 'permissions' => & $this->permissions,
            '' . "\0" . '*' . "\0" . 'versions' => & $this->versions,
            '' . "\0" . '*' . "\0" . 'authored' => & $this->authored,
            '' . "\0" . '*' . "\0" . 'author' => & $this->author,
        ];



        $result = $this->initializera2e88->__invoke($this, $methodName, $parameters, $this->initializera2e88, $properties);
        $this->initializationTrackerdccc7 = false;

        return $result;
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        unset($instance->nodeName, $instance->created, $instance->changed, $instance->creator, $instance->changer, $instance->title, $instance->resourceSegment, $instance->navigationContexts, $instance->redirectType, $instance->redirectTarget, $instance->redirectExternal, $instance->workflowStage, $instance->published, $instance->shadowLocaleEnabled, $instance->shadowLocale, $instance->uuid, $instance->structureType, $instance->structure, $instance->locale, $instance->originalLocale, $instance->children, $instance->path, $instance->extensions, $instance->webspaceName, $instance->suluOrder, $instance->permissions, $instance->versions, $instance->authored, $instance->author);

        $instance->initializera2e88 = $initializer;

        return $instance;
    }

    public function & __get($name)
    {
        $this->initializera2e88 && ! $this->initializationTrackerdccc7 && $this->callInitializer38255('__get', array('name' => $name));

        if (isset(self::$publicPropertiesa4d84[$name])) {
            return $this->$name;
        }

        if (isset(self::$protectedPropertiesa6c19[$name])) {
            if ($this->initializationTrackerdccc7) {
                return $this->$name;
            }

            // check protected property access via compatible class
            $callers      = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller       = isset($callers[1]) ? $callers[1] : [];
            $object       = isset($caller['object']) ? $caller['object'] : '';
            $expectedType = self::$protectedPropertiesa6c19[$name];

            if ($object instanceof $expectedType) {
                return $this->$name;
            }

            $class = isset($caller['class']) ? $caller['class'] : '';

            if ($class === $expectedType || is_subclass_of($class, $expectedType) || $class === 'ReflectionProperty') {
                return $this->$name;
            }
        } elseif (isset(self::$privatePropertiescf19e[$name])) {
            // check private property access via same class
            $callers = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller  = isset($callers[1]) ? $callers[1] : [];
            $class   = isset($caller['class']) ? $caller['class'] : '';

            static $accessorCache = [];

            if (isset(self::$privatePropertiescf19e[$name][$class])) {
                $cacheKey = $class . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(static function & ($instance) use ($name) {
                        return $instance->$name;
                    }, null, $class);

                return $accessor($this);
            }

            if ($this->initializationTrackerdccc7 || 'ReflectionProperty' === $class) {
                $tmpClass = key(self::$privatePropertiescf19e[$name]);
                $cacheKey = $tmpClass . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(static function & ($instance) use ($name) {
                        return $instance->$name;
                    }, null, $tmpClass);

                return $accessor($this);
            }
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $realInstanceReflection->newInstanceWithoutConstructor();
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializera2e88 && $this->callInitializer38255('__set', array('name' => $name, 'value' => $value));

        if (isset(self::$publicPropertiesa4d84[$name])) {
            return ($this->$name = $value);
        }

        if (isset(self::$protectedPropertiesa6c19[$name])) {
            // check protected property access via compatible class
            $callers      = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller       = isset($callers[1]) ? $callers[1] : [];
            $object       = isset($caller['object']) ? $caller['object'] : '';
            $expectedType = self::$protectedPropertiesa6c19[$name];

            if ($object instanceof $expectedType) {
                return ($this->$name = $value);
            }

            $class = isset($caller['class']) ? $caller['class'] : '';

            if ($class === $expectedType || is_subclass_of($class, $expectedType) || $class === 'ReflectionProperty') {
                return ($this->$name = $value);
            }
        } elseif (isset(self::$privatePropertiescf19e[$name])) {
            // check private property access via same class
            $callers = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller  = isset($callers[1]) ? $callers[1] : [];
            $class   = isset($caller['class']) ? $caller['class'] : '';

            static $accessorCache = [];

            if (isset(self::$privatePropertiescf19e[$name][$class])) {
                $cacheKey = $class . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(static function ($instance, $value) use ($name) {
                        return ($instance->$name = $value);
                    }, null, $class);

                return $accessor($this, $value);
            }

            if ('ReflectionProperty' === $class) {
                $tmpClass = key(self::$privatePropertiescf19e[$name]);
                $cacheKey = $tmpClass . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(static function ($instance, $value) use ($name) {
                        return ($instance->$name = $value);
                    }, null, $tmpClass);

                return $accessor($this, $value);
            }
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $realInstanceReflection->newInstanceWithoutConstructor();
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializera2e88 && $this->callInitializer38255('__isset', array('name' => $name));

        if (isset(self::$publicPropertiesa4d84[$name])) {
            return isset($this->$name);
        }

        if (isset(self::$protectedPropertiesa6c19[$name])) {
            // check protected property access via compatible class
            $callers      = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller       = isset($callers[1]) ? $callers[1] : [];
            $object       = isset($caller['object']) ? $caller['object'] : '';
            $expectedType = self::$protectedPropertiesa6c19[$name];

            if ($object instanceof $expectedType) {
                return isset($this->$name);
            }

            $class = isset($caller['class']) ? $caller['class'] : '';

            if ($class === $expectedType || is_subclass_of($class, $expectedType)) {
                return isset($this->$name);
            }
        } else {
            // check private property access via same class
            $callers = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller  = isset($callers[1]) ? $callers[1] : [];
            $class   = isset($caller['class']) ? $caller['class'] : '';

            static $accessorCache = [];

            if (isset(self::$privatePropertiescf19e[$name][$class])) {
                $cacheKey = $class . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(static function ($instance) use ($name) {
                        return isset($instance->$name);
                    }, null, $class);

                return $accessor($this);
            }

            if ('ReflectionProperty' === $class) {
                $tmpClass = key(self::$privatePropertiescf19e[$name]);
                $cacheKey = $tmpClass . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(static function ($instance) use ($name) {
                        return isset($instance->$name);
                    }, null, $tmpClass);

                return $accessor($this);
            }
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this;

            return isset($targetObject->$name);
        }

        $targetObject = $realInstanceReflection->newInstanceWithoutConstructor();
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializera2e88 && $this->callInitializer38255('__unset', array('name' => $name));

        if (isset(self::$publicPropertiesa4d84[$name])) {
            unset($this->$name);

            return;
        }

        if (isset(self::$protectedPropertiesa6c19[$name])) {
            // check protected property access via compatible class
            $callers      = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller       = isset($callers[1]) ? $callers[1] : [];
            $object       = isset($caller['object']) ? $caller['object'] : '';
            $expectedType = self::$protectedPropertiesa6c19[$name];

            if ($object instanceof $expectedType) {
                unset($this->$name);

                return;
            }

            $class = isset($caller['class']) ? $caller['class'] : '';

            if ($class === $expectedType || is_subclass_of($class, $expectedType) || $class === 'ReflectionProperty') {
                unset($this->$name);

                return;
            }
        } elseif (isset(self::$privatePropertiescf19e[$name])) {
            // check private property access via same class
            $callers = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller  = isset($callers[1]) ? $callers[1] : [];
            $class   = isset($caller['class']) ? $caller['class'] : '';

            static $accessorCache = [];

            if (isset(self::$privatePropertiescf19e[$name][$class])) {
                $cacheKey = $class . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(static function ($instance) use ($name) {
                        unset($instance->$name);
                    }, null, $class);

                return $accessor($this);
            }

            if ('ReflectionProperty' === $class) {
                $tmpClass = key(self::$privatePropertiescf19e[$name]);
                $cacheKey = $tmpClass . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(static function ($instance) use ($name) {
                        unset($instance->$name);
                    }, null, $tmpClass);

                return $accessor($this);
            }
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $realInstanceReflection->newInstanceWithoutConstructor();
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializera2e88 && $this->callInitializer38255('__clone', []);
    }

    public function __sleep()
    {
        $this->initializera2e88 && $this->callInitializer38255('__sleep', []);

        return array_keys((array) $this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera2e88 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera2e88;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera2e88 && $this->callInitializer38255('initializeProxy', []);
    }

    public function isProxyInitialized() : bool
    {
        return ! $this->initializera2e88;
    }
}
