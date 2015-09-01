<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/bootstrap-theme.css',
        'css/bootstrap.min.css',
        'css/admin.css',
        'css/animate.css',
        'css/font-awesome.css',
        'css/font-awesome-animation.min.css',
        'css/style.css',
        'css/style-responsive.css',
        'plugins/bootstrap-datepicker/css/datepicker.css',
        'plugins/checkbox/icheck.css',
        'plugins/checkbox/minimal/green.css',

    ];
    public $js = [
        'js/jquery-2.1.0.js',
        'js/jquery-ui.min.js',
        'js/bootstrap.min.js',
        'js/animated.js',
        'js/form-components.js',
        'js/common-script.js',
        'js/jquery.slimscroll.min.js',
        'js/jPushMenu.js',
        'js/side-chats.js',
        'plugins/bootstrap-datepicker/js/bootstrap-datepicker.js',
        'plugins/checkbox/zepto.js',
        'plugins/checkbox/icheck.js',
        'js/icheck-init.js',
        'js/jquery.slimscroll.min.js',
        'js/icheck.js',
        'plugins/input-mask/jquery.inputmask.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
