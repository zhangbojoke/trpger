<?php
namespace common\components\wechat;

use EasyWeChat\Core\Http;
use EasyWeChat\Foundation\Application;
use Yii;
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/6
 * Time: 13:52
 */
class wxSdk
{
    private $app;
    public $server;
    public $user;
    public $menu;
    public $qrcode;
    public $merchant_pay;
    public $tag;
    public $payment;
    public $oauth;
    public $js;
    public $notice;
    protected $access_token;

    public function initUserAttributes()
    {
        // TODO: Implement initUserAttributes() method.
    }

    public function __construct(array $config = [])
    {
        $options = [
            'debug' => false,
            'app_id' => '',//Yii::$app->wxsdk->getAppID(),
            'secret' => '',//Yii::$app->wxsdk->getAppSecret(),
            'token' => 'wxtest30123',
            'payment' => [
                'key' => '',//Yii::$app->wxsdk->getKey(),
                'merchant_id' => '',//Yii::$app->wxsdk->getMCHID(),
                'cert_path' => '/usr/local/www/cert/apiclient_cert.pem', // XXX: 绝对路径！！！！
                'key_path' => '/usr/local/www/cert/apiclient_key.pem',
                'notify_url' => $_SERVER['HTTP_HOST'],
            ],
            'oauth' => [
                'scopes' => ['snsapi_base'],
                'callback' => '/site/login-oauth',
            ]
            // ...
        ];
        $this->app = new Application($options);
        $this->access_token = $this->app->access_token->getToken();
        $this->server = $this->app->server;
        $this->user = $this->app->user;
        $this->menu = $this->app->menu;
        $this->qrcode = $this->app->qrcode;
        $this->tag = $this->app->user_tag;
        $this->payment = $this->app->payment;
        $this->oauth = $this->app->oauth;
        $this->js = $this->app->js;
        $this->notice = $this->app->notice;
        $this->merchant_pay = $this->app->merchant_pay;
        Http::setDefaultOptions($this->app['config']->get('guzzle', ['timeout' => 120.0]));
    }
}