<?php
class Article extends AppModel{
public $belongsTo = array(
'Service' => array(

'foreignKey' => 'id_service'
)
);



}


?>
