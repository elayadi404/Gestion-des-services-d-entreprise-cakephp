<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?=$title_for_layout;?></title>
    <?=$this->Html->css('foundation.min');?>
<?=$this->Html->script('https://maps.google.com/maps/api/js?key=AIzaSyCWPQSHfDtRcMFsDO51ulv9z0J84k9g8mQ&sensor=true', false); ?>

<?=$this->fetch('script');?>

    <?= $this->Html->css('Mystyle');?>
    <?= $this->fetch('css');?>
  </head>
  <body>
    
    <!-- Start Top Bar -->
    <div class="top-bar div881">
      <div class="top-bar-left">
        <ul class="menu">
             <?php  
        if ($this->Session->read('Auth.User.id')) {
          echo '<div class=""><a href="/pro">'.$this->Html->image("home.png",array('class'=>'img-icon2')).' <span class="span123">accueil</span></a></div>';
        }
        ?>
        </ul>
      </div>
      <div class="top-bar-right div881">
        <?php  
        if ($this->Session->read('Auth.User.id')) {
           echo '<div class="showscal" >'.$this->Html->link(' Déconnexion',array('controller'=>'Users' , 'action'=>'logout'),array('class'=>"fonta"))."  ".$this->Html->image("logout.png", array('class'=>'img-icon')).'</div>';
        }
        ?>
       
      </div>
    </div>
    <!-- End Top Bar -->

    <div class="callout large primary div882">
      <div class="row text-center div882 ">
        <h1>Bienvenue</h1>
        <h3 class="subheader"> S.N.J.S </h3>
          
      </div>
    </div>
    
    <!-- We can now combine rows and columns when there's only one column in that row -->

<div class="expanded row  ">
      <div class="row expanded div883" >
        <div class="large-2 columns div889">
            
<div> 
            <?php 
            $role = $this->session->read('Auth.User.role');
            if($role=='admin'){
              echo $this->element('menu').
                  $this->element('menu-menu').
              $this->element('menu-article').
             
              $this->element('menu-rdv').
              $this->element('menu-facture').
              $this->element('menu-type-client').
              $this->element('menu-service').
                   $this->element('menu-user').
               $this->element('menu-msg')

              ;


            }else if($role=='secretary'){
                 echo $this->element('menu').
               $this->element('menu-menu').
              $this->element('menu-article').
              $this->element('menu-rdv').
              $this->element('menu-facture').
                             $this->element('menu-msg')
;


            }else if($role=='condictor'){
 echo $this->element('menu')                  .  $this->element('menu-menu').

              $this->element('menu-rdv').               $this->element('menu-msg')

              ;



            }


            ?>
<br>
</div>
<br>
      </div>
      <div class="large-10 columns div885">
               <?= $this->fetch('content'); ?>

      </div>
          <br>
  

</div>
    <br>
<div class="row expanded div884">
      <div class="row ">
      
        <h3 class="subheader text-center"> S.N.J.S </h3>
          <span class="copc2"> Développé par : </span><span class="copc"> Mohammed EL Ayadi & Zakaria Oukassem</span>
      </div>
    </div>
     
    </div>
    <?= $this->Html->script('jquery-2.1.4.min');?>
        <?= $this->Html->script('vendor/foundation');?>
              <?= $this->Html->script('app');?>

    <?= $this->fetch('script');?>


    
   
  </body>
</html>


    