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

use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Exception\NoSuchEntityException;
use EonInfosys\MobileBanner\Controller\Adminhtml\Image;

class Delete extends Image
{
    /**
     * @return \Magento\Framework\Controller\Result\Redirect
     */
    public function execute()
    {
        $resultRedirect = $this->resultRedirectFactory->create();
        $imageId = $this->getRequest()->getParam('image_id');
        if ($imageId) {
            try {
                $this->imageRepository->deleteById($imageId);
                $this->messageManager->addSuccessMessage(__('The image has been deleted.'));
                $resultRedirect->setPath('mobilebanner/image/index');
                return $resultRedirect;
            } catch (NoSuchEntityException $e) {
                $this->messageManager->addErrorMessage(__('The image no longer exists.'));
                return $resultRedirect->setPath('mobilebanner/image/index');
            } catch (LocalizedException $e) {
                $this->messageManager->addErrorMessage($e->getMessage());
                return $resultRedirect->setPath('mobilebanner/image/index', ['image_id' => $imageId]);
            } catch (\Exception $e) {
                $this->messageManager->addErrorMessage(__('There was a problem deleting the image'));
                return $resultRedirect->setPath('mobilebanner/image/edit', ['image_id' => $imageId]);
            }
        }
        $this->messageManager->addErrorMessage(__('We can\'t find the image to delete.'));
        $resultRedirect->setPath('mobilebanner/image/index');
        return $resultRedirect;
    }
}
