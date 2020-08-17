<?php

namespace app\assets;

use yii\web\AssetBundle;

class MyAsset extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'bootstrap/css/superhero-bootstrap.min.css',
        'http://fonts.googleapis.com/css?family=Lobster|Marck+Script&subset=latin,cyrillic',
        'css/animate.css',
        'css/a.css',
        'source/jquery.fancybox.css?v=2.1.5',
        'source/helpers/jquery.fancybox-buttons.css?v=1.0.5',
        'source/helpers/jquery.fancybox-thumbs.css?v=1.0.7',
        
    ];
    public $js = [
        'jquery/jquery.js',
        'bootstrap/js/bootstrap.js',
        'js/a.js',
        'js/jquery.cross-slide.js',
        'lib/jquery.mousewheel-3.0.6.pack.js',
        'source/jquery.fancybox.pack.js?v=2.1.5',
        'source/helpers/jquery.fancybox-buttons.js?v=1.0.5',
        'source/helpers/jquery.fancybox-media.js?v=1.0.6',
        'source/helpers/jquery.fancybox-thumbs.js?v=1.0.7',
        'js/fancybox.js',
            /*
              'lib/fancybox/jquery.mousewheel-3.0.6.pack.js',
              'lib/fancybox/jquery.fancybox.pack.js',
              'Yandex.Metrika.js'
             */
    ];
    public $depends = [
            //   'yii\web\YiiAsset',
            //   'yii\bootstrap\BootstrapAsset',
    ];

}
