<?php
namespace console\controllers;

use common\models\AppletsVideo;
use yii\console\Controller;

class UpdateVideoController extends Controller
{
    public function actionIndex()
    {
        $appletVideo = AppletsVideo::find()
            ->all();

        foreach ($appletVideo as $video) {
            $video->video_url = "http://cswxap.cdn.bcebos.com/{$video->id}.mp4";
            $video->thumb = "http://cswxap.cdn.bcebos.com/{$video->id}.png";

            var_dump($video);
//            $video->save();
        }
    }
}