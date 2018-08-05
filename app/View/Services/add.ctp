<?php
if(!$this->request->is('post')){
	echo $this->Form->create('Service').'<fieldset class="fieldset"><legend>ajouter un service </legend>'.
	$this->Form->input("NOM").
	$this->Form->input("PRIX_UNITAIRE").
	$this->Form->input("COLOR").
	$this->Form->input("DESCRIPTION").



	$this->Form->end("ajouter un nouveau service ").'</fieldset>';
//	$this->TypeClient->query('insert into type_clients values(,5,3);');



}else{

	



}


?>