<?php
use yii\helpers\Html;
?>
<p>Вы добавили следующую информацию:</p>

<ul>
    <li><label>Main text</label>: <?= Html::encode($model->mainText) ?></li>
    <li><label>Description</label>: <?= Html::encode($model->description) ?></li>
    <li><label>Link</label>: <?= Html::encode($model->link) ?></li>
    <li><label>Image</label>: <?= Html::encode($model->img) ?></li>
</ul>