<?php
use yii\helpers\Html;
use yii\grid\GridView;

$this->title = '截图日志管理';
?>

<section class="wrapper">
    <h2><?= $this->title?></h2>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'id',
            [
                'label' => '手机品牌',
                'value' => function($model) {
                    $json = json_decode($model->info);
                    return $json->brand;
                }
            ],
            [
                'label' => '手机型号',
                'value' => function($model) {
                    $json = json_decode($model->info);
                    return $json->model;
                }
            ],
            'send_ip',
            'created_at:datetime'
        ]
    ])?>
</section>
