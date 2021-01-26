<?php
/*
 * EonInfosys_MobileBanner

 * @category   EonInfosys
 * @package    EonInfosys_MobileBanner
 * @copyright  Copyright (c) 2017 EonInfosys
 * @license    https://github.com/eoninfosys
 * @version    1.0.0
 */
namespace EonInfosys\MobileBanner\Api\Data;

/**
 * @api
 */
interface ImageInterface
{
    const IMAGE_ID          = 'image_id';
    const IMAGE             = 'image';
    const STATUS            = 'status';

    /**
     * Get ID
     *
     * @return int|null
     */
    public function getId();

    /**
     * Get image
     *
     * @return string
     */
    public function getImage();

    /**
     * @return int
     */
    public function getStatus();


    /**
     * Set ID
     *
     * @param $id
     * @return ImageInterface
     */
    public function setId($id);

    /**
     * Set image
     *
     * @param $image
     * @return ImageInterface
     */
    public function setImage($image);
}
