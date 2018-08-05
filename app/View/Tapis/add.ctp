<?php
if(!$this->request->is('post')){
echo 
	$this->Form->create('Tapi',array('label'=>'Enregistrer un nouveau type de service')).
	$this->Form->input('NOM').
	$this->Form->input('CATEGORY').
	$this->Form->input('PRIX_UNITAIRE').
	$this->Form->input('COLOR').
	$this->Form->input('DESCRIPTION').
	$this->Form->end('save')
;
}else{
	echo '<div class="succes" >Votre service a été  bien  enregistrer : </div> <br>';
	echo $this->link('Enregistrer un autre service pour ce client ','action'=>'add');
nregistrer


}

?>