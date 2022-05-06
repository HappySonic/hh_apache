<?php

namespace ContainerYGMJtmU;
include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Persistence/Repository/RepositoryInterface.php';
include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/CategoryBundle/Entity/CategoryRepositoryInterface.php';
include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/CategoryBundle/Entity/CategoryRepository.php';

class CategoryRepository_9c346ab extends \Sulu\Bundle\CategoryBundle\Entity\CategoryRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Sulu\Bundle\CategoryBundle\Entity\CategoryRepository|null wrapped object, if the proxy is initialized
     */
    private $valueHolderedeb5 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb5509 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties93d91 = [
        
    ];

    public function createNew()
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'createNew', array(), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->createNew();
    }

    public function isCategoryId($id)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'isCategoryId', array('id' => $id), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->isCategoryId($id);
    }

    public function isCategoryKey($key)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'isCategoryKey', array('key' => $key), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->isCategoryKey($key);
    }

    public function findCategoryById($id)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'findCategoryById', array('id' => $id), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->findCategoryById($id);
    }

    public function findCategoryByKey($key)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'findCategoryByKey', array('key' => $key), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->findCategoryByKey($key);
    }

    public function findCategoriesByIds(array $ids)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'findCategoriesByIds', array('ids' => $ids), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->findCategoriesByIds($ids);
    }

    public function findChildrenCategoriesByParentId($parentId = null)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'findChildrenCategoriesByParentId', array('parentId' => $parentId), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->findChildrenCategoriesByParentId($parentId);
    }

    public function findChildrenCategoriesByParentKey($parentKey = null)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'findChildrenCategoriesByParentKey', array('parentKey' => $parentKey), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->findChildrenCategoriesByParentKey($parentKey);
    }

    public function findCategoryIdsBetween($fromIds, $toIds)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'findCategoryIdsBetween', array('fromIds' => $fromIds, 'toIds' => $toIds), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->findCategoryIdsBetween($fromIds, $toIds);
    }

    public function findCategoryByIds(array $ids)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'findCategoryByIds', array('ids' => $ids), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->findCategoryByIds($ids);
    }

    public function findCategories($parent = null, $depth = null, $sortBy = null, $sortOrder = null)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'findCategories', array('parent' => $parent, 'depth' => $depth, 'sortBy' => $sortBy, 'sortOrder' => $sortOrder), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->findCategories($parent, $depth, $sortBy, $sortOrder);
    }

    public function findChildren($key, $sortBy = null, $sortOrder = null)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'findChildren', array('key' => $key, 'sortBy' => $sortBy, 'sortOrder' => $sortOrder), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->findChildren($key, $sortBy, $sortOrder);
    }

    public function findDescendantCategoryResources(int $ancestorId) : array
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'findDescendantCategoryResources', array('ancestorId' => $ancestorId), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->findDescendantCategoryResources($ancestorId);
    }

    public function __call($method, $args)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, '__call', array('method' => $method, 'args' => $args), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->__call($method, $args);
    }

    public function getRootNodesQueryBuilder($sortByField = null, $direction = 'asc')
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'getRootNodesQueryBuilder', array('sortByField' => $sortByField, 'direction' => $direction), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->getRootNodesQueryBuilder($sortByField, $direction);
    }

    public function getRootNodesQuery($sortByField = null, $direction = 'asc')
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'getRootNodesQuery', array('sortByField' => $sortByField, 'direction' => $direction), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->getRootNodesQuery($sortByField, $direction);
    }

    public function getRootNodes($sortByField = null, $direction = 'asc')
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'getRootNodes', array('sortByField' => $sortByField, 'direction' => $direction), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->getRootNodes($sortByField, $direction);
    }

    public function getPathQueryBuilder($node)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'getPathQueryBuilder', array('node' => $node), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->getPathQueryBuilder($node);
    }

    public function getPathQuery($node)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'getPathQuery', array('node' => $node), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->getPathQuery($node);
    }

    public function getPath($node)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'getPath', array('node' => $node), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->getPath($node);
    }

    public function childrenQueryBuilder($node = null, $direct = false, $sortByField = null, $direction = 'ASC', $includeNode = false)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'childrenQueryBuilder', array('node' => $node, 'direct' => $direct, 'sortByField' => $sortByField, 'direction' => $direction, 'includeNode' => $includeNode), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->childrenQueryBuilder($node, $direct, $sortByField, $direction, $includeNode);
    }

    public function childrenQuery($node = null, $direct = false, $sortByField = null, $direction = 'ASC', $includeNode = false)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'childrenQuery', array('node' => $node, 'direct' => $direct, 'sortByField' => $sortByField, 'direction' => $direction, 'includeNode' => $includeNode), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->childrenQuery($node, $direct, $sortByField, $direction, $includeNode);
    }

    public function children($node = null, $direct = false, $sortByField = null, $direction = 'ASC', $includeNode = false)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'children', array('node' => $node, 'direct' => $direct, 'sortByField' => $sortByField, 'direction' => $direction, 'includeNode' => $includeNode), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->children($node, $direct, $sortByField, $direction, $includeNode);
    }

    public function getChildrenQueryBuilder($node = null, $direct = false, $sortByField = null, $direction = 'ASC', $includeNode = false)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'getChildrenQueryBuilder', array('node' => $node, 'direct' => $direct, 'sortByField' => $sortByField, 'direction' => $direction, 'includeNode' => $includeNode), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->getChildrenQueryBuilder($node, $direct, $sortByField, $direction, $includeNode);
    }

    public function getChildrenQuery($node = null, $direct = false, $sortByField = null, $direction = 'ASC', $includeNode = false)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'getChildrenQuery', array('node' => $node, 'direct' => $direct, 'sortByField' => $sortByField, 'direction' => $direction, 'includeNode' => $includeNode), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->getChildrenQuery($node, $direct, $sortByField, $direction, $includeNode);
    }

    public function getChildren($node = null, $direct = false, $sortByField = null, $direction = 'ASC', $includeNode = false)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'getChildren', array('node' => $node, 'direct' => $direct, 'sortByField' => $sortByField, 'direction' => $direction, 'includeNode' => $includeNode), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->getChildren($node, $direct, $sortByField, $direction, $includeNode);
    }

    public function getLeafsQueryBuilder($root = null, $sortByField = null, $direction = 'ASC')
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'getLeafsQueryBuilder', array('root' => $root, 'sortByField' => $sortByField, 'direction' => $direction), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->getLeafsQueryBuilder($root, $sortByField, $direction);
    }

    public function getLeafsQuery($root = null, $sortByField = null, $direction = 'ASC')
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'getLeafsQuery', array('root' => $root, 'sortByField' => $sortByField, 'direction' => $direction), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->getLeafsQuery($root, $sortByField, $direction);
    }

    public function getLeafs($root = null, $sortByField = null, $direction = 'ASC')
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'getLeafs', array('root' => $root, 'sortByField' => $sortByField, 'direction' => $direction), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->getLeafs($root, $sortByField, $direction);
    }

    public function getNextSiblingsQueryBuilder($node, $includeSelf = false)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'getNextSiblingsQueryBuilder', array('node' => $node, 'includeSelf' => $includeSelf), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->getNextSiblingsQueryBuilder($node, $includeSelf);
    }

    public function getNextSiblingsQuery($node, $includeSelf = false)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'getNextSiblingsQuery', array('node' => $node, 'includeSelf' => $includeSelf), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->getNextSiblingsQuery($node, $includeSelf);
    }

    public function getNextSiblings($node, $includeSelf = false)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'getNextSiblings', array('node' => $node, 'includeSelf' => $includeSelf), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->getNextSiblings($node, $includeSelf);
    }

    public function getPrevSiblingsQueryBuilder($node, $includeSelf = false)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'getPrevSiblingsQueryBuilder', array('node' => $node, 'includeSelf' => $includeSelf), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->getPrevSiblingsQueryBuilder($node, $includeSelf);
    }

    public function getPrevSiblingsQuery($node, $includeSelf = false)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'getPrevSiblingsQuery', array('node' => $node, 'includeSelf' => $includeSelf), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->getPrevSiblingsQuery($node, $includeSelf);
    }

    public function getPrevSiblings($node, $includeSelf = false)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'getPrevSiblings', array('node' => $node, 'includeSelf' => $includeSelf), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->getPrevSiblings($node, $includeSelf);
    }

    public function moveDown($node, $number = 1)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'moveDown', array('node' => $node, 'number' => $number), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->moveDown($node, $number);
    }

    public function moveUp($node, $number = 1)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'moveUp', array('node' => $node, 'number' => $number), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->moveUp($node, $number);
    }

    public function removeFromTree($node)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'removeFromTree', array('node' => $node), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->removeFromTree($node);
    }

    public function reorder($node, $sortByField = null, $direction = 'ASC', $verify = true)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'reorder', array('node' => $node, 'sortByField' => $sortByField, 'direction' => $direction, 'verify' => $verify), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->reorder($node, $sortByField, $direction, $verify);
    }

    public function reorderAll($sortByField = null, $direction = 'ASC', $verify = true)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'reorderAll', array('sortByField' => $sortByField, 'direction' => $direction, 'verify' => $verify), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->reorderAll($sortByField, $direction, $verify);
    }

    public function verify()
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'verify', array(), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->verify();
    }

    public function recover()
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'recover', array(), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->recover();
    }

    public function getNodesHierarchyQueryBuilder($node = null, $direct = false, array $options = [], $includeNode = false)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'getNodesHierarchyQueryBuilder', array('node' => $node, 'direct' => $direct, 'options' => $options, 'includeNode' => $includeNode), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->getNodesHierarchyQueryBuilder($node, $direct, $options, $includeNode);
    }

    public function getNodesHierarchyQuery($node = null, $direct = false, array $options = [], $includeNode = false)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'getNodesHierarchyQuery', array('node' => $node, 'direct' => $direct, 'options' => $options, 'includeNode' => $includeNode), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->getNodesHierarchyQuery($node, $direct, $options, $includeNode);
    }

    public function getNodesHierarchy($node = null, $direct = false, array $options = [], $includeNode = false)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'getNodesHierarchy', array('node' => $node, 'direct' => $direct, 'options' => $options, 'includeNode' => $includeNode), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->getNodesHierarchy($node, $direct, $options, $includeNode);
    }

    public function setRepoUtils(\Gedmo\Tree\RepositoryUtilsInterface $repoUtils)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'setRepoUtils', array('repoUtils' => $repoUtils), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->setRepoUtils($repoUtils);
    }

    public function getRepoUtils()
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'getRepoUtils', array(), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->getRepoUtils();
    }

    public function childCount($node = null, $direct = false)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'childCount', array('node' => $node, 'direct' => $direct), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->childCount($node, $direct);
    }

    public function childrenHierarchy($node = null, $direct = false, array $options = [], $includeNode = false)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'childrenHierarchy', array('node' => $node, 'direct' => $direct, 'options' => $options, 'includeNode' => $includeNode), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->childrenHierarchy($node, $direct, $options, $includeNode);
    }

    public function buildTree(array $nodes, array $options = [])
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'buildTree', array('nodes' => $nodes, 'options' => $options), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->buildTree($nodes, $options);
    }

    public function buildTreeArray(array $nodes)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'buildTreeArray', array('nodes' => $nodes), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->buildTreeArray($nodes);
    }

    public function setChildrenIndex($childrenIndex)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'setChildrenIndex', array('childrenIndex' => $childrenIndex), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->setChildrenIndex($childrenIndex);
    }

    public function getChildrenIndex()
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'getChildrenIndex', array(), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->getChildrenIndex();
    }

    public function createQueryBuilder($alias, $indexBy = null)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'createQueryBuilder', array('alias' => $alias, 'indexBy' => $indexBy), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->createQueryBuilder($alias, $indexBy);
    }

    public function createResultSetMappingBuilder($alias)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'createResultSetMappingBuilder', array('alias' => $alias), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->createResultSetMappingBuilder($alias);
    }

    public function createNamedQuery($queryName)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'createNamedQuery', array('queryName' => $queryName), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->createNamedQuery($queryName);
    }

    public function createNativeNamedQuery($queryName)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'createNativeNamedQuery', array('queryName' => $queryName), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->createNativeNamedQuery($queryName);
    }

    public function clear()
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'clear', array(), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->clear();
    }

    public function find($id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'find', array('id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->find($id, $lockMode, $lockVersion);
    }

    public function findAll()
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'findAll', array(), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->findAll();
    }

    public function findBy(array $criteria, ?array $orderBy = null, $limit = null, $offset = null)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'findBy', array('criteria' => $criteria, 'orderBy' => $orderBy, 'limit' => $limit, 'offset' => $offset), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->findBy($criteria, $orderBy, $limit, $offset);
    }

    public function findOneBy(array $criteria, ?array $orderBy = null)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'findOneBy', array('criteria' => $criteria, 'orderBy' => $orderBy), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->findOneBy($criteria, $orderBy);
    }

    public function count(array $criteria)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'count', array('criteria' => $criteria), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->count($criteria);
    }

    public function getClassName()
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'getClassName', array(), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->getClassName();
    }

    public function matching(\Doctrine\Common\Collections\Criteria $criteria)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'matching', array('criteria' => $criteria), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->matching($criteria);
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

        $instance->initializerb5509 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\ORM\EntityManagerInterface $em, \Doctrine\ORM\Mapping\ClassMetadata $class)
    {
        static $reflection;

        if (! $this->valueHolderedeb5) {
            $reflection = $reflection ?? new \ReflectionClass('Sulu\\Bundle\\CategoryBundle\\Entity\\CategoryRepository');
            $this->valueHolderedeb5 = $reflection->newInstanceWithoutConstructor();
        unset($this->listener, $this->repoUtils, $this->_entityName, $this->_em, $this->_class);

        }

        $this->valueHolderedeb5->__construct($em, $class);
    }

    public function & __get($name)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, '__get', ['name' => $name], $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        if (isset(self::$publicProperties93d91[$name])) {
            return $this->valueHolderedeb5->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Sulu\\Bundle\\CategoryBundle\\Entity\\CategoryRepository');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderedeb5;

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

        $targetObject = $this->valueHolderedeb5;
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
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        $realInstanceReflection = new \ReflectionClass('Sulu\\Bundle\\CategoryBundle\\Entity\\CategoryRepository');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderedeb5;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderedeb5;
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
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, '__isset', array('name' => $name), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        $realInstanceReflection = new \ReflectionClass('Sulu\\Bundle\\CategoryBundle\\Entity\\CategoryRepository');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderedeb5;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderedeb5;
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
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, '__unset', array('name' => $name), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        $realInstanceReflection = new \ReflectionClass('Sulu\\Bundle\\CategoryBundle\\Entity\\CategoryRepository');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderedeb5;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderedeb5;
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
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, '__clone', array(), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        $this->valueHolderedeb5 = clone $this->valueHolderedeb5;
    }

    public function __sleep()
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, '__sleep', array(), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return array('valueHolderedeb5');
    }

    public function __wakeup()
    {
        unset($this->listener, $this->repoUtils, $this->_entityName, $this->_em, $this->_class);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb5509 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb5509;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'initializeProxy', array(), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderedeb5;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderedeb5;
    }
}

if (!\class_exists('CategoryRepository_9c346ab', false)) {
    \class_alias(__NAMESPACE__.'\\CategoryRepository_9c346ab', 'CategoryRepository_9c346ab', false);
}
