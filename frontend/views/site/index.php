<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Button;
use yii\widgets\DetailView;
use yii\widgets\Pjax;


//use app\components\HelloWidget;

$this->title = 'My Yii Application';
?>



<div class="site-index">

<div id="page" class="container-fluid">  
 <div class="row" >
 </div>
 
 <div class="row">
  <div class="col-xs-12">
  



<div class="site-docsearch">
<?php Pjax::begin(); ?>

  <?php $form = ActiveForm::begin()?>
   
  <div class="row" >
    <div class="col-xs-12 "><h1 class="text-center smfontsize">Step 1: Enter ZipCode</h1></div>
    <div><?= $form->field($model, 'zipcode'); ?></div>
  </div>

  <div class="row" >
    <div class="col-xs-12 "><h1 class="text-center smfontsize">Step 2: Click on the button to start your search</h1></div>
    
    <div class="form-group col-sm-4 col-xs-6 col-land-4">
      <?= Html::submitButton(Html::img('@web/images/docbuttscreen.png', ['alt'=>'Find Doctor/Health Professional', 'class'=>'img-responsive center-block']), 
          ['name'=>'docbutton', 'id' => 'docbutton', 'class'=>'sub-doc-con-em'])
      ?>
      <?= Html::submitButton('HEALTHCARE<BR>PROFESSIONAL',['name'=>'docbutton', 'id' => 'docbutton','class'=>'sub-doc-con-em'])?>
    </div>   

    <div class="form-group col-sm-4 col-xs-6 col-land-4 ">
      <?= Html::submitButton(Html::img('@web/images/conbuttscreen.png', ['alt'=>'Find Conceirge Services', 'class'=>'img-responsive center-block']),
          //Html::encode('<strong>CONCIERGE<br/>SERVICES</strong>'), 
          ['name'=>'conbutton', 'id' => 'conbutton', 'class'=>'sub-doc-con-em']) ?>
      <?= Html::submitButton('CONCEIRGE<BR>SERVICES',['name'=>'conbutton', 'id' => 'conbutton','class'=>'sub-doc-con-em'])?>
    </div>


    <div class="form-group col-sm-4 col-xs-6 col-land-4 ">
      <?= Html::submitButton(Html::img('@web/images/embuttscreen.png', ['alt'=>'Find Hospital/Clinics/ER', 'class'=>'img-responsive center-block']), 
          ['name'=>'embutton', 'id' => 'embutton', 'class'=>'sub-doc-con-em']) ?>
      <?= Html::submitButton('HOSPITALS / CLINICS / ERs',['name'=>'embutton', 'id' => 'embutton','class'=>'sub-doc-con-em'])?>
      <BR>
    </div>
  </div>  
    <?php ActiveForm::end(); ?>
<?php Pjax::end(); ?>



</div>


</div><!-- End of Wrapper -->
 </div>
 <!-- END OF BODY CONTENT -->


</div><!-- faq-search-faqform -->






<!-- ADVERTISE CONTENT -->
<div id="backfoot" class="container-fluid site-line"> 
<div><p class="text-center smfontsize">scroll down for more info</p></div>
 <div class="row">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <BR/><BR/><BR/>
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">   
       <div class="item active">
        <div class="item col-md-3 col-xs-12">
           <img class="img-responsive center-block" src="images/Ad1sm.png" alt="advertisment" width="75%" />
        </div>
    <div class="item col-md-3 col-xs-12 hidden-xs">
           <img class="img-responsive center-block" src="images/Ad2sm.png" alt="advertisment" width="75%" />
        </div>
    <div class="item col-md-3 col-xs-12 hidden-xs">
           <img class="img-responsive center-block" src="images/Ad3sm.png" alt="advertisment" width="75%" />
        </div>
    <div class="item col-md-3 col-xs-12 hidden-xs">
           <img class="img-responsive center-block" src="images/Ad4sm.png" alt="advertisment" width="75%" />
        </div>
    </div>
    <div class="item">
        <div class="item col-md-3 col-xs-12 hidden-xs">
           <img class="img-responsive center-block" src="images/Ad5sm.png" alt="advertisment" width="75%" />
        </div>
    <div class="item col-md-3 col-xs-12 hidden-xs">
           <img class="img-responsive center-block" src="images/Ad6sm.png" alt="advertisment" width="75%" />
        </div>
    <div class="item col-md-3 col-xs-12 hidden-xs">
           <img class="img-responsive center-block" src="images/Ad7sm.png" alt="advertisment" width="75%" />
        </div>
    <div class="item col-md-3 col-xs-12">
           <img class="img-responsive center-block" src="images/Ad8sm.png" alt="advertisment" width="75%" />
        </div>
    </div>

  <div class="col-xs-12">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>
    </div>


  </div><!-- End of Carousel Wrapper -->
  </div><!-- End of myCarousel -->
  

<!-- SubMenu -->
<div class="row site-line container-fluid">

 <div class="col-md-3  col-xs-6">
 <p class="text-center">
 <a href="">
 <img class="img-responsive center-block" src="images/exercise1.png" alt="advertisment" /><BR/>DOCTOR<BR/>
 </a>
 </p>
 </div>

 <div class="col-md-3   col-xs-6">
 <p class="text-center">
 <a href="">
 <img class="img-responsive center-block" src="images/prevention1.png" alt="advertisment" /><BR/>PREVENTION<BR/>
 </a>
 </p>
 </div>

 <div class="col-md-3   col-xs-6">
 <p class="text-center">
 <a HREF="">
 <img class="img-responsive center-block" src="images/exercise2.png" alt="advertisment" /><BR/>HEALTH<BR/>
 </a>
 </p>
 </div>
 
 <div class="col-md-3   col-xs-6">
 <p class="text-center">
 <a href="">
 <img class="img-responsive center-block" src="images/exercise3.png" alt="advertisment" /><BR/>HEALTH<BR/>
 </a>
 </p>
 </div>
 
</div><!-- End of SubMenu -->

</div><!-- End of Wrapper -->
<!-- END OF ADVERTISE CONTENT -->


</div>
