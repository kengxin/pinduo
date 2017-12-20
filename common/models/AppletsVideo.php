<?php
namespace common\models;

use Yii;
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
            [['name', 'vid', 'pause_time', 'share_num', 'share_thumb'], 'required'],
            [['name', 'vid', 'share_thumb'], 'string'],
            [['pause_time', 'share_num'], 'integer']
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => '标题',
            'vid' => '视频Vid',
            'pause_time' => '暂停时间(秒)',
            'share_num' => '分享次数',
            'share_thumb' => '分享封面',
            'created_at' => '创建时间'
        ];
    }

    public function getVideoUrl()
    {
        $cache = Yii::$app->cache;
        if (($videoUrl = $cache->get("video_url_cache: {$this->vid}"))) {
            return $videoUrl;
        }

        $url = "https://h5vv.video.qq.com/getinfo?charge=0&vid={$this->vid}&defaultfmt=auto&otype=json";
        $data = $this->curlGet($url);

        $guid = $this->getSubStr($data,'fmd5":"', '","fn":');
        $vkey = $this->getSubStr($data,'"fvkey":"', '","head');

        $videoUrl = "http://ugcyd.qq.com/flv/139/175/{$this->vid}.mp4?guid={$guid}&vkey={$vkey}";
        $cache->set("video_url_cache: {$this->vid}", $videoUrl, 30);

        return $videoUrl;
    }

    public function getSubStr($str, $leftStr, $rightStr)
    {
        $left = strpos($str, $leftStr);
        $right = strpos($str, $rightStr, $left);
        if($left < 0 or $right < $left){
            return false;
        }
        return substr($str, $left + strlen($leftStr), $right - $left - strlen($leftStr));
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
}