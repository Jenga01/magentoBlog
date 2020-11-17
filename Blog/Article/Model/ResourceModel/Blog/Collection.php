<?php
namespace Blog\Article\Model\ResourceModel\Blog;

use \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * Define model & resource model
     */
    protected function _construct()
    {
        $this->_init(
            'Blog\Article\Model\Blog',
            'Blog\Article\Model\ResourceModel\Blog'
        );
    }
}
