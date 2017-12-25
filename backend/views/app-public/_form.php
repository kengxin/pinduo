<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<?php
    $form = ActiveForm::begin();
?>

<?= $form->field($model, 'app_name')?>
<?= $form->field($model, 'app_id')?>
<?= $form->field($model, 'app_secret')?>

<?= Html::submitButton('提交保存', ['class' => 'btn btn-block btn-success'])?>
<?php
    ActiveForm::end();
?>
