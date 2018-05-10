<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\user */

$this->title = '用户:'.$model->username;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
?>
<div class="user-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'username',
            [
                'attribute'=>'role',
                'format'=>'html',
                'value'=>function($model){
                    $str = '';
                    $arr = $model->getRolesList();
                    foreach($model->getUserRoles() as $item){
                        $str .= '<span class="label label-default" style="margin-right:5px;">'.$arr[$item].'</span>';
                    }
                    return $str;
                }
            ],
            'status:isTrue',
            'created_at:datetime',
            'updated_at:datetime',
        ],
    ]) ?>

</div>
