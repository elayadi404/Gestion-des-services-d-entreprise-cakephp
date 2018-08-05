<?php
if(!empty($this->request->data['User']['username']) ){
echo $this->Form->Create('User').
$this->Form->input('username').
$this->Form->input('password1').
$this->Form->input('USER_NOM').
$this->Form->input('USER_PRENOM').
$this->Form->input('USER_EMAIL').
$this->Form->input('USER_TELEPHON').
$this->Form->input('v1',array('type'=>'hidden','value'=>'ok')).

$this->Form->input('role',array('options'=> array('admin' => 'admin','secretary'=>'secretary','condictor'=>'condictor'))).
$this->Form->end('update');
}else{
	$tabe_user1=array();
foreach ($table_user as $val) {
	$tabe_user1=array_merge($tabe_user1,array($val['User']['username']=>$val['User']['username']));
	
}
echo $this->Form->Create('User').$this->Form->input('choix',array('options'=>array($tabe_user1))).$this->Form->end('select');


}


?>