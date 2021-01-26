<?php
/*
 * EonInfosys_MobileBanner

 * @category   EonInfosys
 * @package    EonInfosys_MobileBanner
 * @copyright  Copyright (c) 2017 EonInfosys
 * @license    https://github.com/eoninfosys
 * @version    1.0.0
 */
namespace EonInfosys\MobileBanner\Block\Adminhtml\Image\Edit\Buttons;

use Magento\Backend\Block\Widget\Context;
use Magento\Framework\Exception\NoSuchEntityException;
use EonInfosys\MobileBanner\Api\ImageRepositoryInterface;

class Generic
{
    /**
     * @var Context
     */
    protected $context;

    /**
     * @var ImageRepositoryInterface
     */
    protected $imageRepository;

    /**
     * @param Context $context
     * @param ImageRepositoryInterface $imageRepository
     */
    public function __construct(
        Context $context,
        ImageRepositoryInterface $imageRepository
    ) {
        $this->context = $context;
        $this->imageRepository = $imageRepository;
    }

    /**
     * Return Image ID
     *
     * @return int|null
     */
    public function getImageId()
    {
        try {
            return $this->imageRepository->getById(
                $this->context->getRequest()->getParam('image_id')
            )->getId();
        } catch (NoSuchEntityException $e) {
            return null;
        }
    }

    /**
     * Generate url by route and parameters
     *
     * @param   string $route
     * @param   array $params
     * @return  string
     */
    public function getUrl($route = '', $params = [])
    {
        return $this->context->getUrlBuilder()->getUrl($route, $params);
    }
}
