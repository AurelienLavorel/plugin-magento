<?php
/**
 * PayZen V2-Payment Module version 2.3.0 for Magento 2.x. Support contact : support@payzen.eu.
 *
 * NOTICE OF LICENSE
 *
 * This source file is licensed under the Open Software License version 3.0
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/osl-3.0.php
 *
 * @author    Lyra Network (http://www.lyra-network.com/)
 * @copyright 2014-2018 Lyra Network and contributors
 * @license   https://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @category  payment
 * @package   payzen
 */
namespace Lyranetwork\Payzen\Block\Payment;

class Redirect extends \Magento\Framework\View\Element\Template
{

    /**
     *
     * @var \Magento\Framework\Registry
     */
    protected $coreRegistry;

    /**
     *
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param \Magento\Framework\Registry $coreRegistry
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Framework\Registry $coreRegistry,
        array $data = []
    ) {
        $this->coreRegistry = $coreRegistry;

        parent::__construct($context, $data);
    }

    /**
     * Get Form data by using ops payment api
     *
     * @return array
     */
    public function getFormFields()
    {
        return $this->coreRegistry->registry(\Lyranetwork\Payzen\Block\Constants::PARAMS_REGISTRY_KEY);
    }

    /**
     * Getting gateway url
     *
     * @return string
     */
    public function getFormAction()
    {
        return $this->coreRegistry->registry(\Lyranetwork\Payzen\Block\Constants::URL_REGISTRY_KEY);
    }
}
