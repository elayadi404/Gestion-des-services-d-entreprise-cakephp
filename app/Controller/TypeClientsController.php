<?php 
class TypeClientsController extends AppController{
	function add(){

				if(!$this->request->is('post')){

				}else{

					$this->TypeClient->create($this->request->data,false);
					$kol=$this->TypeClient->save(null,true);
											$this->redirect(array('action'=>'show'));


		
			}


				}

	
	FUNCTION update(){
						$all_type=$this->TypeClient->find('all',array('fields'=>'*'));

						$this->set('all_type',$all_type);
						if (isset($this->request->data['TypeClient']['choix']) && empty($this->request->data['TypeClient']['v1'])){
									$id_user=$this->TypeClient->findByType($this->request->data['TypeClient']['choix'],array('fields'=>'id'));
									//ebug($this->request->data['TypeClient']);
										$this->request->data=$this->TypeClient->findById($id_user['TypeClient']['id']);
							 
					}
					if( isset($this->request->data['TypeClient']['v1'])){
						//debug($this->request->data);
						$type=$this->request->data['TypeClient']['TYPE'];
						$remise=$this->request->data['TypeClient']['remise'];
						$id=$this->request->data["TypeClient"]["id"];
						$sql850='update type_clients set TYPE="'.$type.'" where id='.$id.' ; ';
						$sql851='update type_clients set remise='.$remise.' where id='.$id.' ; ';
						 $this->TypeClient->query($sql850);
						$this->TypeClient->query($sql851);





										//$this->TypeClient->updateAll(array('TYPE'=>' d'.$type.'','remise'=>$this->request->data['TypeClient']['remise']),array('id = '.$this->request->data["TypeClient"]["id"].''));
						echo $this->TypeClient->query($sql850);
						$this->redirect(array('action'=>'show'));



					}




	}

	function show(){
			$touslestype=$this->TypeClient->find('all');
			$this->set('touslestype',$touslestype);

	}
	function delet(){
		$all_type=$this->TypeClient->find('all',array('fields'=>'*'));

						$this->set('all_type',$all_type);
						if (isset($this->request->data['TypeClient']['choix']) && empty($this->request->data['TypeClient']['v1'])){
									$id_user=$this->TypeClient->findByType($this->request->data['TypeClient']['choix'],array('fields'=>'id'));
									//ebug($this->request->data['TypeClient']);
										$this->request->data=$this->TypeClient->findById($id_user['TypeClient']['id']);
							 
					}
					if( isset($this->request->data['TypeClient']['v1'])){
						//debug($this->request->data);
						$type=$this->request->data['TypeClient']['TYPE'];
						$remise=$this->request->data['TypeClient']['remise'];
						$id=$this->request->data["TypeClient"]["id"];
						$sql850='delete from type_clients  where id='.$id.' ; ';
						 $this->TypeClient->query($sql850);





										//$this->TypeClient->updateAll(array('TYPE'=>' d'.$type.'','remise'=>$this->request->data['TypeClient']['remise']),array('id = '.$this->request->data["TypeClient"]["id"].''));
						echo $this->TypeClient->query($sql850);
						$this->redirect(array('action'=>'show'));



					}







	}

}

?>