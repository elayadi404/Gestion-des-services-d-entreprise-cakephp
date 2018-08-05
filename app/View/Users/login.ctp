
<?= $this->Session->flash(); ?>
<?=$this->Html->css('foundation.min');?>
<?=$this->Html->css('Mystyle');?>

<?= $this->fetch('css');?>




<div class="large-3 large-centered columns">
  <div class="login-box">
  <div class="row">
  <div class="large-12 columns">
    <?=$this->Form->create('User');?>
       <div class="row">
         <div class="large-12 columns">
             <?=$this->Form->input('username',array('label'=>'Nom d\'utilisateur :')) ;?>
         </div>
       </div>
      <div class="row">
         <div class="large-12 columns">
             <?=$this->Form->input('password',array('label'=>'Mot de passe :'))  ;?>
         </div>
      </div>
      <div class="row">
        <div class="large-12 large-centered columns">
          <input type="submit" class="button expand" value="Se connecter "/>
        </div>
      </div>
<?=$this->Form->end();?>
      </div>
</div>
</div>
</div>
<style type="text/css"> 
@import "compass/css3";

body {
  background: #F0F0F3;
}
.login-box {
  background: #fff;
  border: 1px solid #ddd; 
  margin: 100px 0;
  padding: 40px 20px 0 20px;
}

</style>