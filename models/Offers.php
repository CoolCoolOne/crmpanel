<?php

namespace app\models;
use floor12\phone\PhoneValidator;

use Yii;

/**
 * This is the model class for table "offers".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string|null $phone
 * @property string $date
 */
class Offers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'offers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email'],
            ['email','unique'],
            ['phone', PhoneValidator::class],
            [['date'], 'safe'],
            [['name', 'email'], 'string', 'max' => 256],
            [['phone'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'email' => 'Email',
            'phone' => 'Телефон (не обязательно указывать)',
            'date' => 'Date',
        ];
    }
}
