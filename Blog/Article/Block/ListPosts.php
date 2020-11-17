<?php

namespace Blog\Article\Block;

use Magento\Framework\View\Element\Template\Context;
use Blog\Article\Model\BlogFactory;
use \Magento\Framework\View\Element\Template;

/**
 * Test List block
 */
class ListPosts extends Template
{
    public function __construct(
        Context $context,
        BlogFactory $blog
    ) {
        $this->blog = $blog;
        parent::__construct($context);
    }

    public function _prepareLayout()
    {
        $this->pageConfig->getTitle()->set(__("Jenga's articles"));

        return parent::_prepareLayout();
    }

    public function getPostsCollection()
    {
        $blog = $this->blog->create();
        $collection = $blog->getCollection();
        return $collection;
    }
}
