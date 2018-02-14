<?php
namespace common\components;

use Yii;
use yii\base\Component;
use common\models\year\YearUser as User;

class YearUser extends Component
{
    public $login = false;

    public $id;

    public $openid;

    public $unionid;

    public $nickName;

    public $avatarUrl;

    public $session_key;

    public function __construct()
    {
        if (isset($_SERVER['HTTP_AUTHORIZATION']) && !empty($_SERVER['HTTP_AUTHORIZATION'])) {
            $token = 'year_' . $_SERVER['HTTP_AUTHORIZATION'];
            $redis = Yii::$app->redis;

            $privateInfo = $redis->get($token);
            if ($privateInfo) {
                $privateInfo = json_decode($privateInfo, true);

                $this->login = true;

                $this->openid = $privateInfo['openid'];
                $this->unionid = 0;
                $this->session_key = $privateInfo['session_key'];

                if (($userInfo = User::find()
                    ->select(['id', 'nickName', 'avatarUrl'])
                    ->where(['openid' => $privateInfo['openid']])
                    ->one()) != null) {

                    $this->id = $userInfo->id;
                    $this->nickName = $userInfo->nickName;
                    $this->avatarUrl = $userInfo->avatarUrl;
                }

            }
        }

        return parent::__construct();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getOpenId()
    {
        return $this->openid;
    }
}