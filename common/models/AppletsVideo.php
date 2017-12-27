<?php
namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

class AppletsVideo extends ActiveRecord
{
    public static function tableName()
    {
        return 'applets_video';
    }

    public function rules()
    {
        return [
            [['name', 'video_url', 'pause_time', 'share_num', 'share_thumb'], 'required'],
            [['name', 'video_url', 'share_thumb'], 'string'],
            [['pause_time', 'share_num'], 'integer']
        ];
    }

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at']
                ],
            ],
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => '标题',
            'video_url' => '视频Url',
            'pause_time' => '暂停时间(秒)',
            'share_num' => '分享次数',
            'share_thumb' => '分享封面',
            'created_at' => '创建时间'
        ];
    }

    public function getList()
    {
        return AppletsVideo::find()
            ->where(['<>', 'id', $this->id])
            ->select(['id', 'name', 'video_url'])
            ->limit(5)
            ->asArray()
            ->all();
    }
}