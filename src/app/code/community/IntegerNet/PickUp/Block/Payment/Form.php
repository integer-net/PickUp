<?php
/**
 * integer_net Magento Module
 *
 * @category   IntegerNet
 * @package    IntegerNet_PickUp
 * @copyright  Copyright (c) 2014 integer_net GmbH (http://www.integer-net.de/)
 * @author     Andreas von Studnitz <avs@integer-net.de>
 */
class IntegerNet_PickUp_Block_Payment_Form extends Mage_Payment_Block_Form
{

    /**
     * Instructions text
     *
     * @var string
     */
    protected $_customText;

    /**
     * Block construction. Set block template.
     */
    protected function _construct()
    {
        parent::_construct();
        $this->setTemplate('integer_net/pickup/payment/form.phtml');
    }

    /**
     * Get instructions text from config
     *
     * @return string
     */
    public function getCustomText()
    {
        if (is_null($this->_customText)) {
            $this->_customText = $this->getMethod()->getCustomFormText();
        }
        return $this->_customText;
    }

}
