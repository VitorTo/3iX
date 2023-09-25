<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Pontuacao]].
 *
 * @see Pontuacao
 */
class PontuacaoQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Pontuacao[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Pontuacao|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
