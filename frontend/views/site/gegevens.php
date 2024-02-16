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


$this->title = 'Gegevens';

?>
 

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
      <H3>Uw gegevens</H3>
    
    <div class="tekst1"><h5>Afleveradres</h5>
    
    
    <div class="tekst2">wijzigen</div>
    <div class="tekst3"><h5>Aantal</h5></div>
    <div class="tekst4">wijzigen</div>
    <div class="tekst5"><h5>Uw bestelling</h5>
    <div class="line"></div>
    
    </div>
    </div>


    <div class="liter">Omschrijving</div>
    <div class="menu">
      Aantal
    </div>
    <div class="prijs">Prijs
    </div>

    <div class="img">GEGEVENS 
    </div>
    <div class="afronden"> <button>Afronden</button>
    </div>
  
    <div class="t-product">Titel van het product
    <div class="line2"></div></div>



    </body>








  <!-- style.css-->
<style>

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
            left: 175px;
            
  }
  .tekst3{
    position: fixed;
            top: 470px;
            left: 400px;
            
  }
  .tekst4{
    position: fixed;
            top: 470px;
            left: 475px;
            
  }
  .tekst5{
    position: fixed;
            top: 470px;
            left: 52%;
            
  }

  .line{
    position: absolute; 
    left: 0%; 
    width: 650%; 
    border-bottom: 1px solid #ccc; 
    margin-bottom: 40px; 
  }
  .line2{
    position: absolute; 
    left: 0%; 
    width: 550%; 
    border-bottom: 1px solid #ccc; 
    margin-bottom: 80px; 
  }
        
  .img {
    width: 280px;
    height: 180px;
    background-color: lightgrey;
    transform: translate(0px, -10px) translateY(100px); 
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
    left: 52%;
    top: 55%;
  }
  .menu{
    position: fixed;
    left: 80%;
    top:55%;
  
  }
  .prijs{
    position: fixed;
    left: 91%;
    top:55%;
  }

  .t-product  {
    position: fixed;
    left: 52%;
    top: 59%;
  }

  .afronden{
    position: fixed;
    left: 88%;
    top:85%;
    font-size: 25px;
    color: grey;
  }
 


</style>