<?php

namespace Blog\Article\Controller\Index;

use Magento\Framework\App\CsrfAwareActionInterface;
use Magento\Framework\App\Action\Context;
use Blog\Article\Model\BlogFactory;
use \Magento\Framework\App\Action\Action;
use Magento\Framework\App\Request\InvalidRequestException;
use Magento\Framework\App\RequestInterface;


class Save extends Action implements CsrfAwareActionInterface
{
    protected $_blog;

    public function __construct(
        Context $context,
        BlogFactory $blog
    ) {
        $this->_blog = $blog;
        parent::__construct($context);
    }
    public function execute()
    {
        $data = $this->getRequest()->getParams();
        $blog = $this->_blog->create();


        $blog->setData($data);
        if($blog->save()){
            $this->messageManager->addSuccessMessage(__('Blog entry has been added'));
        }else{
            $this->messageManager->addErrorMessage(__('Blog entry has not been added'));
        }
        $resultRedirect = $this->resultRedirectFactory->create();
        $resultRedirect->setUrl($this->_redirect->getRefererUrl());
        return $resultRedirect;
    }

    /**
     * @inheritDoc
     */
    public function createCsrfValidationException(RequestInterface $request): ?InvalidRequestException
    {
        return null;
    }

    /**
     * @inheritDoc
     */
    public function validateForCsrf(RequestInterface $request): ?bool
    {
        return true;
    }
}
