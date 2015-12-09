<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario".
 *
 * @property integer $idusuario
 * @property string $nombre
 * @property string $edad
 * @property string $sexo
 * @property string $apellido_pat
 * @property string $apellido_mat
 *
 * @property Tarea[] $tareas
 */
class Usuario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'usuario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idusuario'], 'required'],
            [['idusuario'], 'integer'],
            [['nombre', 'edad', 'sexo', 'apellido_pat', 'apellido_mat'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idusuario' => 'Idusuario',
            'nombre' => 'Nombre',
            'edad' => 'Edad',
            'sexo' => 'Sexo',
            'apellido_pat' => 'Apellido Pat',
            'apellido_mat' => 'Apellido Mat',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTareas()
    {
        return $this->hasMany(Tarea::className(), ['usuario_idusuario' => 'idusuario']);
    }
}
