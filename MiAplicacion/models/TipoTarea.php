<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tipo_tarea".
 *
 * @property integer $idtipotarea
 * @property string $nombre
 * @property string $descripcion
 * @property integer $tarea_idtarea
 *
 * @property Tarea $tareaIdtarea
 */
class TipoTarea extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tipo_tarea';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idtipotarea', 'tarea_idtarea'], 'required'],
            [['idtipotarea', 'tarea_idtarea'], 'integer'],
            [['nombre', 'descripcion'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idtipotarea' => 'Idtipotarea',
            'nombre' => 'Nombre',
            'descripcion' => 'Descripcion',
            'tarea_idtarea' => 'Tarea Idtarea',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTareaIdtarea()
    {
        return $this->hasOne(Tarea::className(), ['idtarea' => 'tarea_idtarea']);
    }
}
