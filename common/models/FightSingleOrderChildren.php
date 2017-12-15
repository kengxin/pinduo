<?php
namespace common\models;

use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

class FightSingleOrderChildren extends ActiveRecord
{
    const TYPE_PUBLIC = 0;

    const TYPE_CHIEF = 1;

    public $avatar = [
        'http://pinphoto.oss-cn-beijing.aliyuncs.com/u=1042388364,3646583088&fm=27&gp=0.jpg',
        'http://pinphoto.oss-cn-beijing.aliyuncs.com/u=1092762444,1892033882&fm=27&gp=0.jpg',
        'http://pinphoto.oss-cn-beijing.aliyuncs.com/u=1226427713,1479855147&fm=27&gp=0.jpg',
        'http://pinphoto.oss-cn-beijing.aliyuncs.com/u=1366110479,2237917364&fm=27&gp=0.jpg',
        'http://pinphoto.oss-cn-beijing.aliyuncs.com/u=1472946305,4176385918&fm=27&gp=0.jpg',
        'http://pinphoto.oss-cn-beijing.aliyuncs.com/u=1534024140,1951694685&fm=27&gp=0.jpg',
        'http://pinphoto.oss-cn-beijing.aliyuncs.com/u=1680496966,502859885&fm=27&gp=0.jpg',
        'http://pinphoto.oss-cn-beijing.aliyuncs.com/u=1732675292,1531479085&fm=27&gp=0.jpg',
        'http://pinphoto.oss-cn-beijing.aliyuncs.com/u=1775394479,1917682410&fm=27&gp=0.jpg',
        'http://pinphoto.oss-cn-beijing.aliyuncs.com/u=1790899198,2679235411&fm=27&gp=0.jpg',
        'http://pinphoto.oss-cn-beijing.aliyuncs.com/u=1950189897,252250850&fm=27&gp=0.jpg',
        'http://pinphoto.oss-cn-beijing.aliyuncs.com/u=1961838080,1061592220&fm=27&gp=0.jpg',
        'http://pinphoto.oss-cn-beijing.aliyuncs.com/u=2034688848,4002892145&fm=27&gp=0.jpg',
        'http://pinphoto.oss-cn-beijing.aliyuncs.com/u=2116940343,1115855987&fm=27&gp=0.jpg',
        'http://pinphoto.oss-cn-beijing.aliyuncs.com/u=2316623015,3020684914&fm=27&gp=0.jpg',
        'http://pinphoto.oss-cn-beijing.aliyuncs.com/u=2339395597,3573367696&fm=27&gp=0.jpg',
        'http://pinphoto.oss-cn-beijing.aliyuncs.com/u=2373400689,752627295&fm=27&gp=0.jpg',
        'http://pinphoto.oss-cn-beijing.aliyuncs.com/u=2400817571,236211694&fm=27&gp=0.jpg',
        'http://pinphoto.oss-cn-beijing.aliyuncs.com/u=2400900292,2486473598&fm=27&gp=0.jpg',
        'http://pinphoto.oss-cn-beijing.aliyuncs.com/u=2467643309,785689395&fm=27&gp=0.jpg',
        'http://pinphoto.oss-cn-beijing.aliyuncs.com/u=2473268672,3078880424&fm=27&gp=0.jpg',
        'http://pinphoto.oss-cn-beijing.aliyuncs.com/u=2510057322,2452415311&fm=27&gp=0.jpg',
        'http://pinphoto.oss-cn-beijing.aliyuncs.com/u=2516137627,3006676270&fm=27&gp=0.jpg',
        'http://pinphoto.oss-cn-beijing.aliyuncs.com/u=2526978524,1699318122&fm=27&gp=0.jpg',
        'http://pinphoto.oss-cn-beijing.aliyuncs.com/u=2861537593,1480645742&fm=27&gp=0.jpg',
        'http://pinphoto.oss-cn-beijing.aliyuncs.com/u=2864373914,3851526397&fm=27&gp=0.jpg',
        'http://pinphoto.oss-cn-beijing.aliyuncs.com/u=2976738430,105152112&fm=27&gp=0.jpg',
        'http://pinphoto.oss-cn-beijing.aliyuncs.com/u=3104524442,3792181203&fm=27&gp=0.jpg',
        'http://pinphoto.oss-cn-beijing.aliyuncs.com/u=310820407,3289399449&fm=27&gp=0.jpg',
        'http://pinphoto.oss-cn-beijing.aliyuncs.com/u=3224662811,3105432999&fm=27&gp=0.jpg',
        'http://pinphoto.oss-cn-beijing.aliyuncs.com/u=3242474588,1757486867&fm=27&gp=0.jpg',
        'http://pinphoto.oss-cn-beijing.aliyuncs.com/u=3302483459,156838085&fm=27&gp=0.jpg',
        'http://pinphoto.oss-cn-beijing.aliyuncs.com/u=3387150424,971135135&fm=27&gp=0.jpg',
        'http://pinphoto.oss-cn-beijing.aliyuncs.com/u=3433140703,1933166005&fm=27&gp=0.jpg',
        'http://pinphoto.oss-cn-beijing.aliyuncs.com/u=3592318801,644449488&fm=27&gp=0.jpg',
        'http://pinphoto.oss-cn-beijing.aliyuncs.com/u=3594564370,718311466&fm=27&gp=0.jpg',
        'http://pinphoto.oss-cn-beijing.aliyuncs.com/u=3699836557,1200387655&fm=27&gp=0.jpg',
        'http://pinphoto.oss-cn-beijing.aliyuncs.com/u=3975491586,230650090&fm=27&gp=0.jpg',
        'http://pinphoto.oss-cn-beijing.aliyuncs.com/u=4005723371,3932133029&fm=27&gp=0.jpg',
        'http://pinphoto.oss-cn-beijing.aliyuncs.com/u=4062173574,1036285799&fm=27&gp=0.jpg',
        'http://pinphoto.oss-cn-beijing.aliyuncs.com/u=4093694965,3095480378&fm=27&gp=0.jpg',
        'http://pinphoto.oss-cn-beijing.aliyuncs.com/u=418901962,343525913&fm=27&gp=0.jpg',
        'http://pinphoto.oss-cn-beijing.aliyuncs.com/u=4284256039,2997373146&fm=27&gp=0.jpg',
        'http://pinphoto.oss-cn-beijing.aliyuncs.com/u=532399495,2496592683&fm=27&gp=0.jpg',
        'http://pinphoto.oss-cn-beijing.aliyuncs.com/u=568001717,1139197274&fm=27&gp=0.jpg',
        'http://pinphoto.oss-cn-beijing.aliyuncs.com/u=674110703,3628132679&fm=27&gp=0.jpg',
        'http://pinphoto.oss-cn-beijing.aliyuncs.com/u=695808879,1281765205&fm=27&gp=0.jpg',
        'http://pinphoto.oss-cn-beijing.aliyuncs.com/u=735678024,1512600166&fm=27&gp=0.jpg',
        'http://pinphoto.oss-cn-beijing.aliyuncs.com/u=810284532,2678114611&fm=27&gp=0.jpg',
        'http://pinphoto.oss-cn-beijing.aliyuncs.com/u=829450415,3092069776&fm=27&gp=0.jpg'
    ];

    public static function tableName()
    {
        return 'fight_single_order_children';
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
            [['username', 'tel', 'is_chief', 'pid'], 'required'],
            [['username'], 'string'],
            [['tel', 'is_chief', 'pid', 'created_at'], 'integer']
        ];
    }

    public function saveChildren($good_id, $username, $tel, $pid = null)
    {
        if ($pid == null) {
            $fightSingleOrder = new FightSingleOrder();
            $fightSingleOrder->good_id = $good_id;
            if (!$fightSingleOrder->save()) {
                return false;
            }

            $pid = $fightSingleOrder->id;
            $this->is_chief = self::TYPE_CHIEF;
        } else {
            $this->is_chief = self::TYPE_PUBLIC;
        }

        $this->username = $username;
        $this->tel = $tel;
        $this->pid = $pid;

        return $this->save();
    }

    public function fullChildren($pid, $limit)
    {
        if ($pid == null) {
            return false;
        }

        $count = FightSingleOrderChildren::find()
            ->where(['pid' => $pid])
            ->count();

        if ($count >= $limit) {
            return true;
        }

        return false;
    }

    public function getAvatar()
    {
        $length = count($this->avatar);

        return $this->avatar[$this->id % $length];
    }
}