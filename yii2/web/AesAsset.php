<?php
/**
 * @link http://github.com/ftlmars/javascript-aes/
 * @license https://en.wikipedia.org/wiki/MIT_License
 */

namespace ftlmars\aes\yii2\web;

use yii\web\AssetBundle;

/**
 * This asset bundle provides the [Aes javascript library](http://github.com/ftlmars/javascript-aes/)
 */
class AesAsset extends AssetBundle
{
    public $sourcePath = '@vendor/ftlmars/javascript-aes';
    
    public $js = [
        'aes.js',
    ];
}
