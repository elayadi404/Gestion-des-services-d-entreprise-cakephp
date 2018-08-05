<?php
class Appointmente extends AppModel{

public $belongsTo = array(
'Client' => array(

'foreignKey' => 'ID_CLIENT'
)
);



	
}



?>