<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

class User extends ActiveRecord implements IdentityInterface
{
    public static function tableName()
    {
        return 'pessoa';
    }
    public function rules()
    {
        return [
            [['empresa_id', 'status', 'tipo_id'], 'integer'],
            [['dt_create', 'dt_update', ], 'safe'],
            [['nome'], 'string', 'max' => 255],
            [['senha', 'email'], 'string', 'max' => 100],
            // [['email', 'authKey', 'accessToken'], 'string', 'max' => 50],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'empresa_id' => 'Empresa',
            'tipo_id' => 'Tipo',
            'nome' => 'nome',
            'email' => 'email',
            'senha' => 'senha',
            'email' => 'Email',
            // 'authKey' => 'Tipo usuário',
            // 'accessToken' => 'Access Token',
            'status' => 'Status',
            'dt_create' => 'Dt Create',
            'dt_update' => 'Dt Update',
        ];
    }

    public static function find()
    {
        return new UserQuery(get_called_class());
    }

    public static function generateUsername(string $nomeUsuario)
    {   
        // criar username primeiro e ultimo nome, return as primeiras letras maiúsculas
        $partes = explode(' ', $nomeUsuario);

        $primeiroNome = array_shift($partes);
        $ultimoNome = array_pop($partes);

        $userName = $primeiroNome.' '.$ultimoNome;

        return ucwords(strtolower($userName));

    }

    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['access_token' => $token]);
    }

    public function getId()
    {
        return $this->id;
    }

    public function getAuthKey()
    {
        // return $this->authKey;
        return $this->email;
    }

    public function validateAuthKey($authKey)
    {
        // return $this->authKey === $authKey;
        return $this->email === $authKey;
    }

    public static function findByEmail($email)
    {
        return static::findOne(['email' => $email]);
    }

    public function validatePassword($password)
    {
        // return Yii::$app->security->validatePassword($password, $this->senha);
        return $password;
    }
}
