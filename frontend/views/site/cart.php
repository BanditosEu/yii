<?php
use yii\helpers\Html;
use yii\helpers\Url;

// Definieer het pad naar de map met afbeeldingen
$imagePath = Yii::getAlias('@web') . '/img/';

// Genereer de URL naar de afbeelding
$imageUrl = Url::to('@web/img/1.png');
$imageUrl2 = Url::to('@web/img/2.png');
$imageUrl3 = Url::to('@web/img/2.png');
$imageUrl4 = Url::to('@web/img/2.png');
$imageUrl5 = Url::to('@web/img/pijl3.png');


$this->title = 'cart';

?>
 

    <body>
    <nav class="navbar">
      <ul class="navbar-nav">
        <li><a href="#" class="navbar-logo">LOGO</a></li>
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </nav>

    <img src="<?= $imageUrl ?>" alt="Voorbeeldafbeelding" class="pijl"><div class="wagen">WINKELWAGEN</div>
    <img src="<?= $imageUrl2 ?>" alt="Tweede Afbeelding" class="pijl2"><div class="gegevens">GEGEVENS</div>
    <img src="<?= $imageUrl3 ?>" alt="Derde Afbeelding" class="pijl3"><div class="BEZORGEN">BEZORGEN</div>
    <img src="<?= $imageUrl4 ?>" alt="Vierde Afbeelding" class="pijl4"><div class="BETALEN">BETALEN</div>
    <img src="<?= $imageUrl5 ?>" alt="Vijfde Afbeelding" class="pijl5"><div class="BEVESTIGIN">BEVESTIGING</div>
    </div>

    
    <div class="winkelwagen">
      <H1>Winkelwagen</H1>
    
    <div class="tekst1">Artikelomschrijving 
    <div class="line"></div>
    
    <div class="tekst2">Opties</div>
    <div class="tekst3">Aantal</div>
    <div class="tekst4">Prijs</div>
    </div>

    <div class="img">FOTO 
      <div class="line2"></div>
    </div>
    <div class="titel">Titel van het Product
      <div class="details">ProductDetails</div>
    </div>
    <div class="liter"><input type="letters"></div>
    <div class="menu">
      <form>
    <input type="number" min="1" max="100">
      </form>
    </div>
    <div class="prijs">   <form>
    <input type="number" min="1" max="100">
      </form>
    </div>
    </div>

<div class="checkout"></div>
<div class="volgende"> <button>Volgende</button>
    </div>
  
</body>








  <!-- style.css-->
<style>
  .volgende{
    position: absolute;
    left: 87%;
    top:91%;
    font-size: 25px;
    color: grey;
   
  }
  .pijl {
            position: fixed;
            top: 275px;
            left: 230px;
            transform: translateX(-50%);
            width: 350px; 
            height: auto; 
        }
        .pijl2 {
            position: fixed;
            top: 245px;
            left: 590px;
            transform: translateX(-50%);
            width: 330px; 
            height: auto; 
        }
        .pijl3 {
            position: fixed;
            top: 245px;
            left: 940px;
            transform: translateX(-50%);
            width: 330px; 
            height: auto; 
        }
        .pijl4 {
            position: fixed;
            top: 245px;
            left: 1290px;
            transform: translateX(-50%);
            width: 330px; 
            height: auto; 
        }
        .pijl5 {
            position: fixed;
            top: 285px;
            left: 1650px;
            transform: translateX(-50%);
            width: 300px;  
            height: auto; 
        }
.wagen{
  position: fixed;
 
            left: 85px;
           
            width: 350px; 
            height: auto; 
            top: 300px;
            font-size: 30px;
}

.gegevens {
          position: fixed;
          
          left: 460px;
          width: 350px; 
          height: auto; 
          top: 300px;
          font-size: 30px;
}
.BEZORGEN {
          position: fixed;
         
          left: 820px;
          width: 350px; 
          height: auto; 
          top: 300px;
          font-size: 30px;
}
.BETALEN {
          position: fixed;
         
          left: 1170px;   
          width: 350px; 
          height: auto; 
          top: 300px;
          font-size: 30px;
}
.BEVESTIGIN {
          position: fixed;
          
               left: 1550px;
          width: 350px; 
          height: auto; 
          top: 300px;
          font-size: 30px;
}
  .winkelwagen{
    position: fixed;
            top: 400px;
            left: 50px;
            
  }        
  .tekst1{
    position: fixed;
            top: 470px;
            left: 50px;
            
  }
  .tekst2{
    position: fixed;
            top: 470px;
            left: 50%;
            
  }
  .tekst3{
    position: fixed;
            top: 470px;
            left: 66%;
            
  }
  .tekst4{
    position: fixed;
            top: 470px;
            left: 89%;
            
  }

  .line{
    position: absolute; 
    left: 0; 
    width: 1300%; 
    border-bottom: 1px solid #ccc; 
    margin-bottom: 40px; 
  }
  .line2{
    position: absolute; 
    left: -30px; 
    width: 187vh; 
    border-bottom: 1px solid #ccc; 
    margin-bottom: -120px; 
  }
        
  .img {
    width: 80px;
    height: 80px;
    background-color: lightgrey;
    transform: translate(30px, -10px) translateY(70px); 
    display: flex;
    justify-content: center; 
    align-items: center; 
    
  }
  .titel{
    position: fixed;
    left:210px;

  }
  .details{
    position: fixed;
    color: grey;
  }
  .liter{
    position: fixed;
    left: 50%;
  }
  .menu{
    position: fixed;
    left: 66%;
  }
  .prijs{
    position: fixed;
    left: 88%;
  }

.checkout{
  position: fixed;
    width: 500px;
    height: 280px;
    background-color: grey;
    left: 68%;
    top: 68%;
    display: flex;
    justify-content: center; 
    align-items: center; 
 
    
}
</style>