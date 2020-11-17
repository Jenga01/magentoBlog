<?php

namespace Blog\Article\Model;

use Magento\Framework\Model\AbstractModel;

class Blog extends AbstractModel
{
    /**
     * Define resource model
     */
    protected function _construct()
    {
        $this->_init('Blog\Article\Model\ResourceModel\Blog');
    }
}
