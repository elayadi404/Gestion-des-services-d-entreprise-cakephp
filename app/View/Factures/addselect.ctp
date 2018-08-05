<?php
if(!$this->request->is('post') ){

				echo '<div >'.$this->Form->create('Client',array('label'=>'Entrer le numéro de téléphone du client ',)).
				$this->Form->input('champ_tel',array('type'=>'tel','pattern'=>"^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$"  ,'required'=>'required','label'=>'Entrer le nom  du client :')).
				$this->Form->end('chercher par numéro ').'</div>';

				echo '<div >'.$this->Form->create('Client',array('label'=>'Entrer le numéro de téléphone  ',)).
				$this->Form->input('champ_nom',array('type'=>'text'  ,'required'=>'required','label'=>'Entrer le nom  :')).
				$this->Form->end('chercher par nom').'</div>';
			}else{
//si on trouve le clien dans la base 
				if(empty($find_client_by))echo 'client not found';else{
				//echo $this->Html->link($find_client_by['Client']['NOM'],array('action'=>'type_operation/'.$find_client_by['Client']['ID'].''));
			}

			}
?>			