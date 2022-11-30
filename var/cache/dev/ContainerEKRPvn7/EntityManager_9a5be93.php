<?php

namespace ContainerEKRPvn7;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder59fa7 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer3d0fc = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties98173 = [
        
    ];

    public function getConnection()
    {
        $this->initializer3d0fc && ($this->initializer3d0fc->__invoke($valueHolder59fa7, $this, 'getConnection', array(), $this->initializer3d0fc) || 1) && $this->valueHolder59fa7 = $valueHolder59fa7;

        return $this->valueHolder59fa7->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer3d0fc && ($this->initializer3d0fc->__invoke($valueHolder59fa7, $this, 'getMetadataFactory', array(), $this->initializer3d0fc) || 1) && $this->valueHolder59fa7 = $valueHolder59fa7;

        return $this->valueHolder59fa7->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer3d0fc && ($this->initializer3d0fc->__invoke($valueHolder59fa7, $this, 'getExpressionBuilder', array(), $this->initializer3d0fc) || 1) && $this->valueHolder59fa7 = $valueHolder59fa7;

        return $this->valueHolder59fa7->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer3d0fc && ($this->initializer3d0fc->__invoke($valueHolder59fa7, $this, 'beginTransaction', array(), $this->initializer3d0fc) || 1) && $this->valueHolder59fa7 = $valueHolder59fa7;

        return $this->valueHolder59fa7->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer3d0fc && ($this->initializer3d0fc->__invoke($valueHolder59fa7, $this, 'getCache', array(), $this->initializer3d0fc) || 1) && $this->valueHolder59fa7 = $valueHolder59fa7;

        return $this->valueHolder59fa7->getCache();
    }

    public function transactional($func)
    {
        $this->initializer3d0fc && ($this->initializer3d0fc->__invoke($valueHolder59fa7, $this, 'transactional', array('func' => $func), $this->initializer3d0fc) || 1) && $this->valueHolder59fa7 = $valueHolder59fa7;

        return $this->valueHolder59fa7->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer3d0fc && ($this->initializer3d0fc->__invoke($valueHolder59fa7, $this, 'wrapInTransaction', array('func' => $func), $this->initializer3d0fc) || 1) && $this->valueHolder59fa7 = $valueHolder59fa7;

        return $this->valueHolder59fa7->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer3d0fc && ($this->initializer3d0fc->__invoke($valueHolder59fa7, $this, 'commit', array(), $this->initializer3d0fc) || 1) && $this->valueHolder59fa7 = $valueHolder59fa7;

        return $this->valueHolder59fa7->commit();
    }

    public function rollback()
    {
        $this->initializer3d0fc && ($this->initializer3d0fc->__invoke($valueHolder59fa7, $this, 'rollback', array(), $this->initializer3d0fc) || 1) && $this->valueHolder59fa7 = $valueHolder59fa7;

        return $this->valueHolder59fa7->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer3d0fc && ($this->initializer3d0fc->__invoke($valueHolder59fa7, $this, 'getClassMetadata', array('className' => $className), $this->initializer3d0fc) || 1) && $this->valueHolder59fa7 = $valueHolder59fa7;

        return $this->valueHolder59fa7->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer3d0fc && ($this->initializer3d0fc->__invoke($valueHolder59fa7, $this, 'createQuery', array('dql' => $dql), $this->initializer3d0fc) || 1) && $this->valueHolder59fa7 = $valueHolder59fa7;

        return $this->valueHolder59fa7->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer3d0fc && ($this->initializer3d0fc->__invoke($valueHolder59fa7, $this, 'createNamedQuery', array('name' => $name), $this->initializer3d0fc) || 1) && $this->valueHolder59fa7 = $valueHolder59fa7;

        return $this->valueHolder59fa7->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer3d0fc && ($this->initializer3d0fc->__invoke($valueHolder59fa7, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer3d0fc) || 1) && $this->valueHolder59fa7 = $valueHolder59fa7;

        return $this->valueHolder59fa7->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer3d0fc && ($this->initializer3d0fc->__invoke($valueHolder59fa7, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer3d0fc) || 1) && $this->valueHolder59fa7 = $valueHolder59fa7;

        return $this->valueHolder59fa7->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer3d0fc && ($this->initializer3d0fc->__invoke($valueHolder59fa7, $this, 'createQueryBuilder', array(), $this->initializer3d0fc) || 1) && $this->valueHolder59fa7 = $valueHolder59fa7;

        return $this->valueHolder59fa7->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer3d0fc && ($this->initializer3d0fc->__invoke($valueHolder59fa7, $this, 'flush', array('entity' => $entity), $this->initializer3d0fc) || 1) && $this->valueHolder59fa7 = $valueHolder59fa7;

        return $this->valueHolder59fa7->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer3d0fc && ($this->initializer3d0fc->__invoke($valueHolder59fa7, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3d0fc) || 1) && $this->valueHolder59fa7 = $valueHolder59fa7;

        return $this->valueHolder59fa7->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer3d0fc && ($this->initializer3d0fc->__invoke($valueHolder59fa7, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer3d0fc) || 1) && $this->valueHolder59fa7 = $valueHolder59fa7;

        return $this->valueHolder59fa7->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer3d0fc && ($this->initializer3d0fc->__invoke($valueHolder59fa7, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer3d0fc) || 1) && $this->valueHolder59fa7 = $valueHolder59fa7;

        return $this->valueHolder59fa7->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer3d0fc && ($this->initializer3d0fc->__invoke($valueHolder59fa7, $this, 'clear', array('entityName' => $entityName), $this->initializer3d0fc) || 1) && $this->valueHolder59fa7 = $valueHolder59fa7;

        return $this->valueHolder59fa7->clear($entityName);
    }

    public function close()
    {
        $this->initializer3d0fc && ($this->initializer3d0fc->__invoke($valueHolder59fa7, $this, 'close', array(), $this->initializer3d0fc) || 1) && $this->valueHolder59fa7 = $valueHolder59fa7;

        return $this->valueHolder59fa7->close();
    }

    public function persist($entity)
    {
        $this->initializer3d0fc && ($this->initializer3d0fc->__invoke($valueHolder59fa7, $this, 'persist', array('entity' => $entity), $this->initializer3d0fc) || 1) && $this->valueHolder59fa7 = $valueHolder59fa7;

        return $this->valueHolder59fa7->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer3d0fc && ($this->initializer3d0fc->__invoke($valueHolder59fa7, $this, 'remove', array('entity' => $entity), $this->initializer3d0fc) || 1) && $this->valueHolder59fa7 = $valueHolder59fa7;

        return $this->valueHolder59fa7->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer3d0fc && ($this->initializer3d0fc->__invoke($valueHolder59fa7, $this, 'refresh', array('entity' => $entity), $this->initializer3d0fc) || 1) && $this->valueHolder59fa7 = $valueHolder59fa7;

        return $this->valueHolder59fa7->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer3d0fc && ($this->initializer3d0fc->__invoke($valueHolder59fa7, $this, 'detach', array('entity' => $entity), $this->initializer3d0fc) || 1) && $this->valueHolder59fa7 = $valueHolder59fa7;

        return $this->valueHolder59fa7->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer3d0fc && ($this->initializer3d0fc->__invoke($valueHolder59fa7, $this, 'merge', array('entity' => $entity), $this->initializer3d0fc) || 1) && $this->valueHolder59fa7 = $valueHolder59fa7;

        return $this->valueHolder59fa7->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer3d0fc && ($this->initializer3d0fc->__invoke($valueHolder59fa7, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer3d0fc) || 1) && $this->valueHolder59fa7 = $valueHolder59fa7;

        return $this->valueHolder59fa7->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer3d0fc && ($this->initializer3d0fc->__invoke($valueHolder59fa7, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3d0fc) || 1) && $this->valueHolder59fa7 = $valueHolder59fa7;

        return $this->valueHolder59fa7->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer3d0fc && ($this->initializer3d0fc->__invoke($valueHolder59fa7, $this, 'getRepository', array('entityName' => $entityName), $this->initializer3d0fc) || 1) && $this->valueHolder59fa7 = $valueHolder59fa7;

        return $this->valueHolder59fa7->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer3d0fc && ($this->initializer3d0fc->__invoke($valueHolder59fa7, $this, 'contains', array('entity' => $entity), $this->initializer3d0fc) || 1) && $this->valueHolder59fa7 = $valueHolder59fa7;

        return $this->valueHolder59fa7->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer3d0fc && ($this->initializer3d0fc->__invoke($valueHolder59fa7, $this, 'getEventManager', array(), $this->initializer3d0fc) || 1) && $this->valueHolder59fa7 = $valueHolder59fa7;

        return $this->valueHolder59fa7->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer3d0fc && ($this->initializer3d0fc->__invoke($valueHolder59fa7, $this, 'getConfiguration', array(), $this->initializer3d0fc) || 1) && $this->valueHolder59fa7 = $valueHolder59fa7;

        return $this->valueHolder59fa7->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer3d0fc && ($this->initializer3d0fc->__invoke($valueHolder59fa7, $this, 'isOpen', array(), $this->initializer3d0fc) || 1) && $this->valueHolder59fa7 = $valueHolder59fa7;

        return $this->valueHolder59fa7->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer3d0fc && ($this->initializer3d0fc->__invoke($valueHolder59fa7, $this, 'getUnitOfWork', array(), $this->initializer3d0fc) || 1) && $this->valueHolder59fa7 = $valueHolder59fa7;

        return $this->valueHolder59fa7->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer3d0fc && ($this->initializer3d0fc->__invoke($valueHolder59fa7, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3d0fc) || 1) && $this->valueHolder59fa7 = $valueHolder59fa7;

        return $this->valueHolder59fa7->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer3d0fc && ($this->initializer3d0fc->__invoke($valueHolder59fa7, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3d0fc) || 1) && $this->valueHolder59fa7 = $valueHolder59fa7;

        return $this->valueHolder59fa7->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer3d0fc && ($this->initializer3d0fc->__invoke($valueHolder59fa7, $this, 'getProxyFactory', array(), $this->initializer3d0fc) || 1) && $this->valueHolder59fa7 = $valueHolder59fa7;

        return $this->valueHolder59fa7->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer3d0fc && ($this->initializer3d0fc->__invoke($valueHolder59fa7, $this, 'initializeObject', array('obj' => $obj), $this->initializer3d0fc) || 1) && $this->valueHolder59fa7 = $valueHolder59fa7;

        return $this->valueHolder59fa7->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer3d0fc && ($this->initializer3d0fc->__invoke($valueHolder59fa7, $this, 'getFilters', array(), $this->initializer3d0fc) || 1) && $this->valueHolder59fa7 = $valueHolder59fa7;

        return $this->valueHolder59fa7->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer3d0fc && ($this->initializer3d0fc->__invoke($valueHolder59fa7, $this, 'isFiltersStateClean', array(), $this->initializer3d0fc) || 1) && $this->valueHolder59fa7 = $valueHolder59fa7;

        return $this->valueHolder59fa7->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer3d0fc && ($this->initializer3d0fc->__invoke($valueHolder59fa7, $this, 'hasFilters', array(), $this->initializer3d0fc) || 1) && $this->valueHolder59fa7 = $valueHolder59fa7;

        return $this->valueHolder59fa7->hasFilters();
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

        $instance->initializer3d0fc = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder59fa7) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder59fa7 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder59fa7->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer3d0fc && ($this->initializer3d0fc->__invoke($valueHolder59fa7, $this, '__get', ['name' => $name], $this->initializer3d0fc) || 1) && $this->valueHolder59fa7 = $valueHolder59fa7;

        if (isset(self::$publicProperties98173[$name])) {
            return $this->valueHolder59fa7->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder59fa7;

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

        $targetObject = $this->valueHolder59fa7;
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
        $this->initializer3d0fc && ($this->initializer3d0fc->__invoke($valueHolder59fa7, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer3d0fc) || 1) && $this->valueHolder59fa7 = $valueHolder59fa7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder59fa7;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder59fa7;
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
        $this->initializer3d0fc && ($this->initializer3d0fc->__invoke($valueHolder59fa7, $this, '__isset', array('name' => $name), $this->initializer3d0fc) || 1) && $this->valueHolder59fa7 = $valueHolder59fa7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder59fa7;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder59fa7;
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
        $this->initializer3d0fc && ($this->initializer3d0fc->__invoke($valueHolder59fa7, $this, '__unset', array('name' => $name), $this->initializer3d0fc) || 1) && $this->valueHolder59fa7 = $valueHolder59fa7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder59fa7;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder59fa7;
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
        $this->initializer3d0fc && ($this->initializer3d0fc->__invoke($valueHolder59fa7, $this, '__clone', array(), $this->initializer3d0fc) || 1) && $this->valueHolder59fa7 = $valueHolder59fa7;

        $this->valueHolder59fa7 = clone $this->valueHolder59fa7;
    }

    public function __sleep()
    {
        $this->initializer3d0fc && ($this->initializer3d0fc->__invoke($valueHolder59fa7, $this, '__sleep', array(), $this->initializer3d0fc) || 1) && $this->valueHolder59fa7 = $valueHolder59fa7;

        return array('valueHolder59fa7');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer3d0fc = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer3d0fc;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer3d0fc && ($this->initializer3d0fc->__invoke($valueHolder59fa7, $this, 'initializeProxy', array(), $this->initializer3d0fc) || 1) && $this->valueHolder59fa7 = $valueHolder59fa7;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder59fa7;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder59fa7;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
