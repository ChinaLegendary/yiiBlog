<?php

namespace app\controllers;

class GoodsController extends \yii\web\Controller
{
    public function actionAdd()
    {
        return $this->render('add');
    }

    public function actionEdit()
    {
        return $this->render('edit');
    }

    public function actionHello()
    {
        
        return $this->render('hello');
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionSave()
    {
        return $this->render('save');
    }

}
