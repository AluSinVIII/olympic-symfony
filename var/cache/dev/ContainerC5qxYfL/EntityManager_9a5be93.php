<?php

namespace ContainerC5qxYfL;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder09d3d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializere4e43 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties98ee9 = [
        
    ];

    public function getConnection()
    {
        $this->initializere4e43 && ($this->initializere4e43->__invoke($valueHolder09d3d, $this, 'getConnection', array(), $this->initializere4e43) || 1) && $this->valueHolder09d3d = $valueHolder09d3d;

        return $this->valueHolder09d3d->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializere4e43 && ($this->initializere4e43->__invoke($valueHolder09d3d, $this, 'getMetadataFactory', array(), $this->initializere4e43) || 1) && $this->valueHolder09d3d = $valueHolder09d3d;

        return $this->valueHolder09d3d->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializere4e43 && ($this->initializere4e43->__invoke($valueHolder09d3d, $this, 'getExpressionBuilder', array(), $this->initializere4e43) || 1) && $this->valueHolder09d3d = $valueHolder09d3d;

        return $this->valueHolder09d3d->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializere4e43 && ($this->initializere4e43->__invoke($valueHolder09d3d, $this, 'beginTransaction', array(), $this->initializere4e43) || 1) && $this->valueHolder09d3d = $valueHolder09d3d;

        return $this->valueHolder09d3d->beginTransaction();
    }

    public function getCache()
    {
        $this->initializere4e43 && ($this->initializere4e43->__invoke($valueHolder09d3d, $this, 'getCache', array(), $this->initializere4e43) || 1) && $this->valueHolder09d3d = $valueHolder09d3d;

        return $this->valueHolder09d3d->getCache();
    }

    public function transactional($func)
    {
        $this->initializere4e43 && ($this->initializere4e43->__invoke($valueHolder09d3d, $this, 'transactional', array('func' => $func), $this->initializere4e43) || 1) && $this->valueHolder09d3d = $valueHolder09d3d;

        return $this->valueHolder09d3d->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializere4e43 && ($this->initializere4e43->__invoke($valueHolder09d3d, $this, 'wrapInTransaction', array('func' => $func), $this->initializere4e43) || 1) && $this->valueHolder09d3d = $valueHolder09d3d;

        return $this->valueHolder09d3d->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializere4e43 && ($this->initializere4e43->__invoke($valueHolder09d3d, $this, 'commit', array(), $this->initializere4e43) || 1) && $this->valueHolder09d3d = $valueHolder09d3d;

        return $this->valueHolder09d3d->commit();
    }

    public function rollback()
    {
        $this->initializere4e43 && ($this->initializere4e43->__invoke($valueHolder09d3d, $this, 'rollback', array(), $this->initializere4e43) || 1) && $this->valueHolder09d3d = $valueHolder09d3d;

        return $this->valueHolder09d3d->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializere4e43 && ($this->initializere4e43->__invoke($valueHolder09d3d, $this, 'getClassMetadata', array('className' => $className), $this->initializere4e43) || 1) && $this->valueHolder09d3d = $valueHolder09d3d;

        return $this->valueHolder09d3d->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializere4e43 && ($this->initializere4e43->__invoke($valueHolder09d3d, $this, 'createQuery', array('dql' => $dql), $this->initializere4e43) || 1) && $this->valueHolder09d3d = $valueHolder09d3d;

        return $this->valueHolder09d3d->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializere4e43 && ($this->initializere4e43->__invoke($valueHolder09d3d, $this, 'createNamedQuery', array('name' => $name), $this->initializere4e43) || 1) && $this->valueHolder09d3d = $valueHolder09d3d;

        return $this->valueHolder09d3d->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializere4e43 && ($this->initializere4e43->__invoke($valueHolder09d3d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializere4e43) || 1) && $this->valueHolder09d3d = $valueHolder09d3d;

        return $this->valueHolder09d3d->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializere4e43 && ($this->initializere4e43->__invoke($valueHolder09d3d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializere4e43) || 1) && $this->valueHolder09d3d = $valueHolder09d3d;

        return $this->valueHolder09d3d->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializere4e43 && ($this->initializere4e43->__invoke($valueHolder09d3d, $this, 'createQueryBuilder', array(), $this->initializere4e43) || 1) && $this->valueHolder09d3d = $valueHolder09d3d;

        return $this->valueHolder09d3d->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializere4e43 && ($this->initializere4e43->__invoke($valueHolder09d3d, $this, 'flush', array('entity' => $entity), $this->initializere4e43) || 1) && $this->valueHolder09d3d = $valueHolder09d3d;

        return $this->valueHolder09d3d->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializere4e43 && ($this->initializere4e43->__invoke($valueHolder09d3d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere4e43) || 1) && $this->valueHolder09d3d = $valueHolder09d3d;

        return $this->valueHolder09d3d->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializere4e43 && ($this->initializere4e43->__invoke($valueHolder09d3d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializere4e43) || 1) && $this->valueHolder09d3d = $valueHolder09d3d;

        return $this->valueHolder09d3d->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializere4e43 && ($this->initializere4e43->__invoke($valueHolder09d3d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializere4e43) || 1) && $this->valueHolder09d3d = $valueHolder09d3d;

        return $this->valueHolder09d3d->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializere4e43 && ($this->initializere4e43->__invoke($valueHolder09d3d, $this, 'clear', array('entityName' => $entityName), $this->initializere4e43) || 1) && $this->valueHolder09d3d = $valueHolder09d3d;

        return $this->valueHolder09d3d->clear($entityName);
    }

    public function close()
    {
        $this->initializere4e43 && ($this->initializere4e43->__invoke($valueHolder09d3d, $this, 'close', array(), $this->initializere4e43) || 1) && $this->valueHolder09d3d = $valueHolder09d3d;

        return $this->valueHolder09d3d->close();
    }

    public function persist($entity)
    {
        $this->initializere4e43 && ($this->initializere4e43->__invoke($valueHolder09d3d, $this, 'persist', array('entity' => $entity), $this->initializere4e43) || 1) && $this->valueHolder09d3d = $valueHolder09d3d;

        return $this->valueHolder09d3d->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializere4e43 && ($this->initializere4e43->__invoke($valueHolder09d3d, $this, 'remove', array('entity' => $entity), $this->initializere4e43) || 1) && $this->valueHolder09d3d = $valueHolder09d3d;

        return $this->valueHolder09d3d->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializere4e43 && ($this->initializere4e43->__invoke($valueHolder09d3d, $this, 'refresh', array('entity' => $entity), $this->initializere4e43) || 1) && $this->valueHolder09d3d = $valueHolder09d3d;

        return $this->valueHolder09d3d->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializere4e43 && ($this->initializere4e43->__invoke($valueHolder09d3d, $this, 'detach', array('entity' => $entity), $this->initializere4e43) || 1) && $this->valueHolder09d3d = $valueHolder09d3d;

        return $this->valueHolder09d3d->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializere4e43 && ($this->initializere4e43->__invoke($valueHolder09d3d, $this, 'merge', array('entity' => $entity), $this->initializere4e43) || 1) && $this->valueHolder09d3d = $valueHolder09d3d;

        return $this->valueHolder09d3d->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializere4e43 && ($this->initializere4e43->__invoke($valueHolder09d3d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializere4e43) || 1) && $this->valueHolder09d3d = $valueHolder09d3d;

        return $this->valueHolder09d3d->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializere4e43 && ($this->initializere4e43->__invoke($valueHolder09d3d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere4e43) || 1) && $this->valueHolder09d3d = $valueHolder09d3d;

        return $this->valueHolder09d3d->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializere4e43 && ($this->initializere4e43->__invoke($valueHolder09d3d, $this, 'getRepository', array('entityName' => $entityName), $this->initializere4e43) || 1) && $this->valueHolder09d3d = $valueHolder09d3d;

        return $this->valueHolder09d3d->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializere4e43 && ($this->initializere4e43->__invoke($valueHolder09d3d, $this, 'contains', array('entity' => $entity), $this->initializere4e43) || 1) && $this->valueHolder09d3d = $valueHolder09d3d;

        return $this->valueHolder09d3d->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializere4e43 && ($this->initializere4e43->__invoke($valueHolder09d3d, $this, 'getEventManager', array(), $this->initializere4e43) || 1) && $this->valueHolder09d3d = $valueHolder09d3d;

        return $this->valueHolder09d3d->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializere4e43 && ($this->initializere4e43->__invoke($valueHolder09d3d, $this, 'getConfiguration', array(), $this->initializere4e43) || 1) && $this->valueHolder09d3d = $valueHolder09d3d;

        return $this->valueHolder09d3d->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializere4e43 && ($this->initializere4e43->__invoke($valueHolder09d3d, $this, 'isOpen', array(), $this->initializere4e43) || 1) && $this->valueHolder09d3d = $valueHolder09d3d;

        return $this->valueHolder09d3d->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializere4e43 && ($this->initializere4e43->__invoke($valueHolder09d3d, $this, 'getUnitOfWork', array(), $this->initializere4e43) || 1) && $this->valueHolder09d3d = $valueHolder09d3d;

        return $this->valueHolder09d3d->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializere4e43 && ($this->initializere4e43->__invoke($valueHolder09d3d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializere4e43) || 1) && $this->valueHolder09d3d = $valueHolder09d3d;

        return $this->valueHolder09d3d->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializere4e43 && ($this->initializere4e43->__invoke($valueHolder09d3d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializere4e43) || 1) && $this->valueHolder09d3d = $valueHolder09d3d;

        return $this->valueHolder09d3d->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializere4e43 && ($this->initializere4e43->__invoke($valueHolder09d3d, $this, 'getProxyFactory', array(), $this->initializere4e43) || 1) && $this->valueHolder09d3d = $valueHolder09d3d;

        return $this->valueHolder09d3d->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializere4e43 && ($this->initializere4e43->__invoke($valueHolder09d3d, $this, 'initializeObject', array('obj' => $obj), $this->initializere4e43) || 1) && $this->valueHolder09d3d = $valueHolder09d3d;

        return $this->valueHolder09d3d->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializere4e43 && ($this->initializere4e43->__invoke($valueHolder09d3d, $this, 'getFilters', array(), $this->initializere4e43) || 1) && $this->valueHolder09d3d = $valueHolder09d3d;

        return $this->valueHolder09d3d->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializere4e43 && ($this->initializere4e43->__invoke($valueHolder09d3d, $this, 'isFiltersStateClean', array(), $this->initializere4e43) || 1) && $this->valueHolder09d3d = $valueHolder09d3d;

        return $this->valueHolder09d3d->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializere4e43 && ($this->initializere4e43->__invoke($valueHolder09d3d, $this, 'hasFilters', array(), $this->initializere4e43) || 1) && $this->valueHolder09d3d = $valueHolder09d3d;

        return $this->valueHolder09d3d->hasFilters();
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

        $instance->initializere4e43 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder09d3d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder09d3d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder09d3d->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializere4e43 && ($this->initializere4e43->__invoke($valueHolder09d3d, $this, '__get', ['name' => $name], $this->initializere4e43) || 1) && $this->valueHolder09d3d = $valueHolder09d3d;

        if (isset(self::$publicProperties98ee9[$name])) {
            return $this->valueHolder09d3d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder09d3d;

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

        $targetObject = $this->valueHolder09d3d;
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
        $this->initializere4e43 && ($this->initializere4e43->__invoke($valueHolder09d3d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere4e43) || 1) && $this->valueHolder09d3d = $valueHolder09d3d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder09d3d;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder09d3d;
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
        $this->initializere4e43 && ($this->initializere4e43->__invoke($valueHolder09d3d, $this, '__isset', array('name' => $name), $this->initializere4e43) || 1) && $this->valueHolder09d3d = $valueHolder09d3d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder09d3d;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder09d3d;
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
        $this->initializere4e43 && ($this->initializere4e43->__invoke($valueHolder09d3d, $this, '__unset', array('name' => $name), $this->initializere4e43) || 1) && $this->valueHolder09d3d = $valueHolder09d3d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder09d3d;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder09d3d;
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
        $this->initializere4e43 && ($this->initializere4e43->__invoke($valueHolder09d3d, $this, '__clone', array(), $this->initializere4e43) || 1) && $this->valueHolder09d3d = $valueHolder09d3d;

        $this->valueHolder09d3d = clone $this->valueHolder09d3d;
    }

    public function __sleep()
    {
        $this->initializere4e43 && ($this->initializere4e43->__invoke($valueHolder09d3d, $this, '__sleep', array(), $this->initializere4e43) || 1) && $this->valueHolder09d3d = $valueHolder09d3d;

        return array('valueHolder09d3d');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializere4e43 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializere4e43;
    }

    public function initializeProxy() : bool
    {
        return $this->initializere4e43 && ($this->initializere4e43->__invoke($valueHolder09d3d, $this, 'initializeProxy', array(), $this->initializere4e43) || 1) && $this->valueHolder09d3d = $valueHolder09d3d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder09d3d;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder09d3d;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
