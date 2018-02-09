<?php
namespace console\controllers;

use common\models\AppletsVideo;
use yii\console\Controller;

class UpdateVideoController extends Controller
{
    public function updateVideoUrl()
    {
        $appletVideo = AppletsVideo::find()
            ->all();

        foreach ($appletVideo as $video) {
            $video->video_url = "http://vapp1.cdn.bcebos.com/{$video->id}.mp4";
            $video->share_thumb = "http://vapp1.cdn.bcebos.com/{$video->id}.png";

            $video->save();
        }
    }
}