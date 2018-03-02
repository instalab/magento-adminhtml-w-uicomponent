<?php

namespace MyCompany\NewExtension\Controller\AdminHtml\Comp;

use \Magento\Backend\App\Action;
use \Magento\Backend\App\Action\Context;
use \Magento\Framework\View\Result\PageFactory;

class Index extends Action {
    protected $resultPageFactory;
    
    public function __construct(Context $context, PageFactory $resultPageFactory) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }
    
    public function execute() {
        return $resultPage = $this->resultPageFactory->create();
    }
}



