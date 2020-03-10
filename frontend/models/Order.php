<?php
namespace frontend\models;

use yii\base\Model;

class Order extends Model
{ 
    public $content;

    public function rules()
    {
        return [
            [['content'], 'required']
        ];
    }

    public function attributeLabels()
    {
        return [
            'content' => 'Текст сообщение'
        ];
    }
}