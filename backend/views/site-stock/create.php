<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SiteStock */

$this->title = 'Create Site Stock';
$this->params['breadcrumbs'][] = ['label' => 'Site Stocks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-stock-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
