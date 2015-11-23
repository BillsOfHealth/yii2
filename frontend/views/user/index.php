<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use kartik\widgets\SideNav;


//echo (Yii::$app->user->isGuest);
//if (!\Yii::$app->user->isGuest) {
//            return $this->goHome();
//        }
//echo (Yii::$app->user->identity->username);

$this->title = 'My Dashboard ('. Yii::$app->user->identity->username.')' ;
$this->params['breadcrumbs'][] = $this->title;
$type = 'SideNav::TYPE_DEFAULT';
echo SideNav::widget([
    'type' => $type,
    'encodeLabels' => false,
    'heading' => 'Dashboard',
    'items' => [
        // Important: you need to specify url as 'controller/action',
        // not just as 'controller' even if default action is used.
        ['label' => 'Home', 'icon' => 'home', 'url' => ['/site/index']],

       ['label' => 'Profile', 'icon' => 'user', 'url' => ['user/update']],
    ],
]);  


