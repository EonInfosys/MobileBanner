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

class Edit extends Image
{
    /**
     * @return \Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        $imageId = $this->getRequest()->getParam('image_id');
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('EonInfosys_MobileBanner::image')
            ->addBreadcrumb(__('Images'), __('Images'))
            ->addBreadcrumb(__('Manage Images'), __('Manage Images'));

        if ($imageId === null) {
            $resultPage->addBreadcrumb(__('New Image'), __('New Image'));
            $resultPage->getConfig()->getTitle()->prepend(__('New Image'));
        } else {
            $resultPage->addBreadcrumb(__('Edit Image'), __('Edit Image'));
            $resultPage->getConfig()->getTitle()->prepend(__('Edit Image'));
        }
        return $resultPage;
    }
}
