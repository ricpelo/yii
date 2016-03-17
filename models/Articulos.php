<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "articulos".
 *
 * @property integer $id
 * @property string $codigo
 * @property string $descripcion
 * @property string $precio
 * @property integer $existencias
 */
class Articulos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'articulos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['codigo', 'descripcion', 'precio'], 'required'],
            [['codigo', 'precio'], 'number'],
            [['existencias'], 'integer'],
            [['descripcion'], 'string', 'max' => 50],
            [['codigo'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'codigo' => 'Código',
            'descripcion' => 'Descripción',
            'precio' => 'Precio',
            'existencias' => 'Existencias',
        ];
    }
}
