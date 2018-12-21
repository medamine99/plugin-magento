<?php
/**
 * PayZen V2-Payment Module version 1.9.2 for Magento 1.4-1.9. Support contact : support@payzen.eu.
 *
 * NOTICE OF LICENSE
 *
 * This source file is licensed under the Open Software License version 3.0
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/osl-3.0.php
 *
 * @category  Payment
 * @package   Payzen
 * @author    Lyra Network (http://www.lyra-network.com/)
 * @copyright 2014-2018 Lyra Network and contributors
 * @license   https://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Lyra_Payzen_Model_Field_Translatable extends Mage_Core_Model_Config_Data
{
    /**
     * Processing object after load data.
     *
     * @return Mage_Core_Model_Abstract
     */
    public function afterLoad()
    {
        parent::afterLoad();

        $value = (string) $this->getValue();
        $default = (string) Mage::getConfig()->getNode('default/' . $this->getPath());
        if ($value && ($value === $default)) {
            $translator = Mage::getSingleton('core/translate');
            $locale = $translator->getLocale();

            // force default view locale
            $viewLocale = Mage::getStoreConfig('general/locale/code', 0);
            $translator->setLocale($viewLocale)->init('frontend', true);

            $this->setValue(Mage::helper('payzen')->__($value));

            // restore initial locale
            $translator->setLocale($locale)->init('adminhtml', true);
        }

        return $this;
    }
}