<?php

//debug($all_user);
$all_user_=array();
foreach ($all_user as  $value) {
     $all_user_=array_merge($all_user_,array($value=>$value));
}
echo  $this->Form->create('Message', array('url' => array('controller' => 'Messages', 'action' => 'compose'))).
$this->Form->input('send_to',array('options'=>$all_user_,'label'=>'Envoyer a :')).
$this->Form->input('subject',array('label'=>'titre:','type'=>'text'))
.$this->Form->input('body')
.$this->form->end('Envoye');
?>


