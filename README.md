<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="85px">
    </a> &nbsp; 
    <a href="https://getbootstrap.com/" target="_blank">
        <img src="https://camo.githubusercontent.com/eada7452c242d40867df5f978be99825c9ead3a8/68747470733a2f2f76342d616c7068612e676574626f6f7473747261702e636f6d2f6173736574732f6272616e642f626f6f7473747261702d736f6c69642e737667" height="80px">
    </a>
    <!--
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a> 
    -->
    <h1 align="center">Bootstrap Extension for Yii 2 </h1>
    <br>
</p>

Bootstrap Asset Bundle extension for Yii2 framework with official Composer

[![Latest Stable Version](https://poser.pugx.org/yidas/yii2-bootstrap/v/stable?format=flat-square)](https://packagist.org/packages/yidas/yii2-bootstrap)
[![Latest Unstable Version](https://poser.pugx.org/yidas/yii2-bootstrap/v/unstable?format=flat-square)](https://packagist.org/packages/yidas/yii2-bootstrap)
[![License](https://poser.pugx.org/yidas/yii2-bootstrap/license?format=flat-square)](https://packagist.org/packages/yidas/yii2-bootstrap)

This is the [Bootstrap](https://getbootstrap.com/) extension for [Yii framework 2.0](http://www.yiiframework.com/). It encapsulates [Bootstrap](https://github.com/twbs/bootstrap) distribution assets and thus makes using Bootstrap in Yii applications extremely easy.

---

REQUIREMENTS
------------

This library requires the following:

- PHP 5.4.0+
- yiisoft/yii2 2.0.6+
- twbs/bootstrap 4.0+
- yidas/yii2-jquery 2.0+

---


INSTALLATION
------------

The preferred install way is through [Composer](http://getcomposer.org/download/):

```
composer require yidas/yii2-bootstrap
```

Version options refered Bootstrap release:

```
composer require yidas/yii2-bootstrap ~3.0
composer require yidas/yii2-bootstrap ~4.0
```

Or you could edit `composer.json` with adding package in require section then run `composer update`.

```
"yidas/yii2-bootstrap": "*"
```

---

CONFIGURATION
-------------

Register or depend Asset into your application:

```php
yidas\yii\bootstrap\BootstrapAsset
```
    
For example, to register Bootstrap assets in view :

```php
\yidas\yii\bootstrap\BootstrapAsset::register($this);
```
    
Or as dependency in your app asset bundle :    

```php
namespace app\assets;
use yii\web\AssetBundle;
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yidas\yii\bootstrap\BootstrapAsset'
    ];
}
```


### CDN Asset Mode

You could switch Asset to use CDN distribution by configuring `config` file:

```php
'components' => [
    'assetManager' => [
        'bundles' => [
            'yidas\yii\bootstrap\BootstrapAsset' => [
                'cdn' => true,
                // 'cdnVersion' => '4.1.3',
            ],
        ],
    ],
],
```

#### Specify a CDN source

You could also specify CDN source you like:

```php
'assetManager' => [
    'bundles' => [
        'yidas\yii\fontawesome\FontawesomeAsset' => [
            'cdn' => true,
            'cdnCSS' => ['https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css'],
            'cdnJS' => ['https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'],
        ],
    ],
],
```


### jQuery Dependency

This Bootstrap extension required [jQuery](https://github.com/jquery/jquery) Javascript library, you could set `yii\web\JqueryAsset` in `$depends`, or simplly depends a asset included your own jQuery JS file whether is CDN or not.

```php
    public $depends = [
        //'yii\web\JqueryAsset',
        'yidas\yii\jquery\JqueryAsset',
        'yidas\yii\bootstrap\BootstrapAsset'
    ];
```

Another way, you could easliy enable jquery dependency by setting `jquery` property form `BootstrapAsset`:

```php
'components' => [
    'assetManager' => [
        'bundles' => [
            'yidas\yii\bootstrap\BootstrapAsset' => [
                'jquery' => true,
                // 'cdn' => true,
            ],
            'yidas\yii\jquery\JqueryAsset' => [
                // 'cdn' => true,
            ],
        ],
    ],   
],
```

---

USAGE
-----

### Version Control

#### Update dependent packages

    composer update yidas/yii2-bootstrap

#### Update newest Bootstrap version

    composer update twbs/bootstrap

#### Specify a Bootstrap version

    composer require twbs/bootstrap 4.1.3
    
    
    
