<?php
/**
 * YesCMS
 * Copyright (c) 2016.
 */

namespace core\widgets\upload;

use yii\web\AssetBundle;

class ImageUploadAsset extends AssetBundle
{

    public $sourcePath = '@app/core/widgets/upload/assets';

    public $css = [
        'image-upload.css'
    ];

    public $js = [
        'image-upload.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
        //'common\widgets\upload\blueimpFileupload\BlueimpFileuploadAsset',
        'app\core\misc\blueimpFileupload\BlueimpFileuploadAsset'
    ];
}
