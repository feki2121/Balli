<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHoldercd688 = null;
    private $initializer0984d = null;
    private static $publicProperties5b74d = [
        
    ];
    public function getConnection()
    {
        $this->initializer0984d && ($this->initializer0984d->__invoke($valueHoldercd688, $this, 'getConnection', array(), $this->initializer0984d) || 1) && $this->valueHoldercd688 = $valueHoldercd688;
        return $this->valueHoldercd688->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer0984d && ($this->initializer0984d->__invoke($valueHoldercd688, $this, 'getMetadataFactory', array(), $this->initializer0984d) || 1) && $this->valueHoldercd688 = $valueHoldercd688;
        return $this->valueHoldercd688->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer0984d && ($this->initializer0984d->__invoke($valueHoldercd688, $this, 'getExpressionBuilder', array(), $this->initializer0984d) || 1) && $this->valueHoldercd688 = $valueHoldercd688;
        return $this->valueHoldercd688->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer0984d && ($this->initializer0984d->__invoke($valueHoldercd688, $this, 'beginTransaction', array(), $this->initializer0984d) || 1) && $this->valueHoldercd688 = $valueHoldercd688;
        return $this->valueHoldercd688->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer0984d && ($this->initializer0984d->__invoke($valueHoldercd688, $this, 'getCache', array(), $this->initializer0984d) || 1) && $this->valueHoldercd688 = $valueHoldercd688;
        return $this->valueHoldercd688->getCache();
    }
    public function transactional($func)
    {
        $this->initializer0984d && ($this->initializer0984d->__invoke($valueHoldercd688, $this, 'transactional', array('func' => $func), $this->initializer0984d) || 1) && $this->valueHoldercd688 = $valueHoldercd688;
        return $this->valueHoldercd688->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer0984d && ($this->initializer0984d->__invoke($valueHoldercd688, $this, 'wrapInTransaction', array('func' => $func), $this->initializer0984d) || 1) && $this->valueHoldercd688 = $valueHoldercd688;
        return $this->valueHoldercd688->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer0984d && ($this->initializer0984d->__invoke($valueHoldercd688, $this, 'commit', array(), $this->initializer0984d) || 1) && $this->valueHoldercd688 = $valueHoldercd688;
        return $this->valueHoldercd688->commit();
    }
    public function rollback()
    {
        $this->initializer0984d && ($this->initializer0984d->__invoke($valueHoldercd688, $this, 'rollback', array(), $this->initializer0984d) || 1) && $this->valueHoldercd688 = $valueHoldercd688;
        return $this->valueHoldercd688->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer0984d && ($this->initializer0984d->__invoke($valueHoldercd688, $this, 'getClassMetadata', array('className' => $className), $this->initializer0984d) || 1) && $this->valueHoldercd688 = $valueHoldercd688;
        return $this->valueHoldercd688->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer0984d && ($this->initializer0984d->__invoke($valueHoldercd688, $this, 'createQuery', array('dql' => $dql), $this->initializer0984d) || 1) && $this->valueHoldercd688 = $valueHoldercd688;
        return $this->valueHoldercd688->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer0984d && ($this->initializer0984d->__invoke($valueHoldercd688, $this, 'createNamedQuery', array('name' => $name), $this->initializer0984d) || 1) && $this->valueHoldercd688 = $valueHoldercd688;
        return $this->valueHoldercd688->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer0984d && ($this->initializer0984d->__invoke($valueHoldercd688, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer0984d) || 1) && $this->valueHoldercd688 = $valueHoldercd688;
        return $this->valueHoldercd688->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer0984d && ($this->initializer0984d->__invoke($valueHoldercd688, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer0984d) || 1) && $this->valueHoldercd688 = $valueHoldercd688;
        return $this->valueHoldercd688->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer0984d && ($this->initializer0984d->__invoke($valueHoldercd688, $this, 'createQueryBuilder', array(), $this->initializer0984d) || 1) && $this->valueHoldercd688 = $valueHoldercd688;
        return $this->valueHoldercd688->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer0984d && ($this->initializer0984d->__invoke($valueHoldercd688, $this, 'flush', array('entity' => $entity), $this->initializer0984d) || 1) && $this->valueHoldercd688 = $valueHoldercd688;
        return $this->valueHoldercd688->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer0984d && ($this->initializer0984d->__invoke($valueHoldercd688, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0984d) || 1) && $this->valueHoldercd688 = $valueHoldercd688;
        return $this->valueHoldercd688->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer0984d && ($this->initializer0984d->__invoke($valueHoldercd688, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer0984d) || 1) && $this->valueHoldercd688 = $valueHoldercd688;
        return $this->valueHoldercd688->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer0984d && ($this->initializer0984d->__invoke($valueHoldercd688, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer0984d) || 1) && $this->valueHoldercd688 = $valueHoldercd688;
        return $this->valueHoldercd688->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer0984d && ($this->initializer0984d->__invoke($valueHoldercd688, $this, 'clear', array('entityName' => $entityName), $this->initializer0984d) || 1) && $this->valueHoldercd688 = $valueHoldercd688;
        return $this->valueHoldercd688->clear($entityName);
    }
    public function close()
    {
        $this->initializer0984d && ($this->initializer0984d->__invoke($valueHoldercd688, $this, 'close', array(), $this->initializer0984d) || 1) && $this->valueHoldercd688 = $valueHoldercd688;
        return $this->valueHoldercd688->close();
    }
    public function persist($entity)
    {
        $this->initializer0984d && ($this->initializer0984d->__invoke($valueHoldercd688, $this, 'persist', array('entity' => $entity), $this->initializer0984d) || 1) && $this->valueHoldercd688 = $valueHoldercd688;
        return $this->valueHoldercd688->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer0984d && ($this->initializer0984d->__invoke($valueHoldercd688, $this, 'remove', array('entity' => $entity), $this->initializer0984d) || 1) && $this->valueHoldercd688 = $valueHoldercd688;
        return $this->valueHoldercd688->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer0984d && ($this->initializer0984d->__invoke($valueHoldercd688, $this, 'refresh', array('entity' => $entity), $this->initializer0984d) || 1) && $this->valueHoldercd688 = $valueHoldercd688;
        return $this->valueHoldercd688->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer0984d && ($this->initializer0984d->__invoke($valueHoldercd688, $this, 'detach', array('entity' => $entity), $this->initializer0984d) || 1) && $this->valueHoldercd688 = $valueHoldercd688;
        return $this->valueHoldercd688->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer0984d && ($this->initializer0984d->__invoke($valueHoldercd688, $this, 'merge', array('entity' => $entity), $this->initializer0984d) || 1) && $this->valueHoldercd688 = $valueHoldercd688;
        return $this->valueHoldercd688->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer0984d && ($this->initializer0984d->__invoke($valueHoldercd688, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer0984d) || 1) && $this->valueHoldercd688 = $valueHoldercd688;
        return $this->valueHoldercd688->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer0984d && ($this->initializer0984d->__invoke($valueHoldercd688, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0984d) || 1) && $this->valueHoldercd688 = $valueHoldercd688;
        return $this->valueHoldercd688->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer0984d && ($this->initializer0984d->__invoke($valueHoldercd688, $this, 'getRepository', array('entityName' => $entityName), $this->initializer0984d) || 1) && $this->valueHoldercd688 = $valueHoldercd688;
        return $this->valueHoldercd688->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer0984d && ($this->initializer0984d->__invoke($valueHoldercd688, $this, 'contains', array('entity' => $entity), $this->initializer0984d) || 1) && $this->valueHoldercd688 = $valueHoldercd688;
        return $this->valueHoldercd688->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer0984d && ($this->initializer0984d->__invoke($valueHoldercd688, $this, 'getEventManager', array(), $this->initializer0984d) || 1) && $this->valueHoldercd688 = $valueHoldercd688;
        return $this->valueHoldercd688->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer0984d && ($this->initializer0984d->__invoke($valueHoldercd688, $this, 'getConfiguration', array(), $this->initializer0984d) || 1) && $this->valueHoldercd688 = $valueHoldercd688;
        return $this->valueHoldercd688->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer0984d && ($this->initializer0984d->__invoke($valueHoldercd688, $this, 'isOpen', array(), $this->initializer0984d) || 1) && $this->valueHoldercd688 = $valueHoldercd688;
        return $this->valueHoldercd688->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer0984d && ($this->initializer0984d->__invoke($valueHoldercd688, $this, 'getUnitOfWork', array(), $this->initializer0984d) || 1) && $this->valueHoldercd688 = $valueHoldercd688;
        return $this->valueHoldercd688->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer0984d && ($this->initializer0984d->__invoke($valueHoldercd688, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0984d) || 1) && $this->valueHoldercd688 = $valueHoldercd688;
        return $this->valueHoldercd688->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer0984d && ($this->initializer0984d->__invoke($valueHoldercd688, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0984d) || 1) && $this->valueHoldercd688 = $valueHoldercd688;
        return $this->valueHoldercd688->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer0984d && ($this->initializer0984d->__invoke($valueHoldercd688, $this, 'getProxyFactory', array(), $this->initializer0984d) || 1) && $this->valueHoldercd688 = $valueHoldercd688;
        return $this->valueHoldercd688->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer0984d && ($this->initializer0984d->__invoke($valueHoldercd688, $this, 'initializeObject', array('obj' => $obj), $this->initializer0984d) || 1) && $this->valueHoldercd688 = $valueHoldercd688;
        return $this->valueHoldercd688->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer0984d && ($this->initializer0984d->__invoke($valueHoldercd688, $this, 'getFilters', array(), $this->initializer0984d) || 1) && $this->valueHoldercd688 = $valueHoldercd688;
        return $this->valueHoldercd688->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer0984d && ($this->initializer0984d->__invoke($valueHoldercd688, $this, 'isFiltersStateClean', array(), $this->initializer0984d) || 1) && $this->valueHoldercd688 = $valueHoldercd688;
        return $this->valueHoldercd688->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer0984d && ($this->initializer0984d->__invoke($valueHoldercd688, $this, 'hasFilters', array(), $this->initializer0984d) || 1) && $this->valueHoldercd688 = $valueHoldercd688;
        return $this->valueHoldercd688->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer0984d = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHoldercd688) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldercd688 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHoldercd688->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer0984d && ($this->initializer0984d->__invoke($valueHoldercd688, $this, '__get', ['name' => $name], $this->initializer0984d) || 1) && $this->valueHoldercd688 = $valueHoldercd688;
        if (isset(self::$publicProperties5b74d[$name])) {
            return $this->valueHoldercd688->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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
