<?php

if(!$this->request->is('post')){
	$tabe_type1=array();

					foreach ($all_type as $val) {
					$tabe_type1=array_merge($tabe_type1,array($val['Service']['NOM']=>$val['Service']['NOM']));

							}


					echo $this->Form->Create('Service').$this->Form->input('choix',array('options'=>array($tabe_type1))).$this->Form->end('effacer');

}
if(isset($this->request->data['Service']['choix']) ){
			echo $this->Form->create('Service').$this->Form->input("id",array('hidden'=>'true')).$this->Form->input("TYPE").$this->Form->input("remise").$this->Form->input('v1',array('type'=>'hidden','value'=>'ok')).
		$this->Form->end("effacer");

}


?>