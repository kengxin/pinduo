<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<?php
    $form = ActiveForm::begin();
?>

<?= $form->field($model, 'name')?>
<?= $form->field($model, 'description')->textarea()?>
<?= $form->field($model, 'slide')?>
<?= $form->field($model, 'content')?>
<?= $form->field($model, 'price')?>
<?= $form->field($model, 'discount')?>
<?= $form->field($model, 'closed_at')?>

<?= Html::submitButton('提交保存', ['class' => 'btn btn-block btn-success'])?>
<?php
    ActiveForm::end();
?>
