<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ArticulosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Articulos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="articulos-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Articulos', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php \yii\widgets\Pjax::begin(['id' => 'admin-crud-id',
                                    'timeout' => false,
                                    'enablePushState' => false,
                                    'clientOptions' => ['method' => 'POST']]); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'codigo',
            'descripcion',
            'precio',
            'existencias',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php \yii\widgets\Pjax::end(); ?>

</div>
