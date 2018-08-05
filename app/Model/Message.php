<?php
class Message extends AppModel{
public $belongsTo = array(
'User' => array(

'foreignKey' => 'sender_id'
)
);




	
}



?>