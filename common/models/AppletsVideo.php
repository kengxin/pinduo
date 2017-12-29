<?php
namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

class AppletsVideo extends ActiveRecord
{
    public $uid = 800007197;
    public $token = 'Ogv7LiDXGlrHdBFfexIQ';

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

    public function getVideoUrl($video_url)
    {
        $vid = 'l1421bkulnq';
        $url = "https://h5vv.video.qq.com/getinfo?charge=0&vid={$vid}&defaultfmt=auto&otype=json";
        $data = $this->curlGet($url);

        $vkey=$this->getSubstr($data,'"fvkey":"','","head');

        $qcurl1 = "http://ugcyd.qq.com/flv/139/175/{$vid}.mp4?vkey={$vkey}";

	    return $qcurl1;
}

    public function curlGet($url)
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $output = curl_exec($ch);

        curl_close($ch);

        return $output;
    }

    function getSubstr($str, $leftStr, $rightStr)
    {
        $left = strpos($str, $leftStr);
        $right = strpos($str, $rightStr,$left);
        if($left < 0 OR $right < $left){
            return '';
        }

        return substr($str, $left + strlen($leftStr), $right-$left-strlen($leftStr));
    }

    public function getList()
    {
        return AppletsVideo::find()
            ->where(['<>', 'id', $this->id])
            ->select(['id', 'name', 'share_thumb'])
            ->limit(5)
            ->asArray()
            ->all();
    }
}