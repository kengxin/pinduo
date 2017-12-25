<?php
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    $this->title = '添加公众号';
?>

<section class="wrapper">
    <h3><?= $this->title?></h3>
    <?=
    $this->render('_form', [
        'model' => $model
    ]);
    ?>
</section>