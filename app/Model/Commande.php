<?php
class Commande extends AppModel{
public $belongsTo = array(

'Article' => array(
'className' => 'Article',
'foreignKey' => 'id_article'
)
);




}


?>
