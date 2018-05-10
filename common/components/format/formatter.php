<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/6
 * Time: 15:44
 */

namespace common\components\format;


class formatter extends \yii\i18n\Formatter
{
    public function asIsTrue($value){
        return $value?'是':'否';
    }
}