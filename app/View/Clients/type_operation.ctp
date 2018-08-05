<?= $this->Session->flash(); ?>

<?php

 echo '
 <fieldset class="fieldset"><legend>
Nom Client : '.$nom_client.'</legend><br>
<center  >'.$this->Html->link('Déclarer un rendez-vous    ' ,array('controller'=>'Appointmentes','action'=>'add\\'.$id_client.''),array('class'=>'success button')).' <br>

	'.$this->Html->link('Enregistrer un service ' ,array('controller'=>'Articles','action'=>'add\\'.$id_client.''),array('class'=>'success button')).'
	


 </center>
 </fieldset>';

?>