<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<?php
    $form = ActiveForm::begin();
?>

<?= $form->field($model, 'name')?>
<?= $form->field($model, 'video_url')?>
<?= $form->field($model, 'pause_time')?>
<?= $form->field($model, 'share_num')?>
<?= $form->field($model, 'share_thumb')?>

<?= Html::submitButton('提交保存', ['class' => 'btn btn-block btn-success'])?>
<?php
    ActiveForm::end();
?>
