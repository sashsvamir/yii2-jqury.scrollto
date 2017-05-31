<?php
namespace sashsvamir\scrollto;

use yii\web\AssetBundle;


class ScrollToAsset extends AssetBundle
{
    public $sourcePath = '@bower/jquery.scrollTo';
    public $js = [
        'jquery.scrollTo.min.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset'
    ];
}