<?php




foreach ($messages as $value) {
echo '
	<div class="callout small-4 warning " >  Mr '.$value['User']['USER_NOM'].' '.$value['User']['USER_PRENOM'].' . sujet :  '.$this->Html->link($value['Message']['subject'],array('controller'=>'Messages','action'=>'show/'.$value['Message']['id'].'')).'</div> ';


}



?>