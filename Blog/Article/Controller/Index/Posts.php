<?php

namespace Blog\Article\Controller\Index;

use  \Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Blog\Article\Model\BlogFactory;

class Posts extends Action
{

    public function execute()
    {
        $this->_view->loadLayout();
        $this->_view->getLayout()->initMessages();
        $this->_view->renderLayout();

    }
}
