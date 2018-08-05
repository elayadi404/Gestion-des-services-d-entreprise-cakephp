<?php
class AppointmentesController extends AppController{
	function index(){
		//show curent rAppointments



	}
	function add($id_client ){
		
			$this->loadModel('Client');
			$nom_client=$this->Client->findById($id_client,'Client.NOM');
			$this->set(array('nom_client'=>$nom_client,'id_client'=>$id_client));
				if($this->request->is('post') && isset($nom_client)){
				$data2=$this->request->data;
				//debug($data2);
				$data2['Appointmente']['ID_CLIENT']=$id_client;
				$coord=$data2['Appointmente']['latitude'].'|'. $data2['Appointmente']['longitude'];
				$data2['Appointmente']['COORDONNEES']=$coord;
				$this->Appointmente->create($data2,false);
				$this->Appointmente->save(null,true);
                $this->Session->setFlash(" Les données sont enregistrées",'flashmsgsuc');
				$this->redirect(array('controller'=>'Clients', 'action'=>'type_operation\\'.$id_client.''));
				}
	}
	function showall(){
		//show all appointment
		$all_appointment=$this->Appointmente->find('all');
		$this->set('all_rdv',$all_appointment);
	}



}


?>