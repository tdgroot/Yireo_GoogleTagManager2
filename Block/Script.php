<?php
/**
 * GoogleTagManager2 plugin for Magento
 *
 * @package     Yireo_GoogleTagManager2
 * @author      Yireo (https://www.yireo.com/)
 * @copyright   Copyright 2017 Yireo (https://www.yireo.com/)
 * @license     Open Source License (OSL v3)
 */

declare(strict_types=1);

namespace Yireo\GoogleTagManager2\Block;

use Yireo\GoogleTagManager2\ViewModel\Script as ScriptViewModel;

/**
 * Class \Yireo\GoogleTagManager2\Block\Script
 */
class Script extends Generic
{
    /**
     * @return ScriptViewModel
     */
    public function getViewModel()
    {
        return $this->getData('view_model');
    }
}
