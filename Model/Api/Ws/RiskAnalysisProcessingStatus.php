<?php
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

namespace Lyranetwork\Payzen\Model\Api\Ws;

class RiskAnalysisProcessingStatus
{
    const _P_TO_SEND = 'P_TO_SEND';
    const _P_SEND_KO = 'P_SEND_KO';
    const _P_PENDING_AT_ANALYZER = 'P_PENDING_AT_ANALYZER';
    const _P_SEND_OK = 'P_SEND_OK';
    const _P_MANUAL = 'P_MANUAL';
    const _P_SKIPPED = 'P_SKIPPED';
    const _P_SEND_EXPIRED = 'P_SEND_EXPIRED';
}
