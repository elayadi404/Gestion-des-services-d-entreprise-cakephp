<?php
$value=$msg;
	echo '<fieldset class="fieldset" ><div class="row"><div class="callout small-4 warning " > envoyer par : Mr '.$value['User']['USER_NOM'].' '.$value['User']['USER_PRENOM'].' .</div><div class="callout small-6"> sujet : '.$value['Message']['subject'].'</div><div class="callout success large"> message : '.$value['Message']['body'].' </div></div><div class="row align-right">'.$this->Html->link("envoyer un message ",array('controller'=>'Messages','action'=>'compose'),array('class'=>'button small-2')).' '.$this->Html->link("ACCUEIL ",array('controller'=>'Pannels','action'=>'index'),array('class'=>'button small-2 ')).'  </div></div></fieldset>';



?>