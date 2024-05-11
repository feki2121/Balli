<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHoldercd688 = null;
    private $initializer0984d = null;
    private static $publicProperties5b74d = [
        
    ];
    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer0984d && ($this->initializer0984d->__invoke($valueHoldercd688, $this, 'getList', array(), $this->initializer0984d) || 1) && $this->valueHoldercd688 = $valueHoldercd688;
        return $this->valueHoldercd688->getList();
    }
    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer0984d && ($this->initializer0984d->__invoke($valueHoldercd688, $this, 'getInstalledModules', array(), $this->initializer0984d) || 1) && $this->valueHoldercd688 = $valueHoldercd688;
        return $this->valueHoldercd688->getInstalledModules();
    }
    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer0984d && ($this->initializer0984d->__invoke($valueHoldercd688, $this, 'getMustBeConfiguredModules', array(), $this->initializer0984d) || 1) && $this->valueHoldercd688 = $valueHoldercd688;
        return $this->valueHoldercd688->getMustBeConfiguredModules();
    }
    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer0984d && ($this->initializer0984d->__invoke($valueHoldercd688, $this, 'getUpgradableModules', array(), $this->initializer0984d) || 1) && $this->valueHoldercd688 = $valueHoldercd688;
        return $this->valueHoldercd688->getUpgradableModules();
    }
    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializer0984d && ($this->initializer0984d->__invoke($valueHoldercd688, $this, 'getModule', array('moduleName' => $moduleName), $this->initializer0984d) || 1) && $this->valueHoldercd688 = $valueHoldercd688;
        return $this->valueHoldercd688->getModule($moduleName);
    }
    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializer0984d && ($this->initializer0984d->__invoke($valueHoldercd688, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializer0984d) || 1) && $this->valueHoldercd688 = $valueHoldercd688;
        return $this->valueHoldercd688->getModulePath($moduleName);
    }
    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer0984d && ($this->initializer0984d->__invoke($valueHoldercd688, $this, 'setActionUrls', array('collection' => $collection), $this->initializer0984d) || 1) && $this->valueHoldercd688 = $valueHoldercd688;
        return $this->valueHoldercd688->setActionUrls($collection);
    }
    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializer0984d && ($this->initializer0984d->__invoke($valueHoldercd688, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializer0984d) || 1) && $this->valueHoldercd688 = $valueHoldercd688;
        return $this->valueHoldercd688->clearCache($moduleName, $allShops);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);
        $instance->initializer0984d = $initializer;
        return $instance;
    }
    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;
        if (! $this->valueHoldercd688) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHoldercd688 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
        }
        $this->valueHoldercd688->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }
    public function & __get($name)
    {
        $this->initializer0984d && ($this->initializer0984d->__invoke($valueHoldercd688, $this, '__get', ['name' => $name], $this->initializer0984d) || 1) && $this->valueHoldercd688 = $valueHoldercd688;
        if (isset(self::$publicProperties5b74d[$name])) {
            return $this->valueHoldercd688->$name;
        }
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercd688;
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
        $targetObject = $this->valueHoldercd688;
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
        $this->initializer0984d && ($this->initializer0984d->__invoke($valueHoldercd688, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer0984d) || 1) && $this->valueHoldercd688 = $valueHoldercd688;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercd688;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHoldercd688;
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
        $this->initializer0984d && ($this->initializer0984d->__invoke($valueHoldercd688, $this, '__isset', array('name' => $name), $this->initializer0984d) || 1) && $this->valueHoldercd688 = $valueHoldercd688;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercd688;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHoldercd688;
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
        $this->initializer0984d && ($this->initializer0984d->__invoke($valueHoldercd688, $this, '__unset', array('name' => $name), $this->initializer0984d) || 1) && $this->valueHoldercd688 = $valueHoldercd688;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercd688;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHoldercd688;
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
        $this->initializer0984d && ($this->initializer0984d->__invoke($valueHoldercd688, $this, '__clone', array(), $this->initializer0984d) || 1) && $this->valueHoldercd688 = $valueHoldercd688;
        $this->valueHoldercd688 = clone $this->valueHoldercd688;
    }
    public function __sleep()
    {
        $this->initializer0984d && ($this->initializer0984d->__invoke($valueHoldercd688, $this, '__sleep', array(), $this->initializer0984d) || 1) && $this->valueHoldercd688 = $valueHoldercd688;
        return array('valueHoldercd688');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer0984d = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer0984d;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer0984d && ($this->initializer0984d->__invoke($valueHoldercd688, $this, 'initializeProxy', array(), $this->initializer0984d) || 1) && $this->valueHoldercd688 = $valueHoldercd688;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldercd688;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldercd688;
    }
}
