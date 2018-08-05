<?php
class UsersController extends AppController{
	public $helpers = array('Js');


function index(){

if ($this->request->is('post')){
$this->Client->create(array('id'=>12),true);
$this->Client->save(null,true,array('id'));


}



}
public function login(){   
           $this->layout=false;



	if(!empty($this->request->data)){
		if($this->Auth->login()){
           
                 $this->Session->setFlash(' Bienvenue dans votre espace de controle','flashmsgsuc');
			$this->redirect("/");
		}else {
			                 $this->Session->setFlash('erreur d\'authentification ','flashmsg');

		}

	}



}
public function logout(){

	$this->Auth->logout();
     $this->Session->setFlash('vous êtes maintenant déconnecté','flashmsgsuc');

	$this->redirect(array('action'=>'login'));

	
}

public function affiche_user(){
$all_user=$this->User->find('all',array('fields'=>'*'));
$this->set('all_user',$all_user);

}
public function update(){
	
		$user=$this->User->find('all');
		$this->set('table_user',$user);


		//$this->set('id_user',$id_user);
	if ( !empty($this->request->data['User']['choix'])){
		$id_user=$this->User->findByUsername($this->request->data['User']['choix'],array('fields'=>'id'));
		//debug($this->request->data['User']['choix']);
			$this->request->data=$this->User->findById($id_user['User']['id']);
 
	}
	if($this->request->is('post') && !empty($this->request->data['User']['v1'])){
		//echo "hiohihù";
		//	debug($id_user);
	//$data_to_send ="update users set 'USER_NOM' = 'HOL' where id = 3 " ;
	//	$this->User->query($data_to_send);
//		$data_to_send=
//		$this->User->updateall(	array('username'=>''.$this->request->data['User']['username'].'','password'=>''.$this->request->data['User']['password'].'','USER_NOM'=>''.$this->request->data['User']['USER_NOM'].''),array('username' => 'admin ' ));
		$pass=$this->Auth->password($this->request->data['User']['password1']);
//$id_user=$this->Auth->
$username1=$this->request->data['User']['username'];
		$this->User->updateall(array('USER_EMAIL'=>'"'.$this->request->data['User']['USER_EMAIL'].'"',
									'USER_PRENOM'=>'"'.$this->request->data['User']['USER_PRENOM'].'"',
									'USER_TELEPHON'=>'"'.$this->request->data['User']['USER_TELEPHON'].'"',
									'username'=>'"'.$this->request->data['User']['username'].'"',
									'USER_NOM'=>'"'.$this->request->data['User']['USER_NOM'].'"',
									'role'=>'"'.$this->request->data['User']['role'].'"',

									),array('username ="'.$username1.'" '));
		if(!empty($this->request->data['User']['password1'])){

$this->User->updateall(array('password'=>'"'.$pass.'"' ),array('username ="'.$username1.'" '));
                        $this->Session->setFlash('Les parametre sont modifier');

						$this->redirect(array( 'action'=>'affiche_user'));


		



	}


}
}
    function add(){
        if($this->request->is('post')){
            $this->request->data['User']['password']=$this->Auth->password($this->request->data['User']['password1']);
            $this->User->create($this->request->data,true);
            $this->User->save(true,false);
            $this->Session->setFlash('Utilisateur a été ajouter');
               
            $this->redirect("affiche_user");
            
            
            
            
            
            
        }
        
        
    }


}


?>
