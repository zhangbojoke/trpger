<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/7/26
 * Time: 17:51
 */

namespace common\models;

use yii\db\Expression;

/**
 * Class Gold
 * @property User $user
 * @package gacha\models
 *
 */
class Gold
{
    const ADDTION = 1;
    const REDUCE = 0;

    private $change;
    private $user;
    private $sql;
    private $shellChange;
    private $switch = true;
    private static $_instance;

    protected function __construct(User $user)
    {
        $this->user = $user;
    }

    //当毁灭时保存日志
//    function __destruct()
//    {
//        $this->execute();
//    }

    public function execute()
    {
        if ($this->change == 0) {
            return false;
        }
        if ($this->switch) {
            $this->user->gold = new Expression('gold +'.$this->change);
            if($this->shellChange > 0){
                $this->user->shell = new Expression('shell +'.$this->change);
            }
            $this->switch = false;
            \Yii::$app->db->createCommand()->batchInsert(Wallet::tableName(), ['user_id', 'type', 'number', 'action', 'created_at','shell'], $this->sql)->execute();
            unset(static::$_instance[$this->user->id]);
//            return $this->user->getDb()->createCommand($sql)->execute();
            return $this->user->update(false);
        }
        return false;
    }


    //设置变化值
    public function setChange($gold,$action = false,$time = 0)
    {
        $this->change = $this->change + $gold;
        if($gold < 0){
            $this->shellChange = $this->shellChange + $gold;
        }

        $temp = [];
        $type = $gold > 0 ? self::ADDTION : self::REDUCE;
        $temp[0] = $this->user->id;
        $temp[1] = $type;
        $temp[2] = $gold;
        if(!$action){
            $action = \Yii::$app->controller->action->id;
        }
        $temp[3] = $action;
        $temp[4] = $time?:time();
        $temp[5] = 1;
        $tempShell = $temp;
        $tempShell[5] =0;
        $this->sql[] = $temp;
        $this->sql[] = $tempShell;
        return $this;
    }

    public function getUserId(){
        return $this->user->id;
    }

    /**
     * @param User $user
     * @return Gold
     */
    public static function getInstance(User $user)
    {
        if (!isset(static::$_instance[$user->id])) {
                static::$_instance[$user->id] = new self($user);
        }
        return static::$_instance[$user->id];
    }
}