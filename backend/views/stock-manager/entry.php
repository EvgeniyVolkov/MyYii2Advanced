<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'mainText')->label('Main text') ?>

<?= $form->field($model, 'description') ?>

<?= $form->field($model, 'link') ?>

<?= $form->field($model, 'img')->label('Image') ?>

    <div class="form-group">
        <?= Html::submitButton('Добавить', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>