<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\PaymentForm;

$this->title = 'Betalen';

$model = new PaymentForm();
?>

<nav class="navbar"></nav>

<!-- De rest van je HTML-code -->

<div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="betaal">Betaal uw bestelling via:</div>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'payment_method')->radio(['value' => 'Ideal'])->label('IDEAL') ?>

    <?= $form->field($model, 'payment_method')->radio(['value' => 'Creditcard'])->label('Creditcard') ?>

    <?= $form->field($model, 'payment_method')->radio(['value' => 'Contant_Pin'])->label('Contant of pin (afhalen in de winkel)') ?>

    <?= $form->field($model, 'payment_method')->radio(['value' => 'Overboeking'])->label('Overboeking') ?>

    <?= $form->field($model, 'payment_method')->radio(['value' => 'Paypal'])->label('Paypal') ?>

    <div class="form-group">
        <?= Html::submitButton('Afronden', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>



<div class="d-flex flex-column align-items-start com-color"> 
            <label class="radio"> 
                <input type="radio" name="payment_method" value="Ideal" checked>
                <div class="d-flex align-items-center justify-content-between"> 
                    <span>IDEAL</span>
                    <i class="fa fa-plus-circle"></i>
                </div>
            </label> 