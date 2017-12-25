<?php
use yii\helpers\Html;
use yii\grid\GridView;

$this->title = '公众号管理';
?>

<section class="wrapper">
    <h2><?= $this->title?></h2>
    <?= Html::a('添加公众号', ['/app-public/create'], ['class' => 'btn btn-success', 'style' => 'margin-bottom: 20px']);?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'id',
            'app_name',
            'app_id',
            'app_secret',
            'created_at:datetime',
            [
                'class' => 'yii\grid\ActionColumn'
            ]
        ]
    ])?>
</section>
