<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pontuacao".
 *
 * @property int $id
 * @property int|null $pessoa_id
 * @property int|null $ponto
 * @property int|null $status
 * @property string|null $dt_create
 * @property string|null $dt_update
 */
class Pontuacao extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pontuacao';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pessoa_id', 'ponto', 'status'], 'integer'],
            [['dt_create', 'dt_update'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'pessoa_id' => Yii::t('app', 'Pessoa ID'),
            'ponto' => Yii::t('app', 'Ponto'),
            'status' => Yii::t('app', 'Status'),
            'dt_create' => Yii::t('app', 'Dt Create'),
            'dt_update' => Yii::t('app', 'Dt Update'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return PontuacaoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PontuacaoQuery(get_called_class());
    }
}
