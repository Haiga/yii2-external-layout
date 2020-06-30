<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
//        'css/site.css',


        "reveal/lib/bootstrap/css/bootstrap.min.css",
        "reveal/lib/font-awesome/css/font-awesome.min.css",
        "reveal/lib/animate/animate.min.css",
        "reveal/lib/ionicons/css/ionicons.min.css",
        "reveal/lib/owlcarousel/assets/owl.carousel.min.css",
        "reveal/lib/magnific-popup/magnific-popup.css",
        "reveal/lib/ionicons/css/ionicons.min.css",
        "reveal/css/style.css",
        'css/site.css',
    ];
    public $js = [

        //dependendo do que colocar os js do yii podem não fucionar (geralmente bootstrap e jquery)

//        "reveal/lib/jquery/jquery.min.js",
//        "reveal/lib/jquery/jquery-migrate.min.js",
//        "reveal/lib/bootstrap/js/bootstrap.bundle.min.js",
        "reveal/lib/easing/easing.min.js",
        "reveal/lib/superfish/hoverIntent.js",
        "reveal/lib/superfish/superfish.min.js",
        "reveal/lib/wow/wow.min.js",
        "reveal/lib/owlcarousel/owl.carousel.min.js",
        "reveal/lib/magnific-popup/magnific-popup.min.js",
        "reveal/lib/sticky/sticky.js",
        "reveal/https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY",
        "reveal/contactform/contactform.js",
        "reveal/js/main.js",

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
