<?php

namespace app\models;
use app\models\Users;

class User extends \yii\base\BaseObject implements \yii\web\IdentityInterface
{
    public $id_user;
    public $username;
    public $password;
    public $authKey;
    public $accessToken;



    /**
     * {@inheritdoc}
     */
    public static function findIdentity($id_user)
    {
        //return isset(self::$users[$id]) ? new static(self::$users[$id]) : null;
        $TabelUsers = Users::find()->where(["id_user"=>$id_user])->one();
        if(!count($TabelUsers)){
             return null;
        }
        return new static($TabelUsers);
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        $TabelUsers = Users::find()->where(["accessToken"=>$accessToken])->one();
        if(!count($TabelUsers)){
             return null;
        }
        return new static($TabelUsers);
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        $TabelUsers = Users::find()->where(["username"=>$username])->one();
        if(!count($TabelUsers)){

             return null;
        }
        return new static($TabelUsers);
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id_user;
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
        return $this->authKey;
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return $this->password === md5($password);
    }
}
