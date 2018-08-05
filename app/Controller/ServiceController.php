<?php
class ServicesController extends AppController{

		function add(){

				if(!$this->request->is('post')){

				}else{

					$this->Service->create($this->request->data,false);
					$kol=$this->Service->save(null,true);
											$this->redirect(array('action'=>'show'));


		
			}


				}

	
	FUNCTION update(){
						$all_type=$this->Service->find('all',array('fields'=>'*'));

						$this->set('all_type',$all_type);
						if (isset($this->request->data['Service']['choix']) && empty($this->request->data['Service']['v1'])){
									//$id_user=$this->Service->findByNom($this->request->data['Service']['choix'],array('fields'=>'ID'));
									//ebug($this->request->data['Service']);
										//$this->request->data=$this->Service->findById($id_user['Service']['ID']);
							 
					}
					if( isset($this->request->data['Service']['v1'])){
						//debug($this->request->data);
						$type=$this->request->data['Service']['TYPE'];
						$remise=$this->request->data['Service']['remise'];
						$id=$this->request->data["Service"]["id"];
						$sql850='update type_clients set TYPE="'.$type.'" where id='.$id.' ; ';
						$sql851='update type_clients set remise='.$remise.' where id='.$id.' ; ';
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
						if (isset($this->request->data['Service']['choix']) && empty($this->request->data['Service']['v1'])){
									$id_user=$this->Service->findByType($this->request->data['Service']['choix'],array('fields'=>'id'));
									//ebug($this->request->data['Service']);
										$this->request->data=$this->Service->findById($id_user['Service']['id']);
							 
					}
					if( isset($this->request->data['Service']['v1'])){
						//debug($this->request->data);
						$type=$this->request->data['Service']['TYPE'];
						$remise=$this->request->data['Service']['remise'];
						$id=$this->request->data["Service"]["id"];
						$sql850='delete from type_clients  where id='.$id.' ; ';
						 $this->Service->query($sql850);





										//$this->Service->updateAll(array('TYPE'=>' d'.$type.'','remise'=>$this->request->data['Service']['remise']),array('id = '.$this->request->data["Service"]["id"].''));
						echo $this->Service->query($sql850);
						$this->redirect(array('action'=>'show'));



					}







	}



}


?>