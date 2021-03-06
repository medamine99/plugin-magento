/**
 * PayZen V2-Payment Module version 2.3.2 for Magento 2.x. Support contact : support@payzen.eu.
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

define(
    [
        'uiComponent',
        'Magento_Checkout/js/model/payment/renderer-list'
    ],
    function (Component, rendererList) {
        'use strict';
        rendererList.push(
            {
                type: 'payzen_standard',
                component: 'Lyranetwork_Payzen/js/view/payment/method-renderer/payzen-standard'
            },
            {
                type: 'payzen_multi',
                component: 'Lyranetwork_Payzen/js/view/payment/method-renderer/payzen-multi'
            },
            {
                type: 'payzen_choozeo',
                component: 'Lyranetwork_Payzen/js/view/payment/method-renderer/payzen-choozeo'
            }
        );

        /** Add view logic here if needed */
        return Component.extend({});
    }
);