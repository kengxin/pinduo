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
<?= $form->field($model, 'public_id')->dropDownList(\common\models\AppPublic::find()->select(['app_name', 'id'])->indexBy('id')->column())?>
<?= $form->field($model, 'status')->radioList([0 => '关闭', 1 => '开启'])?>
<?= $form->field($model, 'is_redirect')->radioList([0 => '关闭', 1 => '开启'])?>
<h3>分享设置</h3>
<?= $form->field($model, 'share_title')?>
<?= $form->field($model, 'share_description')->textarea()?>
<?= $form->field($model, 'share_thumb')?>
<?= $form->field($model, 'share_url')?>

<?= Html::submitButton('提交保存', ['class' => 'btn btn-block btn-success'])?>
<?php
    ActiveForm::end();
?>
