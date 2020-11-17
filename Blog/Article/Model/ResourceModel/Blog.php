<?php
namespace Blog\Article\Model\ResourceModel;

use \Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Blog extends AbstractDb
{
    /**
     * Define main table
     */
    protected function _construct()
    {
        $this->_init('magento_blog', 'blog_id');
    }
}
