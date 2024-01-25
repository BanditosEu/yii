<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Product; // Zorg ervoor dat je het model Product hebt aangemaakt

class ProductController extends Controller
{
    public function actionIndex()
    {
        $products = Product::find()->all();

        return $this->render('index', ['products' => $products]);
    }

    public function actionView($id)
    {
        $product = Product::findOne($id);

        return $this->render('view', ['product' => $product]);
    }
}

