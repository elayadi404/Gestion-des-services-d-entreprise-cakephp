<?php
//debug($this->request->data);
if(!$this->request->is('post')){
	$tabe_type1=array();

foreach ($all_type as $val) {
	$tabe_type1=array_merge($tabe_type1,array($val['TypeClient']['TYPE']=>$val['TypeClient']['TYPE']));
	
}


echo $this->Form->Create('TypeClient').$this->Form->input('choix',array('options'=>array($tabe_type1))).$this->Form->end('select');



}
if(isset($this->request->data['TypeClient']['TYPE']) ){
	echo $this->Form->create('TypeClient').
	'<fieldset class="fieldset"><legend>Modification des parammetre d\'un type de client </legend>'.
	$this->Form->input("id",array('hidden'=>'true')).$this->Form->input("TYPE").$this->Form->input("remise").$this->Form->input('v1',array('type'=>'hidden','value'=>'ok')).'</fieldset>'.
$this->Form->end("update");

}


?>