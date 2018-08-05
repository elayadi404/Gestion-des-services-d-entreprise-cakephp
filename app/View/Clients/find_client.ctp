<?= $this->Session->flash(); ?>

<?php

//if(!$this->request->is('post') ){

				echo '<div ><fieldset class="fieldset"><legend> Recherche client </legend>'.$this->Form->create('Client',array('label'=>'Entrée le  néméro de telephone de client ',)).''.
				$this->Form->input('champ_tel',array('type'=>'tel','pattern'=>"^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$"  ,'required'=>'required','label'=>'  <span class="label success">Entrer le numéro de téléphone du client :</span>')).
                    				'<input type="submit" class="button " value="chercher par numéro de téléphone">'.

				$this->Form->end().'';

				echo '<div >'.$this->Form->create('Client',array('label'=>'Entrer le numéro de téléphone du client ',)).
				$this->Form->input('champ_nom',array('type'=>'text'  ,'required'=>'required','label'=>'<span class="label success">Entrer le nom  :</span>')).
				'<input type="submit" class="button " value="chercher par nom">'.
                    $this->Form->end().'</fieldset></div>';
	//		}else{
//si on trouve le clien dans la base 
		//		if(empty($find_client_by));
            
                    
          //      }
				//echo $this->Html->link($find_client_by['Client']['NOM'],array('action'=>'type_operation/'.$find_client_by['Client']['ID'].''));
			


?>