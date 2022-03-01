<?php

/* @var $this yii\web\View */

/* @var $prevPageUrl string */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>e
        This is the About page. You may modify the following file to customize its content:
    </p>

    <a href="<?= $prevPageUrl ?>" target="_blank">Предыдущая страница</a><br>

    <code><?= __FILE__ ?></code>


</div>
