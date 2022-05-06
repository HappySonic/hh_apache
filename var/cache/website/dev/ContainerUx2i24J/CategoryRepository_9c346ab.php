<?php

namespace ContainerUx2i24J;
include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Persistence/Repository/RepositoryInterface.php';
include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/CategoryBundle/Entity/CategoryRepositoryInterface.php';
include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/CategoryBundle/Entity/CategoryRepository.php';

class CategoryRepository_9c346ab extends \Sulu\Bundle\CategoryBundle\Entity\CategoryRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Sulu\Bundle\CategoryBundle\Entity\CategoryRepository|null wrapped object, if the proxy is initialized
     */
    private $valueHolder4a50a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer853e4 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesa31b3 = [
        
    ];

    public function createNew()
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'createNew', array(), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->createNew();
    }

    public function isCategoryId($id)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'isCategoryId', array('id' => $id), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->isCategoryId($id);
    }

    public function isCategoryKey($key)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'isCategoryKey', array('key' => $key), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->isCategoryKey($key);
    }

    public function findCategoryById($id)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'findCategoryById', array('id' => $id), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->findCategoryById($id);
    }

    public function findCategoryByKey($key)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'findCategoryByKey', array('key' => $key), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->findCategoryByKey($key);
    }

    public function findCategoriesByIds(array $ids)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'findCategoriesByIds', array('ids' => $ids), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->findCategoriesByIds($ids);
    }

    public function findChildrenCategoriesByParentId($parentId = null)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'findChildrenCategoriesByParentId', array('parentId' => $parentId), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->findChildrenCategoriesByParentId($parentId);
    }

    public function findChildrenCategoriesByParentKey($parentKey = null)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'findChildrenCategoriesByParentKey', array('parentKey' => $parentKey), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->findChildrenCategoriesByParentKey($parentKey);
    }

    public function findCategoryIdsBetween($fromIds, $toIds)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'findCategoryIdsBetween', array('fromIds' => $fromIds, 'toIds' => $toIds), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->findCategoryIdsBetween($fromIds, $toIds);
    }

    public function findCategoryByIds(array $ids)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'findCategoryByIds', array('ids' => $ids), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->findCategoryByIds($ids);
    }

    public function findCategories($parent = null, $depth = null, $sortBy = null, $sortOrder = null)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'findCategories', array('parent' => $parent, 'depth' => $depth, 'sortBy' => $sortBy, 'sortOrder' => $sortOrder), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->findCategories($parent, $depth, $sortBy, $sortOrder);
    }

    public function findChildren($key, $sortBy = null, $sortOrder = null)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'findChildren', array('key' => $key, 'sortBy' => $sortBy, 'sortOrder' => $sortOrder), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->findChildren($key, $sortBy, $sortOrder);
    }

    public function findDescendantCategoryResources(int $ancestorId) : array
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'findDescendantCategoryResources', array('ancestorId' => $ancestorId), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->findDescendantCategoryResources($ancestorId);
    }

    public function __call($method, $args)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, '__call', array('method' => $method, 'args' => $args), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->__call($method, $args);
    }

    public function getRootNodesQueryBuilder($sortByField = null, $direction = 'asc')
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'getRootNodesQueryBuilder', array('sortByField' => $sortByField, 'direction' => $direction), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->getRootNodesQueryBuilder($sortByField, $direction);
    }

    public function getRootNodesQuery($sortByField = null, $direction = 'asc')
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'getRootNodesQuery', array('sortByField' => $sortByField, 'direction' => $direction), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->getRootNodesQuery($sortByField, $direction);
    }

    public function getRootNodes($sortByField = null, $direction = 'asc')
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'getRootNodes', array('sortByField' => $sortByField, 'direction' => $direction), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->getRootNodes($sortByField, $direction);
    }

    public function getPathQueryBuilder($node)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'getPathQueryBuilder', array('node' => $node), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->getPathQueryBuilder($node);
    }

    public function getPathQuery($node)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'getPathQuery', array('node' => $node), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->getPathQuery($node);
    }

    public function getPath($node)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'getPath', array('node' => $node), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->getPath($node);
    }

    public function childrenQueryBuilder($node = null, $direct = false, $sortByField = null, $direction = 'ASC', $includeNode = false)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'childrenQueryBuilder', array('node' => $node, 'direct' => $direct, 'sortByField' => $sortByField, 'direction' => $direction, 'includeNode' => $includeNode), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->childrenQueryBuilder($node, $direct, $sortByField, $direction, $includeNode);
    }

    public function childrenQuery($node = null, $direct = false, $sortByField = null, $direction = 'ASC', $includeNode = false)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'childrenQuery', array('node' => $node, 'direct' => $direct, 'sortByField' => $sortByField, 'direction' => $direction, 'includeNode' => $includeNode), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->childrenQuery($node, $direct, $sortByField, $direction, $includeNode);
    }

    public function children($node = null, $direct = false, $sortByField = null, $direction = 'ASC', $includeNode = false)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'children', array('node' => $node, 'direct' => $direct, 'sortByField' => $sortByField, 'direction' => $direction, 'includeNode' => $includeNode), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->children($node, $direct, $sortByField, $direction, $includeNode);
    }

    public function getChildrenQueryBuilder($node = null, $direct = false, $sortByField = null, $direction = 'ASC', $includeNode = false)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'getChildrenQueryBuilder', array('node' => $node, 'direct' => $direct, 'sortByField' => $sortByField, 'direction' => $direction, 'includeNode' => $includeNode), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->getChildrenQueryBuilder($node, $direct, $sortByField, $direction, $includeNode);
    }

    public function getChildrenQuery($node = null, $direct = false, $sortByField = null, $direction = 'ASC', $includeNode = false)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'getChildrenQuery', array('node' => $node, 'direct' => $direct, 'sortByField' => $sortByField, 'direction' => $direction, 'includeNode' => $includeNode), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->getChildrenQuery($node, $direct, $sortByField, $direction, $includeNode);
    }

    public function getChildren($node = null, $direct = false, $sortByField = null, $direction = 'ASC', $includeNode = false)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'getChildren', array('node' => $node, 'direct' => $direct, 'sortByField' => $sortByField, 'direction' => $direction, 'includeNode' => $includeNode), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->getChildren($node, $direct, $sortByField, $direction, $includeNode);
    }

    public function getLeafsQueryBuilder($root = null, $sortByField = null, $direction = 'ASC')
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'getLeafsQueryBuilder', array('root' => $root, 'sortByField' => $sortByField, 'direction' => $direction), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->getLeafsQueryBuilder($root, $sortByField, $direction);
    }

    public function getLeafsQuery($root = null, $sortByField = null, $direction = 'ASC')
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'getLeafsQuery', array('root' => $root, 'sortByField' => $sortByField, 'direction' => $direction), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->getLeafsQuery($root, $sortByField, $direction);
    }

    public function getLeafs($root = null, $sortByField = null, $direction = 'ASC')
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'getLeafs', array('root' => $root, 'sortByField' => $sortByField, 'direction' => $direction), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->getLeafs($root, $sortByField, $direction);
    }

    public function getNextSiblingsQueryBuilder($node, $includeSelf = false)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'getNextSiblingsQueryBuilder', array('node' => $node, 'includeSelf' => $includeSelf), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->getNextSiblingsQueryBuilder($node, $includeSelf);
    }

    public function getNextSiblingsQuery($node, $includeSelf = false)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'getNextSiblingsQuery', array('node' => $node, 'includeSelf' => $includeSelf), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->getNextSiblingsQuery($node, $includeSelf);
    }

    public function getNextSiblings($node, $includeSelf = false)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'getNextSiblings', array('node' => $node, 'includeSelf' => $includeSelf), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->getNextSiblings($node, $includeSelf);
    }

    public function getPrevSiblingsQueryBuilder($node, $includeSelf = false)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'getPrevSiblingsQueryBuilder', array('node' => $node, 'includeSelf' => $includeSelf), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->getPrevSiblingsQueryBuilder($node, $includeSelf);
    }

    public function getPrevSiblingsQuery($node, $includeSelf = false)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'getPrevSiblingsQuery', array('node' => $node, 'includeSelf' => $includeSelf), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->getPrevSiblingsQuery($node, $includeSelf);
    }

    public function getPrevSiblings($node, $includeSelf = false)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'getPrevSiblings', array('node' => $node, 'includeSelf' => $includeSelf), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->getPrevSiblings($node, $includeSelf);
    }

    public function moveDown($node, $number = 1)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'moveDown', array('node' => $node, 'number' => $number), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->moveDown($node, $number);
    }

    public function moveUp($node, $number = 1)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'moveUp', array('node' => $node, 'number' => $number), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->moveUp($node, $number);
    }

    public function removeFromTree($node)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'removeFromTree', array('node' => $node), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->removeFromTree($node);
    }

    public function reorder($node, $sortByField = null, $direction = 'ASC', $verify = true)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'reorder', array('node' => $node, 'sortByField' => $sortByField, 'direction' => $direction, 'verify' => $verify), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->reorder($node, $sortByField, $direction, $verify);
    }

    public function reorderAll($sortByField = null, $direction = 'ASC', $verify = true)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'reorderAll', array('sortByField' => $sortByField, 'direction' => $direction, 'verify' => $verify), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->reorderAll($sortByField, $direction, $verify);
    }

    public function verify()
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'verify', array(), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->verify();
    }

    public function recover()
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'recover', array(), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->recover();
    }

    public function getNodesHierarchyQueryBuilder($node = null, $direct = false, array $options = [], $includeNode = false)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'getNodesHierarchyQueryBuilder', array('node' => $node, 'direct' => $direct, 'options' => $options, 'includeNode' => $includeNode), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->getNodesHierarchyQueryBuilder($node, $direct, $options, $includeNode);
    }

    public function getNodesHierarchyQuery($node = null, $direct = false, array $options = [], $includeNode = false)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'getNodesHierarchyQuery', array('node' => $node, 'direct' => $direct, 'options' => $options, 'includeNode' => $includeNode), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->getNodesHierarchyQuery($node, $direct, $options, $includeNode);
    }

    public function getNodesHierarchy($node = null, $direct = false, array $options = [], $includeNode = false)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'getNodesHierarchy', array('node' => $node, 'direct' => $direct, 'options' => $options, 'includeNode' => $includeNode), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->getNodesHierarchy($node, $direct, $options, $includeNode);
    }

    public function setRepoUtils(\Gedmo\Tree\RepositoryUtilsInterface $repoUtils)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'setRepoUtils', array('repoUtils' => $repoUtils), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->setRepoUtils($repoUtils);
    }

    public function getRepoUtils()
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'getRepoUtils', array(), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->getRepoUtils();
    }

    public function childCount($node = null, $direct = false)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'childCount', array('node' => $node, 'direct' => $direct), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->childCount($node, $direct);
    }

    public function childrenHierarchy($node = null, $direct = false, array $options = [], $includeNode = false)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'childrenHierarchy', array('node' => $node, 'direct' => $direct, 'options' => $options, 'includeNode' => $includeNode), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->childrenHierarchy($node, $direct, $options, $includeNode);
    }

    public function buildTree(array $nodes, array $options = [])
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'buildTree', array('nodes' => $nodes, 'options' => $options), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->buildTree($nodes, $options);
    }

    public function buildTreeArray(array $nodes)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'buildTreeArray', array('nodes' => $nodes), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->buildTreeArray($nodes);
    }

    public function setChildrenIndex($childrenIndex)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'setChildrenIndex', array('childrenIndex' => $childrenIndex), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->setChildrenIndex($childrenIndex);
    }

    public function getChildrenIndex()
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'getChildrenIndex', array(), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->getChildrenIndex();
    }

    public function createQueryBuilder($alias, $indexBy = null)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'createQueryBuilder', array('alias' => $alias, 'indexBy' => $indexBy), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->createQueryBuilder($alias, $indexBy);
    }

    public function createResultSetMappingBuilder($alias)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'createResultSetMappingBuilder', array('alias' => $alias), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->createResultSetMappingBuilder($alias);
    }

    public function createNamedQuery($queryName)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'createNamedQuery', array('queryName' => $queryName), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->createNamedQuery($queryName);
    }

    public function createNativeNamedQuery($queryName)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'createNativeNamedQuery', array('queryName' => $queryName), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->createNativeNamedQuery($queryName);
    }

    public function clear()
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'clear', array(), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->clear();
    }

    public function find($id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'find', array('id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->find($id, $lockMode, $lockVersion);
    }

    public function findAll()
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'findAll', array(), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->findAll();
    }

    public function findBy(array $criteria, ?array $orderBy = null, $limit = null, $offset = null)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'findBy', array('criteria' => $criteria, 'orderBy' => $orderBy, 'limit' => $limit, 'offset' => $offset), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->findBy($criteria, $orderBy, $limit, $offset);
    }

    public function findOneBy(array $criteria, ?array $orderBy = null)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'findOneBy', array('criteria' => $criteria, 'orderBy' => $orderBy), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->findOneBy($criteria, $orderBy);
    }

    public function count(array $criteria)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'count', array('criteria' => $criteria), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->count($criteria);
    }

    public function getClassName()
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'getClassName', array(), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->getClassName();
    }

    public function matching(\Doctrine\Common\Collections\Criteria $criteria)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'matching', array('criteria' => $criteria), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->matching($criteria);
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

        unset($instance->listener, $instance->repoUtils, $instance->_entityName, $instance->_em, $instance->_class);

        $instance->initializer853e4 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\ORM\EntityManagerInterface $em, \Doctrine\ORM\Mapping\ClassMetadata $class)
    {
        static $reflection;

        if (! $this->valueHolder4a50a) {
            $reflection = $reflection ?? new \ReflectionClass('Sulu\\Bundle\\CategoryBundle\\Entity\\CategoryRepository');
            $this->valueHolder4a50a = $reflection->newInstanceWithoutConstructor();
        unset($this->listener, $this->repoUtils, $this->_entityName, $this->_em, $this->_class);

        }

        $this->valueHolder4a50a->__construct($em, $class);
    }

    public function & __get($name)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, '__get', ['name' => $name], $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        if (isset(self::$publicPropertiesa31b3[$name])) {
            return $this->valueHolder4a50a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Sulu\\Bundle\\CategoryBundle\\Entity\\CategoryRepository');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4a50a;

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

        $targetObject = $this->valueHolder4a50a;
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
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        $realInstanceReflection = new \ReflectionClass('Sulu\\Bundle\\CategoryBundle\\Entity\\CategoryRepository');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4a50a;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder4a50a;
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
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, '__isset', array('name' => $name), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        $realInstanceReflection = new \ReflectionClass('Sulu\\Bundle\\CategoryBundle\\Entity\\CategoryRepository');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4a50a;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder4a50a;
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
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, '__unset', array('name' => $name), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        $realInstanceReflection = new \ReflectionClass('Sulu\\Bundle\\CategoryBundle\\Entity\\CategoryRepository');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4a50a;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder4a50a;
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
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, '__clone', array(), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        $this->valueHolder4a50a = clone $this->valueHolder4a50a;
    }

    public function __sleep()
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, '__sleep', array(), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return array('valueHolder4a50a');
    }

    public function __wakeup()
    {
        unset($this->listener, $this->repoUtils, $this->_entityName, $this->_em, $this->_class);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer853e4 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer853e4;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'initializeProxy', array(), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder4a50a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder4a50a;
    }
}

if (!\class_exists('CategoryRepository_9c346ab', false)) {
    \class_alias(__NAMESPACE__.'\\CategoryRepository_9c346ab', 'CategoryRepository_9c346ab', false);
}
