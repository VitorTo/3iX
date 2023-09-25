<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "empresa".
 *
 * @property int $id
 * @property string|null $nome
 * @property string|null $cnpj
 * @property string|null $logo
 * @property int|null $status
 * @property string|null $dt_create
 * @property string|null $dt_update
 */
class Empresa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'empresa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['logo'], 'string'],
            [['status'], 'integer'],
            [['dt_create', 'dt_update'], 'safe'],
            [['nome'], 'string', 'max' => 255],
            [['cnpj'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'nome' => Yii::t('app', 'Nome'),
            'cnpj' => Yii::t('app', 'Cnpj'),
            'logo' => Yii::t('app', 'Logo'),
            'status' => Yii::t('app', 'Status'),
            'dt_create' => Yii::t('app', 'Dt Create'),
            'dt_update' => Yii::t('app', 'Dt Update'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return EmpresaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new EmpresaQuery(get_called_class());
    }
}
