<?php
//debug($this->request->data);
if(!$this->request->is('post')){
	$tabe_type1=array();

foreach ($all_type as $val) {
	$tabe_type1=array_merge($tabe_type1,array($val['Service']['NOM']=>$val['Service']['NOM']));
	
}


echo $this->Form->Create('ART').$this->Form->input('NOM',array('options'=>array($tabe_type1))).$this->Form->end('select');



}
if(isset($this->request->data['ART']['NOM']) ){
	echo $this->Form->create('Service').'<fieldset class="fieldset"><legend>Modification de service : </legend>'.
	$this->Form->input("NOM").
	$this->Form->input("ID", array('type'=>'hidden')).
	$this->Form->input("PRIX_UNITAIRE").
	$this->Form->input("COLOR").
	$this->Form->input("DESCRIPTION").


	$this->Form->input('v1',array('type'=>'hidden','value'=>'ok')).

$this->Form->end("update").'</fieldset>';

}


?>