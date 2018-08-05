<?php
if(!$this->request->is('post')){
	echo $this->Form->create('TypeClient').
	'<fieldset class="fieldset"><legend> ajouter un nouveau type de client</legend>'.
	$this->Form->input("TYPE").$this->Form->input("remise").
	'</fieldset>'.
	$this->Form->end("ajouté un nouveu type ");
//	$this->TypeClient->query('insert into type_clients values(,5,3);');



}else{

	



}


?>