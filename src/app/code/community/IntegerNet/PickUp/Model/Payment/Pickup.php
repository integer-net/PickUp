<?php
/**
 * integer_net Magento Module
 *
 * @category   IntegerNet
 * @package    IntegerNet_PickUp
 * @copyright  Copyright (c) 2014 integer_net GmbH (http://www.integer-net.de/)
 * @author     Andreas von Studnitz <avs@integer-net.de>
 */
class IntegerNet_PickUp_Model_Payment_Pickup extends Mage_Payment_Model_Method_Abstract
{
    /**
     * XML Paths for configuration constants
     */
    const XML_PATH_PAYMENT_PICKUP_ACTIVE = 'payment/pickup/active';
    const XML_PATH_PAYMENT_PICKUP_ORDER_STATUS = 'payment/pickup/order_status';
    const XML_PATH_PAYMENT_PICKUP_PAYMENT_ACTION = 'payment/pickup/payment_action';

    /**
     * Payment Method features
     * @var bool
     */
    protected $_canAuthorize = true;

    /**
     * Payment code name
     *
     * @var string
     */
    protected $_code = 'pickup';

    protected $_formBlockType = 'integernet_pickup/payment_form';
    protected $_infoBlockType = 'integernet_pickup/payment_info';

    /**
     * Check whether method is available
     *
     * @param Mage_Sales_Model_Quote|null $quote
     * @return bool
     */
    public function isAvailable($quote = null)
    {
        return parent::isAvailable($quote) && (is_null($quote) || $quote->getShippingAddress()->getShippingMethod() == 'pickup_pickup');
    }

    /**
     * Get custom form text from config
     *
     * @return string
     */
    public function getCustomFormText()
    {
        return trim($this->getConfigData('custom_form_text'));
    }

    /**
     * Get custom form text from config
     *
     * @return string
     */
    public function getCustomInfoText()
    {
        return trim($this->getConfigData('custom_info_text'));
    }
}
