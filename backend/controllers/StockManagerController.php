<?php

namespace backend\controllers;

use Yii;
use yii\web\Controller;
use app\models\SiteStock;
use app\models\StockForm;

class StockManagerController extends Controller
{
    public function actionTest()
    {
//        echo 'Hello, Jack!';
//        $tableName = SiteStock::tableName();
//        var_dump($tableName);exit;
        $siteStock = SiteStock::findOne(1);
        $description = $siteStock->description;
//        echo $description;
        return $this->render('index', [
            'description' => $description
        ]);
    }

    public function actionStock()
    {
        $model = new StockForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            // данные в $model удачно проверены

            // делаем что-то полезное с $model ...
            $siteStock = new SiteStock();
            $siteStock->mainText = $model->mainText;
            $siteStock->description = $model->description;
            $siteStock->link = $model->link;
            $siteStock->img = $model->img;
            $siteStock->save();

            return $this->render('entry-confirm', ['model' => $model]);
        } else {
            // либо страница отображается первый раз, либо есть ошибка в данных
            return $this->render('entry', ['model' => $model]);
        }
    }
}