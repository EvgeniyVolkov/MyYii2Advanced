<?php

namespace app\models;

//use yii\base\Model;
use yii\db\ActiveRecord;

class SiteStock extends ActiveRecord
{
    public static function tableName()
    {
        return 'siteStock';
    }
}