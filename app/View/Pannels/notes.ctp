<?php 
$this->Layout=null;
    echo $this->Form->input('message1', array('class' => 'form-control')), 
        $this->Editor->render('message1', array('height' => '200')); 
?>
