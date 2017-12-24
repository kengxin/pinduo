<?php
use yii\helpers\Html;
use yii\grid\GridView;

$this->title = '小程序管理';
?>

<section class="wrapper">
    <h2><?= $this->title?></h2>
    <?= Html::a('添加小程序', ['/applets/create'], ['class' => 'btn btn-success', 'style' => 'margin-bottom: 20px']);?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'id',
            'name',
            'app_id',
            'call_domain',
            [
                'attribute' => 'status',
                'value' => function ($model) {
                    return $model->status == 1 ? '开启' : '关闭';
                }
            ],
            [
                'attribute' => 'is_redirect',
                'value' => function ($model) {
                    return $model->status == 1 ? '开启' : '关闭';
                }
            ],
            'created_at:datetime',
            [
                'class' => 'yii\grid\ActionColumn'
            ]
        ]
    ])?>
</section>
