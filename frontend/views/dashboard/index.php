<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;


$this->title = 'Welcome to the Dashboard';
$this->title = ' Dashboard';
$this->params['breadcrumbs'][] =['label' => 'Posts', 'url' => 'http://localhost/myblog/frontend/web/index.php?r=post%2Findex'];




?>
<div class="site-Dashboard">
    <h1><?= Html::encode($this->title) ?></h1>
