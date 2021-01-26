<?php
// @codingStandardsIgnoreFile
/*
 * EonInfosys_MobileBanner

 * @category   EonInfosys
 * @package    EonInfosys_MobileBanner
 * @copyright  Copyright (c) 2017 EonInfosys
 * @license    https://github.com/eoninfosys
 * @version    1.0.0
 */
namespace EonInfosys\MobileBanner\Model\ResourceModel\Image;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * @var string
     */
    protected $_idFieldName = 'image_id';

    /**
     * Collection initialisation
     */
    protected function _construct()
    {
        $this->_init(
            'EonInfosys\MobileBanner\Model\Image',
            'EonInfosys\MobileBanner\Model\ResourceModel\Image'
        );
    }
}
