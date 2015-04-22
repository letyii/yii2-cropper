<?php
/**
 * @copyright Copyright (c) 2014 Let.,ltd
 * @author Ngua Go <nguago@let.vn>
 */

namespace letyii\cropper;
use yii\helpers\Html;
use yii\helpers\Json;
use letyii\tinymce\TinymceAssets;

class Cropper
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
