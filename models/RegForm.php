<?php

namespace app\models;

use Yii;
use app\models\User;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $fio
 * @property string $password
 * @property string $date_of_birth
 * @property string $tel
 * @property int $role_id
 *
 * @property Reception[] $receptions
 * @property Role $role
 */
class RegForm extends User
{

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fio', 'password', 'passwordConfirm', 'date_of_birth', 'tel', 'role_id'], 'required'],
            [['date_of_birth'], 'safe'],
            [['role_id'], 'integer'],
            [['fio'], 'string', 'max' => 511],
            [['password', 'tel'], 'string', 'max' => 255],
            [['tel'], 'unique'],
            [['role_id'], 'exist', 'skipOnError' => true, 'targetClass' => Role::class, 'targetAttribute' => ['role_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fio' => 'ФИО',
            'password' => 'Пароль',
            'passwordConfirm' => 'Повторите пароль',
            'date_of_birth' => 'Дата рождения',
            'tel' => 'Телефон',
            'role_id' => 'Role ID',
        ];
    }
}
