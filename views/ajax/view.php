<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Articulos */
?>
<div class="articulos-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'codigo',
            'descripcion',
            'precio',
            'borrado:boolean',
            'existencias',
        ],
    ]) ?>

</div>
