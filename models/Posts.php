<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "posts".
 *
 * @property int $id
 * @property int|null $pessoa_id
 * @property int|null $empresa_id
 * @property int|null $tipo_post_id
 * @property string|null $img
 * @property string|null $titulo
 * @property string|null $subtitulo
 * @property string|null $tags
 * @property int|null $status
 * @property string|null $dt_create
 * @property string|null $dt_update
 */
class Posts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'posts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pessoa_id', 'empresa_id', 'tipo_post_id', 'status'], 'integer'],
            [['img'], 'string'],
            [['dt_create', 'dt_update'], 'safe'],
            [['titulo'], 'string', 'max' => 50],
            [['subtitulo'], 'string', 'max' => 100],
            [['tags'], 'string', 'max' => 255],
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
            'empresa_id' => Yii::t('app', 'Empresa ID'),
            'tipo_post_id' => Yii::t('app', 'Tipo Post ID'),
            'img' => Yii::t('app', 'Img'),
            'titulo' => Yii::t('app', 'Titulo'),
            'subtitulo' => Yii::t('app', 'Subtitulo'),
            'tags' => Yii::t('app', 'Tags'),
            'status' => Yii::t('app', 'Status'),
            'dt_create' => Yii::t('app', 'Dt Create'),
            'dt_update' => Yii::t('app', 'Dt Update'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return PostsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PostsQuery(get_called_class());
    }
}
