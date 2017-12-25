<?php
    $this->title = '修改公众号';
?>

<section class="wrapper">
    <h3><?= $this->title?></h3>
    <?=
        $this->render('_form', [
            'model' => $model
        ]);
    ?>
</section>