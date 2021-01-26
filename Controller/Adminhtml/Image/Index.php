<?php
/*
 * EonInfosys_MobileBanner

 * @category   EonInfosys
 * @package    EonInfosys_MobileBanner
 * @copyright  Copyright (c) 2017 EonInfosys
 * @license    https://github.com/eoninfosys
 * @version    1.0.0
 */
namespace EonInfosys\MobileBanner\Controller\Adminhtml\Image;

use EonInfosys\MobileBanner\Controller\Adminhtml\Image;

class Index extends Image
{
    /**
     * @return \Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('EonInfosys_MobileBanner::image');
        $resultPage->getConfig()->getTitle()->prepend(__('Images'));
        $resultPage->addBreadcrumb(__('Images'), __('Images'));
        return $resultPage;
    }
}
