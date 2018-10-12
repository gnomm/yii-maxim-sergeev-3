<?php

namespace app\models;
use Yii;
use app\validators\MyValidator;
use yii\base\Model;

class Test extends Model
{
    public $title;
    public $content;

    public function rules()
    {
        return [
            [['title'], 'myValidate'],
            [['content'], 'myValidate']
        ];
    }

//    public function myValidate($attribute, $params) {
//        if($this->$attribute != 'Привет') {
//            $this->addError($attribute, 'Напиши привет');
//        }
//    }

}