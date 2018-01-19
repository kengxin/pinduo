<?php
namespace common\models;

use Yii;
use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;

class WeixinUser extends ActiveRecord
{
    public static function tableName()
    {
        return 'weixinUser';
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

    public function rules()
    {
        return [
            [['openid', 'nickName', 'avatarUrl'], 'required'],
            [['openid', 'unionid', 'nickName', 'avatarUrl'], 'string'],
            [['gender', 'created_at'], 'integer']
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'Id',
            'openid' => 'OpenId',
            'unionid' => 'UnionId',
            'nickName' => '名字',
            'avatarUrl' => '头像',
            'gender' => '性别',
            'created_at' => '注册时间'
        ];
    }

    public function saveUser($userInfo)
    {
        $this->nickName = $userInfo['nickName'];
        $this->avatarUrl = $userInfo['avatarUrl'];
        $this->gender = $userInfo['gender'];

        $this->openid = Yii::$app->weixinUser->openid;
        $this->unionid = '123';

        return $this->save();
    }

}