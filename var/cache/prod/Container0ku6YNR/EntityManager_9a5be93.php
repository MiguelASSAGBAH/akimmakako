<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder449e7 = null;
    private $initializerd3846 = null;
    private static $publicProperties92dc0 = [
        
    ];
    public function getConnection()
    {
        $this->initializerd3846 && ($this->initializerd3846->__invoke($valueHolder449e7, $this, 'getConnection', array(), $this->initializerd3846) || 1) && $this->valueHolder449e7 = $valueHolder449e7;
        return $this->valueHolder449e7->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerd3846 && ($this->initializerd3846->__invoke($valueHolder449e7, $this, 'getMetadataFactory', array(), $this->initializerd3846) || 1) && $this->valueHolder449e7 = $valueHolder449e7;
        return $this->valueHolder449e7->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerd3846 && ($this->initializerd3846->__invoke($valueHolder449e7, $this, 'getExpressionBuilder', array(), $this->initializerd3846) || 1) && $this->valueHolder449e7 = $valueHolder449e7;
        return $this->valueHolder449e7->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerd3846 && ($this->initializerd3846->__invoke($valueHolder449e7, $this, 'beginTransaction', array(), $this->initializerd3846) || 1) && $this->valueHolder449e7 = $valueHolder449e7;
        return $this->valueHolder449e7->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerd3846 && ($this->initializerd3846->__invoke($valueHolder449e7, $this, 'getCache', array(), $this->initializerd3846) || 1) && $this->valueHolder449e7 = $valueHolder449e7;
        return $this->valueHolder449e7->getCache();
    }
    public function transactional($func)
    {
        $this->initializerd3846 && ($this->initializerd3846->__invoke($valueHolder449e7, $this, 'transactional', array('func' => $func), $this->initializerd3846) || 1) && $this->valueHolder449e7 = $valueHolder449e7;
        return $this->valueHolder449e7->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializerd3846 && ($this->initializerd3846->__invoke($valueHolder449e7, $this, 'wrapInTransaction', array('func' => $func), $this->initializerd3846) || 1) && $this->valueHolder449e7 = $valueHolder449e7;
        return $this->valueHolder449e7->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializerd3846 && ($this->initializerd3846->__invoke($valueHolder449e7, $this, 'commit', array(), $this->initializerd3846) || 1) && $this->valueHolder449e7 = $valueHolder449e7;
        return $this->valueHolder449e7->commit();
    }
    public function rollback()
    {
        $this->initializerd3846 && ($this->initializerd3846->__invoke($valueHolder449e7, $this, 'rollback', array(), $this->initializerd3846) || 1) && $this->valueHolder449e7 = $valueHolder449e7;
        return $this->valueHolder449e7->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerd3846 && ($this->initializerd3846->__invoke($valueHolder449e7, $this, 'getClassMetadata', array('className' => $className), $this->initializerd3846) || 1) && $this->valueHolder449e7 = $valueHolder449e7;
        return $this->valueHolder449e7->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerd3846 && ($this->initializerd3846->__invoke($valueHolder449e7, $this, 'createQuery', array('dql' => $dql), $this->initializerd3846) || 1) && $this->valueHolder449e7 = $valueHolder449e7;
        return $this->valueHolder449e7->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerd3846 && ($this->initializerd3846->__invoke($valueHolder449e7, $this, 'createNamedQuery', array('name' => $name), $this->initializerd3846) || 1) && $this->valueHolder449e7 = $valueHolder449e7;
        return $this->valueHolder449e7->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerd3846 && ($this->initializerd3846->__invoke($valueHolder449e7, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerd3846) || 1) && $this->valueHolder449e7 = $valueHolder449e7;
        return $this->valueHolder449e7->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerd3846 && ($this->initializerd3846->__invoke($valueHolder449e7, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerd3846) || 1) && $this->valueHolder449e7 = $valueHolder449e7;
        return $this->valueHolder449e7->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerd3846 && ($this->initializerd3846->__invoke($valueHolder449e7, $this, 'createQueryBuilder', array(), $this->initializerd3846) || 1) && $this->valueHolder449e7 = $valueHolder449e7;
        return $this->valueHolder449e7->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerd3846 && ($this->initializerd3846->__invoke($valueHolder449e7, $this, 'flush', array('entity' => $entity), $this->initializerd3846) || 1) && $this->valueHolder449e7 = $valueHolder449e7;
        return $this->valueHolder449e7->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd3846 && ($this->initializerd3846->__invoke($valueHolder449e7, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd3846) || 1) && $this->valueHolder449e7 = $valueHolder449e7;
        return $this->valueHolder449e7->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerd3846 && ($this->initializerd3846->__invoke($valueHolder449e7, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerd3846) || 1) && $this->valueHolder449e7 = $valueHolder449e7;
        return $this->valueHolder449e7->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerd3846 && ($this->initializerd3846->__invoke($valueHolder449e7, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerd3846) || 1) && $this->valueHolder449e7 = $valueHolder449e7;
        return $this->valueHolder449e7->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerd3846 && ($this->initializerd3846->__invoke($valueHolder449e7, $this, 'clear', array('entityName' => $entityName), $this->initializerd3846) || 1) && $this->valueHolder449e7 = $valueHolder449e7;
        return $this->valueHolder449e7->clear($entityName);
    }
    public function close()
    {
        $this->initializerd3846 && ($this->initializerd3846->__invoke($valueHolder449e7, $this, 'close', array(), $this->initializerd3846) || 1) && $this->valueHolder449e7 = $valueHolder449e7;
        return $this->valueHolder449e7->close();
    }
    public function persist($entity)
    {
        $this->initializerd3846 && ($this->initializerd3846->__invoke($valueHolder449e7, $this, 'persist', array('entity' => $entity), $this->initializerd3846) || 1) && $this->valueHolder449e7 = $valueHolder449e7;
        return $this->valueHolder449e7->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerd3846 && ($this->initializerd3846->__invoke($valueHolder449e7, $this, 'remove', array('entity' => $entity), $this->initializerd3846) || 1) && $this->valueHolder449e7 = $valueHolder449e7;
        return $this->valueHolder449e7->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializerd3846 && ($this->initializerd3846->__invoke($valueHolder449e7, $this, 'refresh', array('entity' => $entity), $this->initializerd3846) || 1) && $this->valueHolder449e7 = $valueHolder449e7;
        return $this->valueHolder449e7->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializerd3846 && ($this->initializerd3846->__invoke($valueHolder449e7, $this, 'detach', array('entity' => $entity), $this->initializerd3846) || 1) && $this->valueHolder449e7 = $valueHolder449e7;
        return $this->valueHolder449e7->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerd3846 && ($this->initializerd3846->__invoke($valueHolder449e7, $this, 'merge', array('entity' => $entity), $this->initializerd3846) || 1) && $this->valueHolder449e7 = $valueHolder449e7;
        return $this->valueHolder449e7->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerd3846 && ($this->initializerd3846->__invoke($valueHolder449e7, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerd3846) || 1) && $this->valueHolder449e7 = $valueHolder449e7;
        return $this->valueHolder449e7->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerd3846 && ($this->initializerd3846->__invoke($valueHolder449e7, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd3846) || 1) && $this->valueHolder449e7 = $valueHolder449e7;
        return $this->valueHolder449e7->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerd3846 && ($this->initializerd3846->__invoke($valueHolder449e7, $this, 'getRepository', array('entityName' => $entityName), $this->initializerd3846) || 1) && $this->valueHolder449e7 = $valueHolder449e7;
        return $this->valueHolder449e7->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerd3846 && ($this->initializerd3846->__invoke($valueHolder449e7, $this, 'contains', array('entity' => $entity), $this->initializerd3846) || 1) && $this->valueHolder449e7 = $valueHolder449e7;
        return $this->valueHolder449e7->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerd3846 && ($this->initializerd3846->__invoke($valueHolder449e7, $this, 'getEventManager', array(), $this->initializerd3846) || 1) && $this->valueHolder449e7 = $valueHolder449e7;
        return $this->valueHolder449e7->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerd3846 && ($this->initializerd3846->__invoke($valueHolder449e7, $this, 'getConfiguration', array(), $this->initializerd3846) || 1) && $this->valueHolder449e7 = $valueHolder449e7;
        return $this->valueHolder449e7->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerd3846 && ($this->initializerd3846->__invoke($valueHolder449e7, $this, 'isOpen', array(), $this->initializerd3846) || 1) && $this->valueHolder449e7 = $valueHolder449e7;
        return $this->valueHolder449e7->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerd3846 && ($this->initializerd3846->__invoke($valueHolder449e7, $this, 'getUnitOfWork', array(), $this->initializerd3846) || 1) && $this->valueHolder449e7 = $valueHolder449e7;
        return $this->valueHolder449e7->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerd3846 && ($this->initializerd3846->__invoke($valueHolder449e7, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd3846) || 1) && $this->valueHolder449e7 = $valueHolder449e7;
        return $this->valueHolder449e7->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerd3846 && ($this->initializerd3846->__invoke($valueHolder449e7, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd3846) || 1) && $this->valueHolder449e7 = $valueHolder449e7;
        return $this->valueHolder449e7->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerd3846 && ($this->initializerd3846->__invoke($valueHolder449e7, $this, 'getProxyFactory', array(), $this->initializerd3846) || 1) && $this->valueHolder449e7 = $valueHolder449e7;
        return $this->valueHolder449e7->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerd3846 && ($this->initializerd3846->__invoke($valueHolder449e7, $this, 'initializeObject', array('obj' => $obj), $this->initializerd3846) || 1) && $this->valueHolder449e7 = $valueHolder449e7;
        return $this->valueHolder449e7->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerd3846 && ($this->initializerd3846->__invoke($valueHolder449e7, $this, 'getFilters', array(), $this->initializerd3846) || 1) && $this->valueHolder449e7 = $valueHolder449e7;
        return $this->valueHolder449e7->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerd3846 && ($this->initializerd3846->__invoke($valueHolder449e7, $this, 'isFiltersStateClean', array(), $this->initializerd3846) || 1) && $this->valueHolder449e7 = $valueHolder449e7;
        return $this->valueHolder449e7->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerd3846 && ($this->initializerd3846->__invoke($valueHolder449e7, $this, 'hasFilters', array(), $this->initializerd3846) || 1) && $this->valueHolder449e7 = $valueHolder449e7;
        return $this->valueHolder449e7->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerd3846 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder449e7) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder449e7 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder449e7->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializerd3846 && ($this->initializerd3846->__invoke($valueHolder449e7, $this, '__get', ['name' => $name], $this->initializerd3846) || 1) && $this->valueHolder449e7 = $valueHolder449e7;
        if (isset(self::$publicProperties92dc0[$name])) {
            return $this->valueHolder449e7->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder449e7;
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
        $targetObject = $this->valueHolder449e7;
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
        $this->initializerd3846 && ($this->initializerd3846->__invoke($valueHolder449e7, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd3846) || 1) && $this->valueHolder449e7 = $valueHolder449e7;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder449e7;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder449e7;
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
        $this->initializerd3846 && ($this->initializerd3846->__invoke($valueHolder449e7, $this, '__isset', array('name' => $name), $this->initializerd3846) || 1) && $this->valueHolder449e7 = $valueHolder449e7;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder449e7;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder449e7;
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
        $this->initializerd3846 && ($this->initializerd3846->__invoke($valueHolder449e7, $this, '__unset', array('name' => $name), $this->initializerd3846) || 1) && $this->valueHolder449e7 = $valueHolder449e7;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder449e7;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder449e7;
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
        $this->initializerd3846 && ($this->initializerd3846->__invoke($valueHolder449e7, $this, '__clone', array(), $this->initializerd3846) || 1) && $this->valueHolder449e7 = $valueHolder449e7;
        $this->valueHolder449e7 = clone $this->valueHolder449e7;
    }
    public function __sleep()
    {
        $this->initializerd3846 && ($this->initializerd3846->__invoke($valueHolder449e7, $this, '__sleep', array(), $this->initializerd3846) || 1) && $this->valueHolder449e7 = $valueHolder449e7;
        return array('valueHolder449e7');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerd3846 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerd3846;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerd3846 && ($this->initializerd3846->__invoke($valueHolder449e7, $this, 'initializeProxy', array(), $this->initializerd3846) || 1) && $this->valueHolder449e7 = $valueHolder449e7;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder449e7;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder449e7;
    }
}
