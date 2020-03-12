<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mhs".
 *
 * @property int $nrp
 * @property string $nama
 * @property string $alamat
 * @property string $tanggal_lahir
 */
class Mhs extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mhs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'alamat', 'tanggal_lahir'], 'required'],
            [['tanggal_lahir'], 'safe'],
            [['nama'], 'string', 'max' => 50],
            [['alamat'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nrp' => 'Nrp',
            'nama' => 'Nama',
            'alamat' => 'Alamat',
            'tanggal_lahir' => 'Tanggal Lahir',
        ];
    }
}
