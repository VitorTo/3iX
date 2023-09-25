<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Tipopost]].
 *
 * @see Tipopost
 */
class TipopostQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Tipopost[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Tipopost|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
