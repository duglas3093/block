<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "libro".
 *
 * @property int $id
 * @property string $titulo
 * @property string $imagen
 * @property string $descripcion
 */
class Libro extends \yii\db\ActiveRecord
{
    public $archivo;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'libro';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['titulo', 'imagen', 'descripcion'], 'required'],
            [['descripcion'], 'string'],
            [['titulo'], 'string', 'max' => 100],
            [['archivo'], 'file', 'extensions' => 'jpg,png,jpeg,gif'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'titulo' => 'Titulo',
            'archivo' => 'Imagen',
            'descripcion' => 'Descripcion',
        ];
    }
}
