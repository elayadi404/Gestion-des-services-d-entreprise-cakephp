<?php
class Client extends AppModel{
	public $belongsTo = array(
'type_client' => array(

'foreignKey' => 'id'
)
);




}


?>
