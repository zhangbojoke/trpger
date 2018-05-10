<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/**
 * @var $model \common\models\User
 */
$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create User', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
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
            // 'status',
            // 'created_at',
            // 'updated_at',
            [
                    'class' => 'yii\grid\ActionColumn',
                    'template' => '{view}{update}{delete}',
                    'buttons' => [
                    'view' => function ($url) {
                        return Html::a('查看', $url, ['class' => 'btn btn-success']);
                    },
                    'update' => function ($url) {
                        return Html::a('更新', $url,['class'=>'btn btn-primary']);
                    },
                    'delete' => function ($url, $model) {
                        return Html::a('删除', $url, ['class' => 'btn btn-danger']);
                    },

                    ],
                ],
            ]
    ]); ?>
</div>
