<?php
namespace app\assets;

use yii\web\AssetBundle;
use Yii;

class FontAwesomeAsset extends AssetBundle
{
	public $basePath = '@webroot';
	public $baseUrl = '@themes';
	
	public $css = [			
		'font-awesome/css/font-awesome.css',
		'font-awesome/css/font-awesome.min.css',
	];
	
	public $js = [		
	];
	 
	public $depends = [		
	];
}