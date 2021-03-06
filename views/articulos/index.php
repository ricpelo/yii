<?php

use yii\helpers\Html;
use kartik\grid\GridView;

//use yii\widgets\Pjax;

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

    <!-- Pjax::begin(['id' => 'admin-crud-id',
                       'timeout' => false,
                       'enablePushState' => false,
                       'clientOptions' => ['method' => 'POST']]); -->
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'pjax' => true,
        'pjaxSettings' => [
            'options' => [
                'enablePushState' => false,
                'clientOptions' => ['method' => 'POST'],
            ],
        ],
        'pager' => [
            'firstPageLabel' => 'Primero',
            'lastPageLabel' => 'Último',
        ],
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
    <!-- Pjax::end(); -->

</div>
