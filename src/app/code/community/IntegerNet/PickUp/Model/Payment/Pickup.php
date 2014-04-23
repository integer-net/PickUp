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

    /**
     * Check whether method is available
     *
     * @param Mage_Sales_Model_Quote|null $quote
     * @return bool
     */
    public function isAvailable($quote = null)
    {
        return parent::isAvailable($quote) && $quote->getShippingAddress()->getShippingMethod() == 'pickup_pickup';
    }
}
