<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use app\models\PaymentForm;

$this->title = 'Betalen';

$model = new PaymentForm();

// Definieer het pad naar de map met afbeeldingen
$imagePath = Yii::getAlias('@web') . '/img/';

// Genereer de URL naar de afbeelding
$imageUrl = Url::to('@web/img/1.png');
$imageUrl2 = Url::to('@web/img/2.png');
$imageUrl3 = Url::to('@web/img/2.png');
$imageUrl4 = Url::to('@web/img/2.png');
$imageUrl5 = Url::to('@web/img/pijl3.png');
?>

<nav class="navbar"></nav>

<img src="<?= $imageUrl ?>" alt="Voorbeeldafbeelding" class="pijl"><div class="wagen">WINKELWAGEN</div>
<img src="<?= $imageUrl2 ?>" alt="Tweede Afbeelding" class="pijl2"><div class="gegevens">GEGEVENS</div>
<img src="<?= $imageUrl3 ?>" alt="Derde Afbeelding" class="pijl3"><div class="BEZORGEN">BEZORGEN</div>
<img src="<?= $imageUrl4 ?>" alt="Vierde Afbeelding" class="pijl4"><div class="BETALEN">BETALEN</div>
<img src="<?= $imageUrl5 ?>" alt="Vijfde Afbeelding" class="pijl5"><div class="BEVESTIGIN">BEVESTIGING</div>

<div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="betaal">Betaal uw bestelling via:</div>

    <?php $form = ActiveForm::begin(); ?>
    
    <div class="payment_tab">

    <?= $form->field($model, 'payment_method')->radio(['value' => 'Ideal', 'label' => 'IDEAL'])->label(false) ?>
    <?= $form->field($model, 'payment_method')->radio(['value' => 'Creditcard', 'label' => 'Creditcard'])->label(false) ?>
    <?= $form->field($model, 'payment_method')->radio(['value' => 'Contant_Pin', 'label' => 'Contant of pin'])->label(false) ?>
    <?= $form->field($model, 'payment_method')->radio(['value' => 'Overboeking', 'label' => 'Overboeking'])->label(false) ?>
    <?= $form->field($model, 'payment_method')->radio(['value' => 'Paypal', 'label' => 'Paypal'])->label(false) ?>
    <div class="form-group">
     <?= Html::submitButton('Afronden', ['class' => 'btn btn-secondary']) ?>
    </div>
    </div>
    <?php ActiveForm::end(); ?>
</div>
</div>
</body>




  <!-- style.css-->
<style>
   
.payment_tab{
    position: absolute;
    left:40%;
    top: 52%;
 }
.radio {
    display: flex; 
    align-items: center; 
}

.radio input[type="radio"] {
    margin-right: 10px; 
}


.betaal {
    margin-bottom: 10px; 
 
}

  .pijl {
            position: absolute;
            top: 275px;
            left: 230px;
            transform: translateX(-50%);
            width: 350px; 
            height: auto; 
        }
        .pijl2 {
            position: absolute;
            top: 245px;
            left: 590px;
            transform: translateX(-50%);
            width: 330px; 
            height: auto; 
        }
        .pijl3 {
            position: absolute;
            top: 245px;
            left: 940px;
            transform: translateX(-50%);
            width: 330px; 
            height: auto; 
        }
        .pijl4 {
            position: absolute;
            top: 245px;
            left: 1290px;
            transform: translateX(-50%);
            width: 330px; 
            height: auto; 
        }
        .pijl5 {
            position: absolute;
            top: 285px;
            left: 1650px;
            transform: translateX(-50%);
            width: 300px;  
            height: auto; 
        }
.wagen{
  position: absolute;
 
            left: 85px;
           
            width: 350px; 
            height: auto; 
            top: 300px;
            font-size: 30px;
}

.gegevens {
          position: absolute;
          
          left: 460px;
          width: 350px; 
          height: auto; 
          top: 300px;
          font-size: 30px;
}
.BEZORGEN {
          position: absolute;
         
          left: 820px;
          width: 350px; 
          height: auto; 
          top: 300px;
          font-size: 30px;
}
.BETALEN {
          position: absolute;
         
          left: 1170px;   
          width: 350px; 
          height: auto; 
          top: 300px;
          font-size: 30px;
}
.BEVESTIGIN {
          position: absolute;
          
          left: 1550px;
          width: 350px; 
          height: auto; 
          top: 300px;
          font-size: 30px;
}
  .winkelwagen{
    position: absolute;
            top: 400px;
            left: 50px;
            
  }      


/*tekst*/
.betaal{
    position: absolute;
    left:25%;
    top:50%;
    font-size: 25px;
}

.afronden{
    position: absolute;
    left: 88%;
    top:75%;
    font-size: 25px;
    color: grey;
  }
</style>