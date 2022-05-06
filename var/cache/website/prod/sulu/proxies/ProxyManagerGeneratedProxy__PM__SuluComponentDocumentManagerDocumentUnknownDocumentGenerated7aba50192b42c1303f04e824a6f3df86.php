<?php

namespace ProxyManagerGeneratedProxy\__PM__\Sulu\Component\DocumentManager\Document\UnknownDocument;

class Generated7aba50192b42c1303f04e824a6f3df86 extends \Sulu\Component\DocumentManager\Document\UnknownDocument implements \ProxyManager\Proxy\GhostObjectInterface
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
        'nodeName' => [
            'Sulu\\Component\\DocumentManager\\Document\\UnknownDocument' => true,
        ],
        'uuid' => [
            'Sulu\\Component\\DocumentManager\\Document\\UnknownDocument' => true,
        ],
    ];

    /**
     * @var string[][] declaring class name of defined protected properties, indexed by
     * property name
     */
    private static $protectedPropertiesa6c19 = [
        
    ];

    private static $signature7aba50192b42c1303f04e824a6f3df86 = 'YTo0OntzOjk6ImNsYXNzTmFtZSI7czo1NToiU3VsdVxDb21wb25lbnRcRG9jdW1lbnRNYW5hZ2VyXERvY3VtZW50XFVua25vd25Eb2N1bWVudCI7czo3OiJmYWN0b3J5IjtzOjQ0OiJQcm94eU1hbmFnZXJcRmFjdG9yeVxMYXp5TG9hZGluZ0dob3N0RmFjdG9yeSI7czoxOToicHJveHlNYW5hZ2VyVmVyc2lvbiI7czo0NzoidjEuMC44QDU4MWFiMzVmODNjZTIxMzUwNTdlMGFmYWU4OTJmYmYxYzU4M2JmYjkiO3M6MTI6InByb3h5T3B0aW9ucyI7YTowOnt9fQ==';

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

        static $cacheSulu_Component_DocumentManager_Document_UnknownDocument;

        $cacheSulu_Component_DocumentManager_Document_UnknownDocument ?? $cacheSulu_Component_DocumentManager_Document_UnknownDocument = \Closure::bind(static function ($instance) {
            $instance->nodeName = null;
            $instance->uuid = null;
        }, null, 'Sulu\\Component\\DocumentManager\\Document\\UnknownDocument');

        $cacheSulu_Component_DocumentManager_Document_UnknownDocument($this);




        $properties = [

        ];

        static $cacheFetchSulu_Component_DocumentManager_Document_UnknownDocument;

        $cacheFetchSulu_Component_DocumentManager_Document_UnknownDocument ?? $cacheFetchSulu_Component_DocumentManager_Document_UnknownDocument = \Closure::bind(function ($instance, array & $properties) {
            $properties['' . "\0" . 'Sulu\\Component\\DocumentManager\\Document\\UnknownDocument' . "\0" . 'nodeName'] = & $instance->nodeName;
            $properties['' . "\0" . 'Sulu\\Component\\DocumentManager\\Document\\UnknownDocument' . "\0" . 'uuid'] = & $instance->uuid;
        }, $this, 'Sulu\\Component\\DocumentManager\\Document\\UnknownDocument');

        $cacheFetchSulu_Component_DocumentManager_Document_UnknownDocument($this, $properties);

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

        \Closure::bind(function (\Sulu\Component\DocumentManager\Document\UnknownDocument $instance) {
            unset($instance->nodeName, $instance->uuid);
        }, $instance, 'Sulu\\Component\\DocumentManager\\Document\\UnknownDocument')->__invoke($instance);

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
