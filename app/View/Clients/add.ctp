
<?php
if(!$this->request->is('post')){

echo 
$this->Form->create('Client') .
'<fieldset class="fieldset"><legend>Ajouter un nouveau client  : </legend> '.
$this->Form->input('NOM',array('label'=>'Nom : ','required'=>'required')).
$this->Form->input('PRENOM',array('label'=>'Prenom: ')).
$this->Form->input('ADRESSE',array('label'=>'Adresse : ')).
$this->Form->input('EMAILE',array('label'=>'Email : ')).
$this->Form->input('TELEPHONE',array('label'=>'Téléphone : ','pattern'=>"^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$"  ,'required'=>'required')).
$this->Form->input('TYPE',array('label'=>'Type : ','options'=>array($client_type))).
$this->Form->submit(
    'Ajouter', 
    array('class' => 'success button', 'title' => 'Custom Title')
);
				$this->Form->end().'</fieldset>';
}else if($this->request->is('post') && isset($this->data['Client']['NOM'])){
echo '<dive  >'.$this->Html->link('démarer l\'operation :' ,array('controller'=>'Appointmente','action'=>'add\'.$id_client.',)).' <br>
	
	'.$this->Html->link('Enregistrer un autre client :' ,array('controller'=>'Articles','action'=>'add','full_base'=>'true')).'

 </dive>';


}


?>