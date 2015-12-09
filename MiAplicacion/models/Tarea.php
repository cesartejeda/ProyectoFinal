<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tarea".
 *
 * @property integer $idtarea
 * @property string $nombre
 * @property string $fecha_ini
 * @property string $fecha_fin
 * @property string $descripcion
 * @property integer $usuario_idusuario
 *
 * @property Usuario $usuarioIdusuario
 * @property TipoTarea[] $tipoTareas
 */
class Tarea extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tarea';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idtarea', 'usuario_idusuario'], 'required'],
            [['idtarea', 'usuario_idusuario'], 'integer'],
            [['fecha_ini', 'fecha_fin'], 'safe'],
            [['nombre', 'descripcion'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idtarea' => 'Idtarea',
            'nombre' => 'Nombre',
            'fecha_ini' => 'Fecha Ini',
            'fecha_fin' => 'Fecha Fin',
            'descripcion' => 'Descripcion',
            'usuario_idusuario' => 'Usuario Idusuario',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarioIdusuario()
    {
        return $this->hasOne(Usuario::className(), ['idusuario' => 'usuario_idusuario']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTipoTareas()
    {
        return $this->hasMany(TipoTarea::className(), ['tarea_idtarea' => 'idtarea']);
    }
}
