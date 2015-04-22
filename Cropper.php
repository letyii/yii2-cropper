<?php
/**
 * Homepage: http://www.tinymce.com/
 * Examples: http://www.tinymce.com/tryit/basic.php
 * Options: http://www.tinymce.com/wiki.php/Configuration
 * 
 * Let Yii2 Tinymce v4.0.21 (Yii Framework 2.0 extention)
 * @copyright Copyright (c) 2014 Let.,ltd
 * @author Ngua Go <nguago@let.vn>
 */

namespace letyii\cropper;
use yii\helpers\Html;
use yii\helpers\Json;
use letyii\tinymce\TinymceAssets;

class Cropper extends \yii\base\Widget
{
    public $src;

    public $data;

    public $file;

    public $dst;

    public $type;

    public $extension;

    public $msg;
    
    public $fileName;

    public $storage;
    
    /**
	 * Initializes the widget.
	 */
	public function init() {
//		 CropperAssets::register($this->view);
	}

	public function test() {
        
	}
}
