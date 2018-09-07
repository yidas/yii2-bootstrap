<?php
namespace yidas\yii\bootstrap;
/**
 * Bootstrap Dependent Source Asset 
 *
 * @author  Nick Tsai <myintaer@gmail.com>
 * @version 4.0.0
 * @package twbs/bootstrap
 * @see     https://github.com/twbs/bootstrap
 */
class BootstrapAsset extends \yii\web\AssetBundle
{
    /**
     * Bundle with Dependent Source Package
     */
    public $sourcePath = '@vendor/twbs/bootstrap';
    
    public $css = [
        'dist/css/bootstrap.min.css',
    ];
    
    public $js = [
        'dist/js/bootstrap.min.js'
    ];
    
    /**
     * @var string CDN version for CDN mode, eg. `'4.1.3'`
     */
    public $cdnVersion = '4.1.3';
    
    /**
     * @var bool Enable or disable CDN mode
     */
    public $cdn = false;
    
    /**
     * @var array Sprintf format or fixed URL of Bootstrap CDN URL
     */
    public $cdnCSS = ['https://stackpath.bootstrapcdn.com/bootstrap/%s/css/bootstrap.min.css'];
    
    /**
     * @var array Sprintf format or fixed URL of Bootstrap CDN URL
     */
    public $cdnJS = ['https://stackpath.bootstrapcdn.com/bootstrap/%s/js/bootstrap.min.js'];
    
    /**
     * @var boolean Enable to auto depends \yidas\yii\jquery\JqueryAsset
     * @see https://github.com/yidas/yii2-jquery
     */
    public $jquery = false;
    
    /**
     * Source handler
     */
    public function init()
    {
        // CDN mode
        if ($this->cdn) {
            // Unset sourcePath
            $this->sourcePath = NULL;
            // Rewrite CSS
            $this->css = [];
            foreach ($this->cdnCSS as $key => $url) {
                $this->css[] = sprintf($url, $this->cdnVersion);
            }
            // Rewrite JS
            $this->js = [];
            foreach ($this->cdnJS as $key => $url) {
                $this->js[] = sprintf($url, $this->cdnVersion);
            }
        }
        
        // jQuery Dependency
        if ($this->jquery) {
             $this->depends[] = 'yidas\yii\jquery\JqueryAsset';
        }
        
        parent::init();
    }
}
