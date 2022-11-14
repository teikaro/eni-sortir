<?php

namespace ContainerVl9PrPv;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder6e810 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer60555 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties3f198 = [
        
    ];

    public function getConnection()
    {
        $this->initializer60555 && ($this->initializer60555->__invoke($valueHolder6e810, $this, 'getConnection', array(), $this->initializer60555) || 1) && $this->valueHolder6e810 = $valueHolder6e810;

        return $this->valueHolder6e810->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer60555 && ($this->initializer60555->__invoke($valueHolder6e810, $this, 'getMetadataFactory', array(), $this->initializer60555) || 1) && $this->valueHolder6e810 = $valueHolder6e810;

        return $this->valueHolder6e810->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer60555 && ($this->initializer60555->__invoke($valueHolder6e810, $this, 'getExpressionBuilder', array(), $this->initializer60555) || 1) && $this->valueHolder6e810 = $valueHolder6e810;

        return $this->valueHolder6e810->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer60555 && ($this->initializer60555->__invoke($valueHolder6e810, $this, 'beginTransaction', array(), $this->initializer60555) || 1) && $this->valueHolder6e810 = $valueHolder6e810;

        return $this->valueHolder6e810->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer60555 && ($this->initializer60555->__invoke($valueHolder6e810, $this, 'getCache', array(), $this->initializer60555) || 1) && $this->valueHolder6e810 = $valueHolder6e810;

        return $this->valueHolder6e810->getCache();
    }

    public function transactional($func)
    {
        $this->initializer60555 && ($this->initializer60555->__invoke($valueHolder6e810, $this, 'transactional', array('func' => $func), $this->initializer60555) || 1) && $this->valueHolder6e810 = $valueHolder6e810;

        return $this->valueHolder6e810->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer60555 && ($this->initializer60555->__invoke($valueHolder6e810, $this, 'wrapInTransaction', array('func' => $func), $this->initializer60555) || 1) && $this->valueHolder6e810 = $valueHolder6e810;

        return $this->valueHolder6e810->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer60555 && ($this->initializer60555->__invoke($valueHolder6e810, $this, 'commit', array(), $this->initializer60555) || 1) && $this->valueHolder6e810 = $valueHolder6e810;

        return $this->valueHolder6e810->commit();
    }

    public function rollback()
    {
        $this->initializer60555 && ($this->initializer60555->__invoke($valueHolder6e810, $this, 'rollback', array(), $this->initializer60555) || 1) && $this->valueHolder6e810 = $valueHolder6e810;

        return $this->valueHolder6e810->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer60555 && ($this->initializer60555->__invoke($valueHolder6e810, $this, 'getClassMetadata', array('className' => $className), $this->initializer60555) || 1) && $this->valueHolder6e810 = $valueHolder6e810;

        return $this->valueHolder6e810->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer60555 && ($this->initializer60555->__invoke($valueHolder6e810, $this, 'createQuery', array('dql' => $dql), $this->initializer60555) || 1) && $this->valueHolder6e810 = $valueHolder6e810;

        return $this->valueHolder6e810->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer60555 && ($this->initializer60555->__invoke($valueHolder6e810, $this, 'createNamedQuery', array('name' => $name), $this->initializer60555) || 1) && $this->valueHolder6e810 = $valueHolder6e810;

        return $this->valueHolder6e810->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer60555 && ($this->initializer60555->__invoke($valueHolder6e810, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer60555) || 1) && $this->valueHolder6e810 = $valueHolder6e810;

        return $this->valueHolder6e810->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer60555 && ($this->initializer60555->__invoke($valueHolder6e810, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer60555) || 1) && $this->valueHolder6e810 = $valueHolder6e810;

        return $this->valueHolder6e810->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer60555 && ($this->initializer60555->__invoke($valueHolder6e810, $this, 'createQueryBuilder', array(), $this->initializer60555) || 1) && $this->valueHolder6e810 = $valueHolder6e810;

        return $this->valueHolder6e810->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer60555 && ($this->initializer60555->__invoke($valueHolder6e810, $this, 'flush', array('entity' => $entity), $this->initializer60555) || 1) && $this->valueHolder6e810 = $valueHolder6e810;

        return $this->valueHolder6e810->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer60555 && ($this->initializer60555->__invoke($valueHolder6e810, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer60555) || 1) && $this->valueHolder6e810 = $valueHolder6e810;

        return $this->valueHolder6e810->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer60555 && ($this->initializer60555->__invoke($valueHolder6e810, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer60555) || 1) && $this->valueHolder6e810 = $valueHolder6e810;

        return $this->valueHolder6e810->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer60555 && ($this->initializer60555->__invoke($valueHolder6e810, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer60555) || 1) && $this->valueHolder6e810 = $valueHolder6e810;

        return $this->valueHolder6e810->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer60555 && ($this->initializer60555->__invoke($valueHolder6e810, $this, 'clear', array('entityName' => $entityName), $this->initializer60555) || 1) && $this->valueHolder6e810 = $valueHolder6e810;

        return $this->valueHolder6e810->clear($entityName);
    }

    public function close()
    {
        $this->initializer60555 && ($this->initializer60555->__invoke($valueHolder6e810, $this, 'close', array(), $this->initializer60555) || 1) && $this->valueHolder6e810 = $valueHolder6e810;

        return $this->valueHolder6e810->close();
    }

    public function persist($entity)
    {
        $this->initializer60555 && ($this->initializer60555->__invoke($valueHolder6e810, $this, 'persist', array('entity' => $entity), $this->initializer60555) || 1) && $this->valueHolder6e810 = $valueHolder6e810;

        return $this->valueHolder6e810->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer60555 && ($this->initializer60555->__invoke($valueHolder6e810, $this, 'remove', array('entity' => $entity), $this->initializer60555) || 1) && $this->valueHolder6e810 = $valueHolder6e810;

        return $this->valueHolder6e810->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer60555 && ($this->initializer60555->__invoke($valueHolder6e810, $this, 'refresh', array('entity' => $entity), $this->initializer60555) || 1) && $this->valueHolder6e810 = $valueHolder6e810;

        return $this->valueHolder6e810->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer60555 && ($this->initializer60555->__invoke($valueHolder6e810, $this, 'detach', array('entity' => $entity), $this->initializer60555) || 1) && $this->valueHolder6e810 = $valueHolder6e810;

        return $this->valueHolder6e810->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer60555 && ($this->initializer60555->__invoke($valueHolder6e810, $this, 'merge', array('entity' => $entity), $this->initializer60555) || 1) && $this->valueHolder6e810 = $valueHolder6e810;

        return $this->valueHolder6e810->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer60555 && ($this->initializer60555->__invoke($valueHolder6e810, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer60555) || 1) && $this->valueHolder6e810 = $valueHolder6e810;

        return $this->valueHolder6e810->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer60555 && ($this->initializer60555->__invoke($valueHolder6e810, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer60555) || 1) && $this->valueHolder6e810 = $valueHolder6e810;

        return $this->valueHolder6e810->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer60555 && ($this->initializer60555->__invoke($valueHolder6e810, $this, 'getRepository', array('entityName' => $entityName), $this->initializer60555) || 1) && $this->valueHolder6e810 = $valueHolder6e810;

        return $this->valueHolder6e810->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer60555 && ($this->initializer60555->__invoke($valueHolder6e810, $this, 'contains', array('entity' => $entity), $this->initializer60555) || 1) && $this->valueHolder6e810 = $valueHolder6e810;

        return $this->valueHolder6e810->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer60555 && ($this->initializer60555->__invoke($valueHolder6e810, $this, 'getEventManager', array(), $this->initializer60555) || 1) && $this->valueHolder6e810 = $valueHolder6e810;

        return $this->valueHolder6e810->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer60555 && ($this->initializer60555->__invoke($valueHolder6e810, $this, 'getConfiguration', array(), $this->initializer60555) || 1) && $this->valueHolder6e810 = $valueHolder6e810;

        return $this->valueHolder6e810->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer60555 && ($this->initializer60555->__invoke($valueHolder6e810, $this, 'isOpen', array(), $this->initializer60555) || 1) && $this->valueHolder6e810 = $valueHolder6e810;

        return $this->valueHolder6e810->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer60555 && ($this->initializer60555->__invoke($valueHolder6e810, $this, 'getUnitOfWork', array(), $this->initializer60555) || 1) && $this->valueHolder6e810 = $valueHolder6e810;

        return $this->valueHolder6e810->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer60555 && ($this->initializer60555->__invoke($valueHolder6e810, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer60555) || 1) && $this->valueHolder6e810 = $valueHolder6e810;

        return $this->valueHolder6e810->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer60555 && ($this->initializer60555->__invoke($valueHolder6e810, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer60555) || 1) && $this->valueHolder6e810 = $valueHolder6e810;

        return $this->valueHolder6e810->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer60555 && ($this->initializer60555->__invoke($valueHolder6e810, $this, 'getProxyFactory', array(), $this->initializer60555) || 1) && $this->valueHolder6e810 = $valueHolder6e810;

        return $this->valueHolder6e810->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer60555 && ($this->initializer60555->__invoke($valueHolder6e810, $this, 'initializeObject', array('obj' => $obj), $this->initializer60555) || 1) && $this->valueHolder6e810 = $valueHolder6e810;

        return $this->valueHolder6e810->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer60555 && ($this->initializer60555->__invoke($valueHolder6e810, $this, 'getFilters', array(), $this->initializer60555) || 1) && $this->valueHolder6e810 = $valueHolder6e810;

        return $this->valueHolder6e810->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer60555 && ($this->initializer60555->__invoke($valueHolder6e810, $this, 'isFiltersStateClean', array(), $this->initializer60555) || 1) && $this->valueHolder6e810 = $valueHolder6e810;

        return $this->valueHolder6e810->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer60555 && ($this->initializer60555->__invoke($valueHolder6e810, $this, 'hasFilters', array(), $this->initializer60555) || 1) && $this->valueHolder6e810 = $valueHolder6e810;

        return $this->valueHolder6e810->hasFilters();
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

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer60555 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder6e810) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder6e810 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder6e810->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer60555 && ($this->initializer60555->__invoke($valueHolder6e810, $this, '__get', ['name' => $name], $this->initializer60555) || 1) && $this->valueHolder6e810 = $valueHolder6e810;

        if (isset(self::$publicProperties3f198[$name])) {
            return $this->valueHolder6e810->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6e810;

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

        $targetObject = $this->valueHolder6e810;
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
        $this->initializer60555 && ($this->initializer60555->__invoke($valueHolder6e810, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer60555) || 1) && $this->valueHolder6e810 = $valueHolder6e810;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6e810;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder6e810;
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
        $this->initializer60555 && ($this->initializer60555->__invoke($valueHolder6e810, $this, '__isset', array('name' => $name), $this->initializer60555) || 1) && $this->valueHolder6e810 = $valueHolder6e810;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6e810;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder6e810;
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
        $this->initializer60555 && ($this->initializer60555->__invoke($valueHolder6e810, $this, '__unset', array('name' => $name), $this->initializer60555) || 1) && $this->valueHolder6e810 = $valueHolder6e810;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6e810;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder6e810;
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
        $this->initializer60555 && ($this->initializer60555->__invoke($valueHolder6e810, $this, '__clone', array(), $this->initializer60555) || 1) && $this->valueHolder6e810 = $valueHolder6e810;

        $this->valueHolder6e810 = clone $this->valueHolder6e810;
    }

    public function __sleep()
    {
        $this->initializer60555 && ($this->initializer60555->__invoke($valueHolder6e810, $this, '__sleep', array(), $this->initializer60555) || 1) && $this->valueHolder6e810 = $valueHolder6e810;

        return array('valueHolder6e810');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer60555 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer60555;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer60555 && ($this->initializer60555->__invoke($valueHolder6e810, $this, 'initializeProxy', array(), $this->initializer60555) || 1) && $this->valueHolder6e810 = $valueHolder6e810;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder6e810;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder6e810;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
