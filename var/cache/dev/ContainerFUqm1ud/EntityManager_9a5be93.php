<?php

namespace ContainerFUqm1ud;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder89fbb = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer0b939 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties3b94f = [
        
    ];

    public function getConnection()
    {
        $this->initializer0b939 && ($this->initializer0b939->__invoke($valueHolder89fbb, $this, 'getConnection', array(), $this->initializer0b939) || 1) && $this->valueHolder89fbb = $valueHolder89fbb;

        return $this->valueHolder89fbb->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer0b939 && ($this->initializer0b939->__invoke($valueHolder89fbb, $this, 'getMetadataFactory', array(), $this->initializer0b939) || 1) && $this->valueHolder89fbb = $valueHolder89fbb;

        return $this->valueHolder89fbb->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer0b939 && ($this->initializer0b939->__invoke($valueHolder89fbb, $this, 'getExpressionBuilder', array(), $this->initializer0b939) || 1) && $this->valueHolder89fbb = $valueHolder89fbb;

        return $this->valueHolder89fbb->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer0b939 && ($this->initializer0b939->__invoke($valueHolder89fbb, $this, 'beginTransaction', array(), $this->initializer0b939) || 1) && $this->valueHolder89fbb = $valueHolder89fbb;

        return $this->valueHolder89fbb->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer0b939 && ($this->initializer0b939->__invoke($valueHolder89fbb, $this, 'getCache', array(), $this->initializer0b939) || 1) && $this->valueHolder89fbb = $valueHolder89fbb;

        return $this->valueHolder89fbb->getCache();
    }

    public function transactional($func)
    {
        $this->initializer0b939 && ($this->initializer0b939->__invoke($valueHolder89fbb, $this, 'transactional', array('func' => $func), $this->initializer0b939) || 1) && $this->valueHolder89fbb = $valueHolder89fbb;

        return $this->valueHolder89fbb->transactional($func);
    }

    public function commit()
    {
        $this->initializer0b939 && ($this->initializer0b939->__invoke($valueHolder89fbb, $this, 'commit', array(), $this->initializer0b939) || 1) && $this->valueHolder89fbb = $valueHolder89fbb;

        return $this->valueHolder89fbb->commit();
    }

    public function rollback()
    {
        $this->initializer0b939 && ($this->initializer0b939->__invoke($valueHolder89fbb, $this, 'rollback', array(), $this->initializer0b939) || 1) && $this->valueHolder89fbb = $valueHolder89fbb;

        return $this->valueHolder89fbb->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer0b939 && ($this->initializer0b939->__invoke($valueHolder89fbb, $this, 'getClassMetadata', array('className' => $className), $this->initializer0b939) || 1) && $this->valueHolder89fbb = $valueHolder89fbb;

        return $this->valueHolder89fbb->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer0b939 && ($this->initializer0b939->__invoke($valueHolder89fbb, $this, 'createQuery', array('dql' => $dql), $this->initializer0b939) || 1) && $this->valueHolder89fbb = $valueHolder89fbb;

        return $this->valueHolder89fbb->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer0b939 && ($this->initializer0b939->__invoke($valueHolder89fbb, $this, 'createNamedQuery', array('name' => $name), $this->initializer0b939) || 1) && $this->valueHolder89fbb = $valueHolder89fbb;

        return $this->valueHolder89fbb->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer0b939 && ($this->initializer0b939->__invoke($valueHolder89fbb, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer0b939) || 1) && $this->valueHolder89fbb = $valueHolder89fbb;

        return $this->valueHolder89fbb->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer0b939 && ($this->initializer0b939->__invoke($valueHolder89fbb, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer0b939) || 1) && $this->valueHolder89fbb = $valueHolder89fbb;

        return $this->valueHolder89fbb->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer0b939 && ($this->initializer0b939->__invoke($valueHolder89fbb, $this, 'createQueryBuilder', array(), $this->initializer0b939) || 1) && $this->valueHolder89fbb = $valueHolder89fbb;

        return $this->valueHolder89fbb->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer0b939 && ($this->initializer0b939->__invoke($valueHolder89fbb, $this, 'flush', array('entity' => $entity), $this->initializer0b939) || 1) && $this->valueHolder89fbb = $valueHolder89fbb;

        return $this->valueHolder89fbb->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer0b939 && ($this->initializer0b939->__invoke($valueHolder89fbb, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0b939) || 1) && $this->valueHolder89fbb = $valueHolder89fbb;

        return $this->valueHolder89fbb->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer0b939 && ($this->initializer0b939->__invoke($valueHolder89fbb, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer0b939) || 1) && $this->valueHolder89fbb = $valueHolder89fbb;

        return $this->valueHolder89fbb->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer0b939 && ($this->initializer0b939->__invoke($valueHolder89fbb, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer0b939) || 1) && $this->valueHolder89fbb = $valueHolder89fbb;

        return $this->valueHolder89fbb->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer0b939 && ($this->initializer0b939->__invoke($valueHolder89fbb, $this, 'clear', array('entityName' => $entityName), $this->initializer0b939) || 1) && $this->valueHolder89fbb = $valueHolder89fbb;

        return $this->valueHolder89fbb->clear($entityName);
    }

    public function close()
    {
        $this->initializer0b939 && ($this->initializer0b939->__invoke($valueHolder89fbb, $this, 'close', array(), $this->initializer0b939) || 1) && $this->valueHolder89fbb = $valueHolder89fbb;

        return $this->valueHolder89fbb->close();
    }

    public function persist($entity)
    {
        $this->initializer0b939 && ($this->initializer0b939->__invoke($valueHolder89fbb, $this, 'persist', array('entity' => $entity), $this->initializer0b939) || 1) && $this->valueHolder89fbb = $valueHolder89fbb;

        return $this->valueHolder89fbb->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer0b939 && ($this->initializer0b939->__invoke($valueHolder89fbb, $this, 'remove', array('entity' => $entity), $this->initializer0b939) || 1) && $this->valueHolder89fbb = $valueHolder89fbb;

        return $this->valueHolder89fbb->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer0b939 && ($this->initializer0b939->__invoke($valueHolder89fbb, $this, 'refresh', array('entity' => $entity), $this->initializer0b939) || 1) && $this->valueHolder89fbb = $valueHolder89fbb;

        return $this->valueHolder89fbb->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer0b939 && ($this->initializer0b939->__invoke($valueHolder89fbb, $this, 'detach', array('entity' => $entity), $this->initializer0b939) || 1) && $this->valueHolder89fbb = $valueHolder89fbb;

        return $this->valueHolder89fbb->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer0b939 && ($this->initializer0b939->__invoke($valueHolder89fbb, $this, 'merge', array('entity' => $entity), $this->initializer0b939) || 1) && $this->valueHolder89fbb = $valueHolder89fbb;

        return $this->valueHolder89fbb->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer0b939 && ($this->initializer0b939->__invoke($valueHolder89fbb, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer0b939) || 1) && $this->valueHolder89fbb = $valueHolder89fbb;

        return $this->valueHolder89fbb->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer0b939 && ($this->initializer0b939->__invoke($valueHolder89fbb, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0b939) || 1) && $this->valueHolder89fbb = $valueHolder89fbb;

        return $this->valueHolder89fbb->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer0b939 && ($this->initializer0b939->__invoke($valueHolder89fbb, $this, 'getRepository', array('entityName' => $entityName), $this->initializer0b939) || 1) && $this->valueHolder89fbb = $valueHolder89fbb;

        return $this->valueHolder89fbb->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer0b939 && ($this->initializer0b939->__invoke($valueHolder89fbb, $this, 'contains', array('entity' => $entity), $this->initializer0b939) || 1) && $this->valueHolder89fbb = $valueHolder89fbb;

        return $this->valueHolder89fbb->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer0b939 && ($this->initializer0b939->__invoke($valueHolder89fbb, $this, 'getEventManager', array(), $this->initializer0b939) || 1) && $this->valueHolder89fbb = $valueHolder89fbb;

        return $this->valueHolder89fbb->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer0b939 && ($this->initializer0b939->__invoke($valueHolder89fbb, $this, 'getConfiguration', array(), $this->initializer0b939) || 1) && $this->valueHolder89fbb = $valueHolder89fbb;

        return $this->valueHolder89fbb->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer0b939 && ($this->initializer0b939->__invoke($valueHolder89fbb, $this, 'isOpen', array(), $this->initializer0b939) || 1) && $this->valueHolder89fbb = $valueHolder89fbb;

        return $this->valueHolder89fbb->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer0b939 && ($this->initializer0b939->__invoke($valueHolder89fbb, $this, 'getUnitOfWork', array(), $this->initializer0b939) || 1) && $this->valueHolder89fbb = $valueHolder89fbb;

        return $this->valueHolder89fbb->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer0b939 && ($this->initializer0b939->__invoke($valueHolder89fbb, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0b939) || 1) && $this->valueHolder89fbb = $valueHolder89fbb;

        return $this->valueHolder89fbb->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer0b939 && ($this->initializer0b939->__invoke($valueHolder89fbb, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0b939) || 1) && $this->valueHolder89fbb = $valueHolder89fbb;

        return $this->valueHolder89fbb->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer0b939 && ($this->initializer0b939->__invoke($valueHolder89fbb, $this, 'getProxyFactory', array(), $this->initializer0b939) || 1) && $this->valueHolder89fbb = $valueHolder89fbb;

        return $this->valueHolder89fbb->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer0b939 && ($this->initializer0b939->__invoke($valueHolder89fbb, $this, 'initializeObject', array('obj' => $obj), $this->initializer0b939) || 1) && $this->valueHolder89fbb = $valueHolder89fbb;

        return $this->valueHolder89fbb->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer0b939 && ($this->initializer0b939->__invoke($valueHolder89fbb, $this, 'getFilters', array(), $this->initializer0b939) || 1) && $this->valueHolder89fbb = $valueHolder89fbb;

        return $this->valueHolder89fbb->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer0b939 && ($this->initializer0b939->__invoke($valueHolder89fbb, $this, 'isFiltersStateClean', array(), $this->initializer0b939) || 1) && $this->valueHolder89fbb = $valueHolder89fbb;

        return $this->valueHolder89fbb->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer0b939 && ($this->initializer0b939->__invoke($valueHolder89fbb, $this, 'hasFilters', array(), $this->initializer0b939) || 1) && $this->valueHolder89fbb = $valueHolder89fbb;

        return $this->valueHolder89fbb->hasFilters();
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

        $instance->initializer0b939 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder89fbb) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder89fbb = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder89fbb->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer0b939 && ($this->initializer0b939->__invoke($valueHolder89fbb, $this, '__get', ['name' => $name], $this->initializer0b939) || 1) && $this->valueHolder89fbb = $valueHolder89fbb;

        if (isset(self::$publicProperties3b94f[$name])) {
            return $this->valueHolder89fbb->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder89fbb;

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

        $targetObject = $this->valueHolder89fbb;
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
        $this->initializer0b939 && ($this->initializer0b939->__invoke($valueHolder89fbb, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer0b939) || 1) && $this->valueHolder89fbb = $valueHolder89fbb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder89fbb;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder89fbb;
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
        $this->initializer0b939 && ($this->initializer0b939->__invoke($valueHolder89fbb, $this, '__isset', array('name' => $name), $this->initializer0b939) || 1) && $this->valueHolder89fbb = $valueHolder89fbb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder89fbb;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder89fbb;
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
        $this->initializer0b939 && ($this->initializer0b939->__invoke($valueHolder89fbb, $this, '__unset', array('name' => $name), $this->initializer0b939) || 1) && $this->valueHolder89fbb = $valueHolder89fbb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder89fbb;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder89fbb;
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
        $this->initializer0b939 && ($this->initializer0b939->__invoke($valueHolder89fbb, $this, '__clone', array(), $this->initializer0b939) || 1) && $this->valueHolder89fbb = $valueHolder89fbb;

        $this->valueHolder89fbb = clone $this->valueHolder89fbb;
    }

    public function __sleep()
    {
        $this->initializer0b939 && ($this->initializer0b939->__invoke($valueHolder89fbb, $this, '__sleep', array(), $this->initializer0b939) || 1) && $this->valueHolder89fbb = $valueHolder89fbb;

        return array('valueHolder89fbb');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer0b939 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer0b939;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer0b939 && ($this->initializer0b939->__invoke($valueHolder89fbb, $this, 'initializeProxy', array(), $this->initializer0b939) || 1) && $this->valueHolder89fbb = $valueHolder89fbb;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder89fbb;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder89fbb;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
