<?php
namespace Biren\AdminSample\Controller\Adminhtml\Settings;

use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;	

class Test extends \Magento\Backend\App\Action
{
	protected $resultPageFactory;
    public $_storeManager;
        protected $resultJsonFactory;


    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
        \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory,
        \Magento\Store\Model\StoreManagerInterface $storeManager
    ) {
         parent::__construct($context);
         $this->resultPageFactory = $resultPageFactory;    
         $this->resultJsonFactory = $resultJsonFactory;
         $this->_storeManager = $storeManager;

    }


    public function execute()
    {
        $resultJson = $this->resultJsonFactory->create();
        $post = $this->getRequest()->getPostValue();
        return $resultJson->setData($post);
        //return $resultJson->setData(['data' => $post]);

    }
}
