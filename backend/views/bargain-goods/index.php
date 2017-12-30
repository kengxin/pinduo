<?php
use yii\helpers\Html;
use yii\grid\GridView;

$this->title = '砍价商品管理';
?>

<section class="wrapper">
    <h2><?= $this->title?></h2>
    <?= Html::a('添加商品', ['/bargain-goods/create'], ['class' => 'btn btn-success', 'style' => 'margin-bottom: 20px']);?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'id',
            'name',
            'price',
            'discount',
            'closed_at:datetime',
            'created_at:datetime',
            [
                'class' => 'yii\grid\ActionColumn'
            ]
        ]
    ])?>
</section>
