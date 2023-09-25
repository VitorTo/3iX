<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tipo_post".
 *
 * @property int $id
 * @property string|null $descricao
 * @property int|null $valor_ponto
 * @property int|null $status
 * @property string|null $dt_create
 * @property string|null $dt_update
 */
class Tipopost extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tipo_post';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['valor_ponto', 'status'], 'integer'],
            [['dt_create', 'dt_update'], 'safe'],
            [['descricao'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'descricao' => Yii::t('app', 'Descricao'),
            'valor_ponto' => Yii::t('app', 'Valor Ponto'),
            'status' => Yii::t('app', 'Status'),
            'dt_create' => Yii::t('app', 'Dt Create'),
            'dt_update' => Yii::t('app', 'Dt Update'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return TipopostQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TipopostQuery(get_called_class());
    }
}
