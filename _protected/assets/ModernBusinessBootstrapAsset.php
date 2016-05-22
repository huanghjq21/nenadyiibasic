<?php
namespace app\assets;

use yii\web\AssetBundle;
use Yii;
 
class ModernBusinessBootstrapAsset extends AssetBundle
{
	public $basePath = '@webroot';
	public $baseUrl = '@themes';
	
	public $css = [
		'css/modern-business.css',
	];
	
	public $js = [
	];
	
	public $depends = [
		'yii\bootstrap\BootstrapAsset',
	];
}