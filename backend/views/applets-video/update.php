<?php
    $this->title = '修改视频';
?>

<section class="wrapper">
    <h3><?= $this->title?></h3>
    <?=
        $this->render('_form', [
            'model' => $model
        ]);
    ?>
</section>