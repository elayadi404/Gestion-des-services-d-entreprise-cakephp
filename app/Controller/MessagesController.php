<?php
class MessagesController extends AppController{
	
 	public function inbox() {
                    $this->LoadModel('User');
                    $messages = $this->Message->find('all', array(
                        'conditions' => array(
                            'recipient_id' => $this->Auth->user('id')
                        )
                    ));
                

                    
                 
                    $this->set('messages',$messages);
               

    }

    public function outbox() {
        $messages = $this->Message->find('all', array(
            'conditions' => array(
                'sender_id' => $this->Auth->user('id')
            )
        ));
         $this->set('messages',$messages);
    }

    public function compose() {
        $this->LoadModel('User');

$all_user=$this->User->find('all');
$all_user2=array();
foreach ($all_user as $value) {
        $all_user2=array_merge($all_user2,array($value['User']['username']));
    
}
$this->set('all_user',$all_user2);
        if ($this->request->is('post')) {
            $id_send_t=$this->User->findByUsername($this->request->data['Message']['send_to'],array('fields'=>'id'));
            $this->request->data['Message']['recipient_id']=$id_send_t['User']['id'];
            $this->request->data['Message']['sender_id'] = $this->Auth->user('id');
            $this->Message->create($this->request->data);
            if ($this->Message->save($this->request->data)) {     
                $this->Session->setFlash('Message successfully sent.');
              //  $this->redirect(array('controller'=>'Pannels','action' => 'index'));
            }
        }
    }



    function show($id_msg){
         if(isset($id_msg)){
                       $msg=$this->Message->findById($id_msg);
                                            $this->set('msg',$msg);

                    }

    }



}


?>