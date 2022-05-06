<?php

namespace Container59KXm3P;

include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Persistence/Repository/RepositoryInterface.php';
include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/CategoryBundle/Entity/CategoryRepositoryInterface.php';
include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/CategoryBundle/Entity/CategoryRepository.php';
class CategoryRepository_9c346ab extends \Sulu\Bundle\CategoryBundle\Entity\CategoryRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder8c057 = null;
    private $initializera2e88 = null;
    private static $publicPropertiesa4d84 = [
        
    ];
    public function createNew()
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'createNew', array(), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->createNew();
    }
    public function isCategoryId($id)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'isCategoryId', array('id' => $id), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->isCategoryId($id);
    }
    public function isCategoryKey($key)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'isCategoryKey', array('key' => $key), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->isCategoryKey($key);
    }
    public function findCategoryById($id)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'findCategoryById', array('id' => $id), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->findCategoryById($id);
    }
    public function findCategoryByKey($key)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'findCategoryByKey', array('key' => $key), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->findCategoryByKey($key);
    }
    public function findCategoriesByIds(array $ids)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'findCategoriesByIds', array('ids' => $ids), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->findCategoriesByIds($ids);
    }
    public function findChildrenCategoriesByParentId($parentId = null)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'findChildrenCategoriesByParentId', array('parentId' => $parentId), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->findChildrenCategoriesByParentId($parentId);
    }
    public function findChildrenCategoriesByParentKey($parentKey = null)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'findChildrenCategoriesByParentKey', array('parentKey' => $parentKey), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->findChildrenCategoriesByParentKey($parentKey);
    }
    public function findCategoryIdsBetween($fromIds, $toIds)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'findCategoryIdsBetween', array('fromIds' => $fromIds, 'toIds' => $toIds), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->findCategoryIdsBetween($fromIds, $toIds);
    }
    public function findCategoryByIds(array $ids)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'findCategoryByIds', array('ids' => $ids), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->findCategoryByIds($ids);
    }
    public function findCategories($parent = null, $depth = null, $sortBy = null, $sortOrder = null)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'findCategories', array('parent' => $parent, 'depth' => $depth, 'sortBy' => $sortBy, 'sortOrder' => $sortOrder), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->findCategories($parent, $depth, $sortBy, $sortOrder);
    }
    public function findChildren($key, $sortBy = null, $sortOrder = null)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'findChildren', array('key' => $key, 'sortBy' => $sortBy, 'sortOrder' => $sortOrder), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->findChildren($key, $sortBy, $sortOrder);
    }
    public function findDescendantCategoryResources(int $ancestorId) : array
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'findDescendantCategoryResources', array('ancestorId' => $ancestorId), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->findDescendantCategoryResources($ancestorId);
    }
    public function __call($method, $args)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, '__call', array('method' => $method, 'args' => $args), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->__call($method, $args);
    }
    public function getRootNodesQueryBuilder($sortByField = null, $direction = 'asc')
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'getRootNodesQueryBuilder', array('sortByField' => $sortByField, 'direction' => $direction), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->getRootNodesQueryBuilder($sortByField, $direction);
    }
    public function getRootNodesQuery($sortByField = null, $direction = 'asc')
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'getRootNodesQuery', array('sortByField' => $sortByField, 'direction' => $direction), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->getRootNodesQuery($sortByField, $direction);
    }
    public function getRootNodes($sortByField = null, $direction = 'asc')
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'getRootNodes', array('sortByField' => $sortByField, 'direction' => $direction), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->getRootNodes($sortByField, $direction);
    }
    public function getPathQueryBuilder($node)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'getPathQueryBuilder', array('node' => $node), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->getPathQueryBuilder($node);
    }
    public function getPathQuery($node)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'getPathQuery', array('node' => $node), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->getPathQuery($node);
    }
    public function getPath($node)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'getPath', array('node' => $node), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->getPath($node);
    }
    public function childrenQueryBuilder($node = null, $direct = false, $sortByField = null, $direction = 'ASC', $includeNode = false)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'childrenQueryBuilder', array('node' => $node, 'direct' => $direct, 'sortByField' => $sortByField, 'direction' => $direction, 'includeNode' => $includeNode), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->childrenQueryBuilder($node, $direct, $sortByField, $direction, $includeNode);
    }
    public function childrenQuery($node = null, $direct = false, $sortByField = null, $direction = 'ASC', $includeNode = false)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'childrenQuery', array('node' => $node, 'direct' => $direct, 'sortByField' => $sortByField, 'direction' => $direction, 'includeNode' => $includeNode), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->childrenQuery($node, $direct, $sortByField, $direction, $includeNode);
    }
    public function children($node = null, $direct = false, $sortByField = null, $direction = 'ASC', $includeNode = false)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'children', array('node' => $node, 'direct' => $direct, 'sortByField' => $sortByField, 'direction' => $direction, 'includeNode' => $includeNode), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->children($node, $direct, $sortByField, $direction, $includeNode);
    }
    public function getChildrenQueryBuilder($node = null, $direct = false, $sortByField = null, $direction = 'ASC', $includeNode = false)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'getChildrenQueryBuilder', array('node' => $node, 'direct' => $direct, 'sortByField' => $sortByField, 'direction' => $direction, 'includeNode' => $includeNode), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->getChildrenQueryBuilder($node, $direct, $sortByField, $direction, $includeNode);
    }
    public function getChildrenQuery($node = null, $direct = false, $sortByField = null, $direction = 'ASC', $includeNode = false)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'getChildrenQuery', array('node' => $node, 'direct' => $direct, 'sortByField' => $sortByField, 'direction' => $direction, 'includeNode' => $includeNode), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->getChildrenQuery($node, $direct, $sortByField, $direction, $includeNode);
    }
    public function getChildren($node = null, $direct = false, $sortByField = null, $direction = 'ASC', $includeNode = false)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'getChildren', array('node' => $node, 'direct' => $direct, 'sortByField' => $sortByField, 'direction' => $direction, 'includeNode' => $includeNode), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->getChildren($node, $direct, $sortByField, $direction, $includeNode);
    }
    public function getLeafsQueryBuilder($root = null, $sortByField = null, $direction = 'ASC')
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'getLeafsQueryBuilder', array('root' => $root, 'sortByField' => $sortByField, 'direction' => $direction), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->getLeafsQueryBuilder($root, $sortByField, $direction);
    }
    public function getLeafsQuery($root = null, $sortByField = null, $direction = 'ASC')
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'getLeafsQuery', array('root' => $root, 'sortByField' => $sortByField, 'direction' => $direction), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->getLeafsQuery($root, $sortByField, $direction);
    }
    public function getLeafs($root = null, $sortByField = null, $direction = 'ASC')
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'getLeafs', array('root' => $root, 'sortByField' => $sortByField, 'direction' => $direction), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->getLeafs($root, $sortByField, $direction);
    }
    public function getNextSiblingsQueryBuilder($node, $includeSelf = false)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'getNextSiblingsQueryBuilder', array('node' => $node, 'includeSelf' => $includeSelf), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->getNextSiblingsQueryBuilder($node, $includeSelf);
    }
    public function getNextSiblingsQuery($node, $includeSelf = false)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'getNextSiblingsQuery', array('node' => $node, 'includeSelf' => $includeSelf), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->getNextSiblingsQuery($node, $includeSelf);
    }
    public function getNextSiblings($node, $includeSelf = false)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'getNextSiblings', array('node' => $node, 'includeSelf' => $includeSelf), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->getNextSiblings($node, $includeSelf);
    }
    public function getPrevSiblingsQueryBuilder($node, $includeSelf = false)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'getPrevSiblingsQueryBuilder', array('node' => $node, 'includeSelf' => $includeSelf), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->getPrevSiblingsQueryBuilder($node, $includeSelf);
    }
    public function getPrevSiblingsQuery($node, $includeSelf = false)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'getPrevSiblingsQuery', array('node' => $node, 'includeSelf' => $includeSelf), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->getPrevSiblingsQuery($node, $includeSelf);
    }
    public function getPrevSiblings($node, $includeSelf = false)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'getPrevSiblings', array('node' => $node, 'includeSelf' => $includeSelf), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->getPrevSiblings($node, $includeSelf);
    }
    public function moveDown($node, $number = 1)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'moveDown', array('node' => $node, 'number' => $number), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->moveDown($node, $number);
    }
    public function moveUp($node, $number = 1)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'moveUp', array('node' => $node, 'number' => $number), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->moveUp($node, $number);
    }
    public function removeFromTree($node)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'removeFromTree', array('node' => $node), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->removeFromTree($node);
    }
    public function reorder($node, $sortByField = null, $direction = 'ASC', $verify = true)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'reorder', array('node' => $node, 'sortByField' => $sortByField, 'direction' => $direction, 'verify' => $verify), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->reorder($node, $sortByField, $direction, $verify);
    }
    public function reorderAll($sortByField = null, $direction = 'ASC', $verify = true)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'reorderAll', array('sortByField' => $sortByField, 'direction' => $direction, 'verify' => $verify), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->reorderAll($sortByField, $direction, $verify);
    }
    public function verify()
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'verify', array(), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->verify();
    }
    public function recover()
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'recover', array(), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->recover();
    }
    public function getNodesHierarchyQueryBuilder($node = null, $direct = false, array $options = [], $includeNode = false)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'getNodesHierarchyQueryBuilder', array('node' => $node, 'direct' => $direct, 'options' => $options, 'includeNode' => $includeNode), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->getNodesHierarchyQueryBuilder($node, $direct, $options, $includeNode);
    }
    public function getNodesHierarchyQuery($node = null, $direct = false, array $options = [], $includeNode = false)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'getNodesHierarchyQuery', array('node' => $node, 'direct' => $direct, 'options' => $options, 'includeNode' => $includeNode), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->getNodesHierarchyQuery($node, $direct, $options, $includeNode);
    }
    public function getNodesHierarchy($node = null, $direct = false, array $options = [], $includeNode = false)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'getNodesHierarchy', array('node' => $node, 'direct' => $direct, 'options' => $options, 'includeNode' => $includeNode), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->getNodesHierarchy($node, $direct, $options, $includeNode);
    }
    public function setRepoUtils(\Gedmo\Tree\RepositoryUtilsInterface $repoUtils)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'setRepoUtils', array('repoUtils' => $repoUtils), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->setRepoUtils($repoUtils);
    }
    public function getRepoUtils()
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'getRepoUtils', array(), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->getRepoUtils();
    }
    public function childCount($node = null, $direct = false)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'childCount', array('node' => $node, 'direct' => $direct), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->childCount($node, $direct);
    }
    public function childrenHierarchy($node = null, $direct = false, array $options = [], $includeNode = false)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'childrenHierarchy', array('node' => $node, 'direct' => $direct, 'options' => $options, 'includeNode' => $includeNode), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->childrenHierarchy($node, $direct, $options, $includeNode);
    }
    public function buildTree(array $nodes, array $options = [])
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'buildTree', array('nodes' => $nodes, 'options' => $options), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->buildTree($nodes, $options);
    }
    public function buildTreeArray(array $nodes)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'buildTreeArray', array('nodes' => $nodes), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->buildTreeArray($nodes);
    }
    public function setChildrenIndex($childrenIndex)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'setChildrenIndex', array('childrenIndex' => $childrenIndex), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->setChildrenIndex($childrenIndex);
    }
    public function getChildrenIndex()
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'getChildrenIndex', array(), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->getChildrenIndex();
    }
    public function createQueryBuilder($alias, $indexBy = null)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'createQueryBuilder', array('alias' => $alias, 'indexBy' => $indexBy), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->createQueryBuilder($alias, $indexBy);
    }
    public function createResultSetMappingBuilder($alias)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'createResultSetMappingBuilder', array('alias' => $alias), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->createResultSetMappingBuilder($alias);
    }
    public function createNamedQuery($queryName)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'createNamedQuery', array('queryName' => $queryName), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->createNamedQuery($queryName);
    }
    public function createNativeNamedQuery($queryName)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'createNativeNamedQuery', array('queryName' => $queryName), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->createNativeNamedQuery($queryName);
    }
    public function clear()
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'clear', array(), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->clear();
    }
    public function find($id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'find', array('id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->find($id, $lockMode, $lockVersion);
    }
    public function findAll()
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'findAll', array(), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->findAll();
    }
    public function findBy(array $criteria, ?array $orderBy = null, $limit = null, $offset = null)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'findBy', array('criteria' => $criteria, 'orderBy' => $orderBy, 'limit' => $limit, 'offset' => $offset), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->findBy($criteria, $orderBy, $limit, $offset);
    }
    public function findOneBy(array $criteria, ?array $orderBy = null)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'findOneBy', array('criteria' => $criteria, 'orderBy' => $orderBy), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->findOneBy($criteria, $orderBy);
    }
    public function count(array $criteria)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'count', array('criteria' => $criteria), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->count($criteria);
    }
    public function getClassName()
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'getClassName', array(), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->getClassName();
    }
    public function matching(\Doctrine\Common\Collections\Criteria $criteria)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'matching', array('criteria' => $criteria), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->matching($criteria);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->listener, $instance->repoUtils, $instance->_entityName, $instance->_em, $instance->_class);
        $instance->initializera2e88 = $initializer;
        return $instance;
    }
    public function __construct(\Doctrine\ORM\EntityManagerInterface $em, \Doctrine\ORM\Mapping\ClassMetadata $class)
    {
        static $reflection;
        if (! $this->valueHolder8c057) {
            $reflection = $reflection ?? new \ReflectionClass('Sulu\\Bundle\\CategoryBundle\\Entity\\CategoryRepository');
            $this->valueHolder8c057 = $reflection->newInstanceWithoutConstructor();
        unset($this->listener, $this->repoUtils, $this->_entityName, $this->_em, $this->_class);
        }
        $this->valueHolder8c057->__construct($em, $class);
    }
    public function & __get($name)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, '__get', ['name' => $name], $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        if (isset(self::$publicPropertiesa4d84[$name])) {
            return $this->valueHolder8c057->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Sulu\\Bundle\\CategoryBundle\\Entity\\CategoryRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8c057;
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
        $targetObject = $this->valueHolder8c057;
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
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        $realInstanceReflection = new \ReflectionClass('Sulu\\Bundle\\CategoryBundle\\Entity\\CategoryRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8c057;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder8c057;
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
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, '__isset', array('name' => $name), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        $realInstanceReflection = new \ReflectionClass('Sulu\\Bundle\\CategoryBundle\\Entity\\CategoryRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8c057;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder8c057;
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
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, '__unset', array('name' => $name), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        $realInstanceReflection = new \ReflectionClass('Sulu\\Bundle\\CategoryBundle\\Entity\\CategoryRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8c057;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder8c057;
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
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, '__clone', array(), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        $this->valueHolder8c057 = clone $this->valueHolder8c057;
    }
    public function __sleep()
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, '__sleep', array(), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return array('valueHolder8c057');
    }
    public function __wakeup()
    {
        unset($this->listener, $this->repoUtils, $this->_entityName, $this->_em, $this->_class);
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
        return $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'initializeProxy', array(), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder8c057;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder8c057;
    }
}

if (!\class_exists('CategoryRepository_9c346ab', false)) {
    \class_alias(__NAMESPACE__.'\\CategoryRepository_9c346ab', 'CategoryRepository_9c346ab', false);
}
