<?php
/*
 * EonInfosys_MobileBanner

 * @category   EonInfosys
 * @package    EonInfosys_MobileBanner
 * @copyright  Copyright (c) 2017 EonInfosys
 * @license    https://github.com/eoninfosys
 * @version    1.0.0
 */
namespace EonInfosys\MobileBanner\Api;

use EonInfosys\MobileBanner\Api\Data\ImageInterface;

/**
 * @api
 */
interface ImageRepositoryInterface
{
    /**
     * Save page.
     *
     * @param ImageInterface $image
     * @return ImageInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(ImageInterface $image);

    /**
     * Retrieve Image.
     *
     * @param int $imageId
     * @return ImageInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getById($imageId);

    /**
     * Delete image.
     *
     * @param ImageInterface $image
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(ImageInterface $image);

    /**
     * Delete image by ID.
     *
     * @param int $imageId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($imageId);


    /**
    * @return \EonInfosys\MobileBanner\Api\Data\ImageInterface[]
    */
   public function getList();
 
}
