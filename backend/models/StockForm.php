<?php

namespace app\models;

use yii\base\Model;

class StockForm extends Model
{
    public $mainText;
    public $description;
    public $link;
    public $img;

    public function rules()
    {
        return [
            [['mainText', 'description', 'link', 'img'], 'required'],
//            ['email', 'email'],
        ];
    }
}