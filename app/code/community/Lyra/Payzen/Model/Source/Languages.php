<?php
/**
 * PayZen V2-Payment Module version 1.8.0 for Magento 1.4-1.9. Support contact : support@payzen.eu.
 *
 * NOTICE OF LICENSE
 *
 * This source file is licensed under the Open Software License version 3.0
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/osl-3.0.php
 *
 * @author    Lyra Network (http://www.lyra-network.com/)
 * @copyright 2014-2017 Lyra Network and contributors
 * @license   https://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @category  payment
 * @package   payzen
 */

class Lyra_Payzen_Model_Source_Languages
{
    public function toOptionArray()
    {
        $options =  array();

        foreach (Lyra_Payzen_Model_Api_Api::getSupportedLanguages() as $code => $name) {
            $options[] = array (
                    'value' => $code,
                    'label' => Mage::helper('payzen')->__($name)
            );
        }

        return $options;
    }
}