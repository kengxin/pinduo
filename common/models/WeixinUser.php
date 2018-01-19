<?php
namespace common\models;

use yii\db\ActiveRecord;

class WeixinUser extends ActiveRecord
{
    public static function tableName()
    {
        return 'weixinUser';
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
}