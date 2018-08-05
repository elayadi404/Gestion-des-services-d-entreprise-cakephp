<?php
if($this->request->is('post')){
    
    
    
}else{
    echo $this->Form->create('User').
        $this->Form->input('username').
$this->Form->input('password1').
$this->Form->input('USER_NOM').
$this->Form->input('USER_PRENOM').
$this->Form->input('USER_EMAIL').
$this->Form->input('USER_TELEPHON').


$this->Form->input('role',array('options'=> array('admin' => 'admin','secretary'=>'secretary','condictor'=>'condictor'))).
 $this->Form->submit(
    'Ajuter', 
    array('class' => 'success button', 'title' => 'Custom Title')
);
$this->Form->end();
    
    
    
}



?>