<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<?php
    $form = ActiveForm::begin();
?>

<?= $form->field($model, 'name')?>
<?= $form->field($model, 'app_id')?>
<?= $form->field($model, 'app_secret')?>
<?= $form->field($model, 'call_domain')?>
<h3>分享设置</h3>
<?= $form->field($model, 'share_title')?>
<?= $form->field($model, 'share_description')->textarea()?>
<?= $form->field($model, 'share_thumb')?>
<?= $form->field($model, 'share_url')?>

<?= Html::submitButton('提交保存', ['class' => 'btn btn-block btn-success'])?>
<?php
    ActiveForm::end();
?>
