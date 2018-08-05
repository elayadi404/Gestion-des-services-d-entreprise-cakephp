<?php
echo  $this->Form->create('Message', array('url' => array('controller' => 'Messages', 'action' => 'compose'))).$this->Form->input('body').$this->form->end('Envoye');



?>