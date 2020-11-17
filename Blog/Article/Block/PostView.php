<?php

namespace Blog\Article\Block;

use Magento\Framework\View\Element\Template\Context;
use Blog\Article\Model\BlogFactory;
use \Magento\Framework\View\Element\Template;


class PostView extends Template
{

    public function __construct(
        Context $context,
        BlogFactory $blog
    ) {
        $this->_blog = $blog;
        parent::__construct($context);
    }

    public function _prepareLayout()
    {


        return parent::_prepareLayout();
    }

    public function getSinglePost()
    {
        $id = $this->getRequest()->getParam('id');
        $blog = $this->_blog->create();
        $singleData = $blog->load($id);
        return $singleData;
    }

}
