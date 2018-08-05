<?php
class ServicesController extends AppController{

		function add(){

				if(!$this->request->is('post')){

				}else{

					$hi=$this->Service->create($this->request->data,false);
					$kol=$this->Service->save(null,true);					
					$this->redirect(array('action'=>'show'));
				}


		}

	
	FUNCTION update(){
						$all_type=$this->Service->find('all',array('fields'=>'*'));

						$this->set('all_type',$all_type);
						if (isset($this->request->data['ART']['NOM']) && empty($this->request->data['Service']['v1'])){
									$id_user=$this->Service->findByNom($this->request->data['ART']['NOM'],array('fields'=>'ID'));
								//	debug($id_user);

						$this->request->data+=$this->Service->findById($id_user['Service']['ID']);
							 
					}
					if( isset($this->request->data['Service']['v1'])){
						//debug($this->request->data);
						$NOM=$this->request->data['Service']['NOM'];
						$pri=$this->request->data['Service']['PRIX_UNITAIRE'];
						$id=$this->request->data['Service']['ID'];
						$sql850='update services set NOM="'.$NOM.'" where ID='.$id.' ; ';
						$sql851='update services set PRIX_UNITAIRE='.$pri.' where ID='.$id.' ; ';
						 $this->Service->query($sql850);
						$this->Service->query($sql851);





										//$this->Service->updateAll(array('TYPE'=>' d'.$type.'','remise'=>$this->request->data['Service']['remise']),array('id = '.$this->request->data["Service"]["id"].''));
						echo $this->Service->query($sql850);
						$this->redirect(array('action'=>'show'));



					}




	}

	function show(){
			$touslestype=$this->Service->find('all');
			$this->set('touslestype',$touslestype);

	}
	function delet(){
				$all_type=$this->Service->find('all',array('fields'=>'*'));

						$this->set('all_type',$all_type);
						if (isset($this->request->data['ART']['NOM']) && empty($this->request->data['Service']['v1'])){
									$id_user=$this->Service->findByType($this->request->data['Service']['NOM'],array('fields'=>'id'));
									//ebug($this->request->data['Service']);
										$this->request->data=$this->Service->findById($id_user['Service']['id']);
										ECHO "JJJJJJJJJJJJJJJ";
							 
					}
					if( isset($this->request->data['Service']['choix'])){
						//debug($this->request->data);
						$nom=$this->request->data['Service']['choix'];

						$sql850='delete from services  where NOM ="'.$nom.'" ; ';
						 $this->Service->query($sql850);





										//$this->Service->updateAll(array('TYPE'=>' d'.$type.'','remise'=>$this->request->data['Service']['remise']),array('id = '.$this->request->data["Service"]["id"].''));
						echo $this->Service->query($sql850);
						$this->redirect(array('action'=>'show'));



					}







	}



}


?>