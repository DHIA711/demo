<?php

namespace ContainerOTE2n5W;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder1a5c8 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerbfb6b = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties906db = [
        
    ];

    public function getConnection()
    {
        $this->initializerbfb6b && ($this->initializerbfb6b->__invoke($valueHolder1a5c8, $this, 'getConnection', array(), $this->initializerbfb6b) || 1) && $this->valueHolder1a5c8 = $valueHolder1a5c8;

        return $this->valueHolder1a5c8->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerbfb6b && ($this->initializerbfb6b->__invoke($valueHolder1a5c8, $this, 'getMetadataFactory', array(), $this->initializerbfb6b) || 1) && $this->valueHolder1a5c8 = $valueHolder1a5c8;

        return $this->valueHolder1a5c8->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerbfb6b && ($this->initializerbfb6b->__invoke($valueHolder1a5c8, $this, 'getExpressionBuilder', array(), $this->initializerbfb6b) || 1) && $this->valueHolder1a5c8 = $valueHolder1a5c8;

        return $this->valueHolder1a5c8->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerbfb6b && ($this->initializerbfb6b->__invoke($valueHolder1a5c8, $this, 'beginTransaction', array(), $this->initializerbfb6b) || 1) && $this->valueHolder1a5c8 = $valueHolder1a5c8;

        return $this->valueHolder1a5c8->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerbfb6b && ($this->initializerbfb6b->__invoke($valueHolder1a5c8, $this, 'getCache', array(), $this->initializerbfb6b) || 1) && $this->valueHolder1a5c8 = $valueHolder1a5c8;

        return $this->valueHolder1a5c8->getCache();
    }

    public function transactional($func)
    {
        $this->initializerbfb6b && ($this->initializerbfb6b->__invoke($valueHolder1a5c8, $this, 'transactional', array('func' => $func), $this->initializerbfb6b) || 1) && $this->valueHolder1a5c8 = $valueHolder1a5c8;

        return $this->valueHolder1a5c8->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerbfb6b && ($this->initializerbfb6b->__invoke($valueHolder1a5c8, $this, 'wrapInTransaction', array('func' => $func), $this->initializerbfb6b) || 1) && $this->valueHolder1a5c8 = $valueHolder1a5c8;

        return $this->valueHolder1a5c8->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerbfb6b && ($this->initializerbfb6b->__invoke($valueHolder1a5c8, $this, 'commit', array(), $this->initializerbfb6b) || 1) && $this->valueHolder1a5c8 = $valueHolder1a5c8;

        return $this->valueHolder1a5c8->commit();
    }

    public function rollback()
    {
        $this->initializerbfb6b && ($this->initializerbfb6b->__invoke($valueHolder1a5c8, $this, 'rollback', array(), $this->initializerbfb6b) || 1) && $this->valueHolder1a5c8 = $valueHolder1a5c8;

        return $this->valueHolder1a5c8->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerbfb6b && ($this->initializerbfb6b->__invoke($valueHolder1a5c8, $this, 'getClassMetadata', array('className' => $className), $this->initializerbfb6b) || 1) && $this->valueHolder1a5c8 = $valueHolder1a5c8;

        return $this->valueHolder1a5c8->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerbfb6b && ($this->initializerbfb6b->__invoke($valueHolder1a5c8, $this, 'createQuery', array('dql' => $dql), $this->initializerbfb6b) || 1) && $this->valueHolder1a5c8 = $valueHolder1a5c8;

        return $this->valueHolder1a5c8->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerbfb6b && ($this->initializerbfb6b->__invoke($valueHolder1a5c8, $this, 'createNamedQuery', array('name' => $name), $this->initializerbfb6b) || 1) && $this->valueHolder1a5c8 = $valueHolder1a5c8;

        return $this->valueHolder1a5c8->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerbfb6b && ($this->initializerbfb6b->__invoke($valueHolder1a5c8, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerbfb6b) || 1) && $this->valueHolder1a5c8 = $valueHolder1a5c8;

        return $this->valueHolder1a5c8->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerbfb6b && ($this->initializerbfb6b->__invoke($valueHolder1a5c8, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerbfb6b) || 1) && $this->valueHolder1a5c8 = $valueHolder1a5c8;

        return $this->valueHolder1a5c8->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerbfb6b && ($this->initializerbfb6b->__invoke($valueHolder1a5c8, $this, 'createQueryBuilder', array(), $this->initializerbfb6b) || 1) && $this->valueHolder1a5c8 = $valueHolder1a5c8;

        return $this->valueHolder1a5c8->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerbfb6b && ($this->initializerbfb6b->__invoke($valueHolder1a5c8, $this, 'flush', array('entity' => $entity), $this->initializerbfb6b) || 1) && $this->valueHolder1a5c8 = $valueHolder1a5c8;

        return $this->valueHolder1a5c8->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerbfb6b && ($this->initializerbfb6b->__invoke($valueHolder1a5c8, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbfb6b) || 1) && $this->valueHolder1a5c8 = $valueHolder1a5c8;

        return $this->valueHolder1a5c8->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerbfb6b && ($this->initializerbfb6b->__invoke($valueHolder1a5c8, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerbfb6b) || 1) && $this->valueHolder1a5c8 = $valueHolder1a5c8;

        return $this->valueHolder1a5c8->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerbfb6b && ($this->initializerbfb6b->__invoke($valueHolder1a5c8, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerbfb6b) || 1) && $this->valueHolder1a5c8 = $valueHolder1a5c8;

        return $this->valueHolder1a5c8->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerbfb6b && ($this->initializerbfb6b->__invoke($valueHolder1a5c8, $this, 'clear', array('entityName' => $entityName), $this->initializerbfb6b) || 1) && $this->valueHolder1a5c8 = $valueHolder1a5c8;

        return $this->valueHolder1a5c8->clear($entityName);
    }

    public function close()
    {
        $this->initializerbfb6b && ($this->initializerbfb6b->__invoke($valueHolder1a5c8, $this, 'close', array(), $this->initializerbfb6b) || 1) && $this->valueHolder1a5c8 = $valueHolder1a5c8;

        return $this->valueHolder1a5c8->close();
    }

    public function persist($entity)
    {
        $this->initializerbfb6b && ($this->initializerbfb6b->__invoke($valueHolder1a5c8, $this, 'persist', array('entity' => $entity), $this->initializerbfb6b) || 1) && $this->valueHolder1a5c8 = $valueHolder1a5c8;

        return $this->valueHolder1a5c8->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerbfb6b && ($this->initializerbfb6b->__invoke($valueHolder1a5c8, $this, 'remove', array('entity' => $entity), $this->initializerbfb6b) || 1) && $this->valueHolder1a5c8 = $valueHolder1a5c8;

        return $this->valueHolder1a5c8->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerbfb6b && ($this->initializerbfb6b->__invoke($valueHolder1a5c8, $this, 'refresh', array('entity' => $entity), $this->initializerbfb6b) || 1) && $this->valueHolder1a5c8 = $valueHolder1a5c8;

        return $this->valueHolder1a5c8->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerbfb6b && ($this->initializerbfb6b->__invoke($valueHolder1a5c8, $this, 'detach', array('entity' => $entity), $this->initializerbfb6b) || 1) && $this->valueHolder1a5c8 = $valueHolder1a5c8;

        return $this->valueHolder1a5c8->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerbfb6b && ($this->initializerbfb6b->__invoke($valueHolder1a5c8, $this, 'merge', array('entity' => $entity), $this->initializerbfb6b) || 1) && $this->valueHolder1a5c8 = $valueHolder1a5c8;

        return $this->valueHolder1a5c8->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerbfb6b && ($this->initializerbfb6b->__invoke($valueHolder1a5c8, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerbfb6b) || 1) && $this->valueHolder1a5c8 = $valueHolder1a5c8;

        return $this->valueHolder1a5c8->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerbfb6b && ($this->initializerbfb6b->__invoke($valueHolder1a5c8, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbfb6b) || 1) && $this->valueHolder1a5c8 = $valueHolder1a5c8;

        return $this->valueHolder1a5c8->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerbfb6b && ($this->initializerbfb6b->__invoke($valueHolder1a5c8, $this, 'getRepository', array('entityName' => $entityName), $this->initializerbfb6b) || 1) && $this->valueHolder1a5c8 = $valueHolder1a5c8;

        return $this->valueHolder1a5c8->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerbfb6b && ($this->initializerbfb6b->__invoke($valueHolder1a5c8, $this, 'contains', array('entity' => $entity), $this->initializerbfb6b) || 1) && $this->valueHolder1a5c8 = $valueHolder1a5c8;

        return $this->valueHolder1a5c8->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerbfb6b && ($this->initializerbfb6b->__invoke($valueHolder1a5c8, $this, 'getEventManager', array(), $this->initializerbfb6b) || 1) && $this->valueHolder1a5c8 = $valueHolder1a5c8;

        return $this->valueHolder1a5c8->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerbfb6b && ($this->initializerbfb6b->__invoke($valueHolder1a5c8, $this, 'getConfiguration', array(), $this->initializerbfb6b) || 1) && $this->valueHolder1a5c8 = $valueHolder1a5c8;

        return $this->valueHolder1a5c8->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerbfb6b && ($this->initializerbfb6b->__invoke($valueHolder1a5c8, $this, 'isOpen', array(), $this->initializerbfb6b) || 1) && $this->valueHolder1a5c8 = $valueHolder1a5c8;

        return $this->valueHolder1a5c8->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerbfb6b && ($this->initializerbfb6b->__invoke($valueHolder1a5c8, $this, 'getUnitOfWork', array(), $this->initializerbfb6b) || 1) && $this->valueHolder1a5c8 = $valueHolder1a5c8;

        return $this->valueHolder1a5c8->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerbfb6b && ($this->initializerbfb6b->__invoke($valueHolder1a5c8, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbfb6b) || 1) && $this->valueHolder1a5c8 = $valueHolder1a5c8;

        return $this->valueHolder1a5c8->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerbfb6b && ($this->initializerbfb6b->__invoke($valueHolder1a5c8, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbfb6b) || 1) && $this->valueHolder1a5c8 = $valueHolder1a5c8;

        return $this->valueHolder1a5c8->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerbfb6b && ($this->initializerbfb6b->__invoke($valueHolder1a5c8, $this, 'getProxyFactory', array(), $this->initializerbfb6b) || 1) && $this->valueHolder1a5c8 = $valueHolder1a5c8;

        return $this->valueHolder1a5c8->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerbfb6b && ($this->initializerbfb6b->__invoke($valueHolder1a5c8, $this, 'initializeObject', array('obj' => $obj), $this->initializerbfb6b) || 1) && $this->valueHolder1a5c8 = $valueHolder1a5c8;

        return $this->valueHolder1a5c8->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerbfb6b && ($this->initializerbfb6b->__invoke($valueHolder1a5c8, $this, 'getFilters', array(), $this->initializerbfb6b) || 1) && $this->valueHolder1a5c8 = $valueHolder1a5c8;

        return $this->valueHolder1a5c8->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerbfb6b && ($this->initializerbfb6b->__invoke($valueHolder1a5c8, $this, 'isFiltersStateClean', array(), $this->initializerbfb6b) || 1) && $this->valueHolder1a5c8 = $valueHolder1a5c8;

        return $this->valueHolder1a5c8->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerbfb6b && ($this->initializerbfb6b->__invoke($valueHolder1a5c8, $this, 'hasFilters', array(), $this->initializerbfb6b) || 1) && $this->valueHolder1a5c8 = $valueHolder1a5c8;

        return $this->valueHolder1a5c8->hasFilters();
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

        $instance->initializerbfb6b = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder1a5c8) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder1a5c8 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder1a5c8->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializerbfb6b && ($this->initializerbfb6b->__invoke($valueHolder1a5c8, $this, '__get', ['name' => $name], $this->initializerbfb6b) || 1) && $this->valueHolder1a5c8 = $valueHolder1a5c8;

        if (isset(self::$publicProperties906db[$name])) {
            return $this->valueHolder1a5c8->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1a5c8;

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

        $targetObject = $this->valueHolder1a5c8;
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
        $this->initializerbfb6b && ($this->initializerbfb6b->__invoke($valueHolder1a5c8, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerbfb6b) || 1) && $this->valueHolder1a5c8 = $valueHolder1a5c8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1a5c8;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder1a5c8;
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
        $this->initializerbfb6b && ($this->initializerbfb6b->__invoke($valueHolder1a5c8, $this, '__isset', array('name' => $name), $this->initializerbfb6b) || 1) && $this->valueHolder1a5c8 = $valueHolder1a5c8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1a5c8;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder1a5c8;
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
        $this->initializerbfb6b && ($this->initializerbfb6b->__invoke($valueHolder1a5c8, $this, '__unset', array('name' => $name), $this->initializerbfb6b) || 1) && $this->valueHolder1a5c8 = $valueHolder1a5c8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1a5c8;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder1a5c8;
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
        $this->initializerbfb6b && ($this->initializerbfb6b->__invoke($valueHolder1a5c8, $this, '__clone', array(), $this->initializerbfb6b) || 1) && $this->valueHolder1a5c8 = $valueHolder1a5c8;

        $this->valueHolder1a5c8 = clone $this->valueHolder1a5c8;
    }

    public function __sleep()
    {
        $this->initializerbfb6b && ($this->initializerbfb6b->__invoke($valueHolder1a5c8, $this, '__sleep', array(), $this->initializerbfb6b) || 1) && $this->valueHolder1a5c8 = $valueHolder1a5c8;

        return array('valueHolder1a5c8');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerbfb6b = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerbfb6b;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerbfb6b && ($this->initializerbfb6b->__invoke($valueHolder1a5c8, $this, 'initializeProxy', array(), $this->initializerbfb6b) || 1) && $this->valueHolder1a5c8 = $valueHolder1a5c8;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder1a5c8;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder1a5c8;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
