<?php

namespace app\models;

use Yii;
use yii\base\Model;

class Calculation extends Model
{
    public $name;
    public $email;

    public function rules(){
        return [[['name', 'email'], 'required'],
        ['email','email'],];
    }
}
