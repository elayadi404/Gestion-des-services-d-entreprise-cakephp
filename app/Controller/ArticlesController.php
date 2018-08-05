<?php
class ArticlesController extends AppController{
    

function add($id_client){
	$this->loadmodel('Service');
	$this->loadmodel('client');
	if($this->request->is('post')){
		//debug($this->request->data);
        
 		$conh=$this->Service->findByNom($this->request->data['Article']['service'],array('ID'));
 		$data1=$this->request->data;
 		//debug($conh);
 		$data1['Article']['id_service']=$conh['Service']['ID'];
 		$data1['Article']['paye']='0';
        $data1['Article']['id_client']=$id_client;
 		//debug($data1);
  		$this->Article->create($data1,false);
 		$data_send_to_id=$this->Article->save(null,true);
 		$this->set('id_client',$id_client);
		if($data1['Article']['RDV']=='Oui'){

 			$this->redirect(array('controller'=>'Appointmentes','action'=>'add\\'.$id_client.''));
 		}
 	/*	$this->loadModel('Commande');
 		$data_to_commandes=array('id_client'=>$id_client,'id_article'=>$data_send_to_id['Article']['id'],'etat'=>'0');
		$this->Commande->create($data_to_commandes,false);
		$this->Commande->save(null,false); 		
*/
	}else{
		$nom_client_find=$this->client->findById($id_client,array('client.NOM'));
		$this->loadmodel('Service');
		//debug($this->Service);
		$nom_tapis=$this->Service->find('all',array('fields' =>array('ID','NOM')));
		//debug($nom_tapis);

		$i=0;
		$tab1=array();
				foreach( $nom_tapis as $tab){
					$tab1=array_merge($tab1,array($tab['Service']['NOM']=>$tab['Service']['NOM']));
					$i++;
				}
  		$this->set(array('nom_tapis'=>$tab1,'nom_client_find'=>$nom_client_find['client']['NOM'],'id_client'=>$id_client));
  }

}
}

?>