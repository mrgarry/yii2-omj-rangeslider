<?php

namespace omj;

/**
 * rangeslider.js asset
 */

use yii\web\AssetBundle;

class RangeSliderAsset extends AssetBundle
{
    public $sourcePath = '@bower/rangeslider.js/dist';
    public $css = ['rangeslider.css'];
    public $js = ['rangeslider.js'];
    
}
