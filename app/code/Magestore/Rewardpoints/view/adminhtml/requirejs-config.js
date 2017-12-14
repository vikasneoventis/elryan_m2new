/**
 * Magestore
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Magestore.com license that is
 * available through the world-wide-web at this URL:
 * http://www.magestore.com/license-agreement.html
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category    Magestore
 * @package     Magestore_Rewardpoints
 * @copyright   Copyright (c) 2012 Magestore (http://www.magestore.com/)
 * @license     http://www.magestore.com/license-agreement.html
 */

var config = {
    map: {
       '*': {
          
       }
    },
    paths: {
        'magestore/rangeSlider': 'Magestore_Rewardpoints/js/ion.rangeSlider'
    },
    shim: {
        'magestore/rangeSlider': {
            deps: ['jquery']
        },

    }
};