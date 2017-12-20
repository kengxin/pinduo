<?php
use yii\helpers\Html;
use yii\grid\GridView;

$this->title = '视频管理';
?>

<section class="wrapper">
    <h2><?= $this->title?></h2>
    <?= Html::a('添加视频', ['/applets-video/create'], ['class' => 'btn btn-success', 'style' => 'margin-bottom: 20px']);?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'id',
            'name',
            'video_url',
            'pause_time',
            'share_num',
            'created_at:datetime',
            [
                'class' => 'yii\grid\ActionColumn'
            ]
        ]
    ])?>
</section>
