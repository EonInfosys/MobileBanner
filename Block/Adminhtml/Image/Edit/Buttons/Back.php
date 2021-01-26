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

use Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface;

class Back extends Generic implements ButtonProviderInterface
{
    /**
     * Get button data
     *
     * @return array
     */
    public function getButtonData()
    {
        return [
            'label' => __('Back'),
            'on_click' => sprintf("location.href = '%s';", $this->getBackUrl()),
            'class' => 'back',
            'sort_order' => 10
        ];
    }

    /**
     * Get URL for back (reset) button
     *
     * @return string
     */
    public function getBackUrl()
    {
        return $this->getUrl('*/*/');
    }
}
