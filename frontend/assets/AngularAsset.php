<?php
/**
 * Created by PhpStorm.
 * User: Юыху
 * Date: 24.02.2016
 * Time: 0:04
 */

namespace frontend\assets;


use yii\web\AssetBundle;
use yii\web\View;

class AngularAsset extends AssetBundle
{
//    public $sourcePath = '/';
    public $js = [
        'angular/angular.js',
        'angular/angular-route/angular-route.js',
        //'angular-strap/dist/angular-strap.js',
    ];
    public $jsOptions = [
        'position' => View::POS_HEAD,
    ];
}