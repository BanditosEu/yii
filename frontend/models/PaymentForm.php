<?php
namespace app\models;

use yii\base\Model;

class PaymentForm extends Model
{
    public $payment_method;

    public function rules()
    {
        return [
            ['payment_method', 'required'],
            ['payment_method', 'string'],
        ];
    }
}
