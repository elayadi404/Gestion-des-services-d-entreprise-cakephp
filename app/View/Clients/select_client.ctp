<?php

if(isset($nom_client)){
echo '
<fieldset class="fieldset align-center" ><legend>
Nom Client : '.$nom_client.'</legend><br>
<div  class="row align-center" >
<center>
<div  >'.$this->Html->link('Démarrer l\'opération  ' ,array('action'=>'type_operation\\'.$id_client.''),array('class'=>'success button')).' <br>

	'.$this->Html->link('Enregistrer un autre client ' ,array('controller'=>'Clients','action'=>'add','full_base'=>'true'),array('class'=>'info button')).'

 </div>
 </center>
 </div>
 </fieldset>';
}
?>