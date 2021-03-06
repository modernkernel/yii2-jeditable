<?php
/**
 * @author Harry Tang <harry@powerkernel.com>
 * @link https://powerkernel.com
 * @copyright Copyright (c) 2017 Power Kernel
 */

namespace powerkernel\jeditable;


use yii\web\AssetBundle;

/**
 * Class Asset
 * @package powerkernel\jeditable
 */
class JeditableAsset extends AssetBundle
{
    public $sourcePath = '@vendor/powerkernel/yii2-jeditable/assets/js';
    public $js = [
        'jquery.jeditable.js'
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];

} 