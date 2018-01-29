<?php
namespace common\models;

use Yii;
use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;

class WeixinUser extends ActiveRecord
{
    public static function tableName()
    {
        return 'weixin_user';
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
        $nickName = $this->filterEmoji($userInfo['nickName']);
        $this->nickName = empty($nickName) ? '[表情]' : $nickName;
        $this->avatarUrl = $userInfo['avatarUrl'];
        $this->gender = $userInfo['gender'];

        $this->openid = Yii::$app->weixinUser->openid;
        $this->unionid = Yii::$app->weixinUser->unionid;

        if ($this->save()) {
            $gameInfo = new GameInfo();
            return $gameInfo->createUser($this->id);
        }

        return false;
    }

    public function filterEmoji($str)
    {
        $str = preg_replace_callback(
            '/./u',
            function (array $match) {
                return strlen($match[0]) >= 4 ? '' : $match[0];
            },
            $str);

        return $str;
    }

}