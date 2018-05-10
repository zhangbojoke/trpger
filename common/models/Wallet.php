<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "wallet_log".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $type
 * @property string $action_id
 * @property integer $created_at
 * @property integer $shell
 */
class Wallet extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wallet_log';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'created_at'], 'required'],
            [['user_id', 'type', 'created_at', 'shell'], 'integer'],
            [['action_id'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'type' => 'Type',
            'action_id' => 'Action ID',
            'created_at' => 'Created At',
            'shell' => 'Shell',
        ];
    }
}
