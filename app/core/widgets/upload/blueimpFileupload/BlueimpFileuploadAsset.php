<?php
/**
 * YesCMS
 * Copyright (c) 2016.
 */
namespace common\widgets\upload\blueimpFileupload;

use yii\web\AssetBundle;

/**
*
* @package hass\package_name
* @author zhepama <zhepama@gmail.com>
* @since 0.1.0
 */
class BlueimpFileuploadAsset extends AssetBundle
{
    public $sourcePath = '@bower/blueimp-file-upload';

    public $css = [
        'css/jquery.fileupload.css'
    ];

    public $js = [
        'js/vendor/jquery.ui.widget.js',
        'js/jquery.iframe-transport.js',
        'js/jquery.fileupload.js',
        'js/jquery.fileupload-process.js',
        'js/jquery.fileupload-image.js',
        'js/jquery.fileupload-validate.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset',
        'core\widgets\upload\blueimpFileupload\BlueimpLoadImageAsset'
    ];
}
