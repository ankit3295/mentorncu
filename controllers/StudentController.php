<?php

namespace app\models;

class StudentController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
