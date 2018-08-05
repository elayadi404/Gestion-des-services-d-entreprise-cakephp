<?php
class ClientsController extends AppController{
 	function add(){
 							   	$this->loadmodel('Type_client');

				  	if($this->request->is('post') && isset($this->data['Client']['NOM'])){
				 // 		debug($this->request->data);
				  //		$id_type_client = $this->Type_client->find('TYPE',array('condition'=>'id = '.$this->request->data['Client']['TYPE'].''));
			//debug($id_type_client);
					$valk=$this->Client->create($this->request->data,false);
					$ffgh=$this->Client->save(null,true);
			//	 $id_current_client=$this->Client->findByNom($this->request->data['Client']['NOM'],array('Client.ID'));
					$id_current_client=$ffgh;
				//debug($id_current_client);
					$this->redirect('select_client\\'.$id_current_client['Client']['id'].'');
					   }else{
					   $client_type=$this->Type_client->find('all');
					   $clientypearray=array();
					   $i=0;
					   foreach ($client_type as  $value) {

					   	$clientypearray[$i]=$value['Type_client']['TYPE'];
					   	$i++;
					   	
					   }
					   $this->set("client_type",$clientypearray);


					   }
				}
	function select_client($id_client){
				$nom_cleint_current=$this->Client->findById($id_client,array('Client.NOM'));
				$this->set(array('nom_client'=>$nom_cleint_current['Client']['NOM'],'id_client'=>$id_client));


				}
	function type_operation($id_client){
		$nom_cleint_current=$this->Client->findById($id_client,array('Client.NOM'));
		$this->set(array('nom_client'=>$nom_cleint_current['Client']['NOM'],'id_client'=>$id_client));
	}
	function find_client(){
			if($this->request->is('post') ){
			$this->request->data;
			if(isset($this->request->data['Client']['champ_nom'])){
				//cherche par nom 
				$find_client_by=$this->Client->findByNom($this->request->data['Client']['champ_nom']);

			}else{
				// cherch par nemero de tel 
				$find_client_by=$this->Client->findByTelephone($this->request->data['Client']['champ_tel']);
			if(!empty($find_client_by))	{
                if($this->request->url=='Clients/find_client/req=factur') 
                    $this->redirect(array('controller'=>'Factures','action'=>'showall/'.$find_client_by['Client']['ID'].''));
                else
                    $this->redirect(array('action'=>'type_operation/'.$find_client_by['Client']['ID'].''));
                
                

			}else{
             $this->Session->setFlash(" le client n'existe pas dans les bases de données ",'flashmsg');

            }
			$this->set('find_client_by',$find_client_by);
			}
	}

	
  	
  
    }


}