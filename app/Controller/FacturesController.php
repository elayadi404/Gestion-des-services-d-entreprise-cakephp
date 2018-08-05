<?php
class FacturesController extends AppController{
	function add($id_client ){

					$this->loadModel('Article');
				
			 if(!$this->request->is('post')){




					
						$ligne_de_commandes=$this->Article->find('all' , array( 'fields'=>array('Article.ID,Service.NOM,Service.PRIX_UNITAIRE, LANGUEUR ,LARGEUR' ),'conditions'=>'Article.id_client = '.$id_client.' and Article.paye = 0 '));
						//debug($ligne_de_commandes);
						$tab_ligne_found=array();
						$i=0;
						foreach ($ligne_de_commandes as $element) {

						$tab_ligne_found=array_merge($tab_ligne_found,array($element));
						$i++;
						}
						//debug($tab_ligne_found);
						$this->set(array('tab_ligne_found'=>$tab_ligne_found,'id_client'=>$id_client));

					}else{
						$this->loadModel('Client');
						$this->loadModel('Article');

					$info_client = $this->Client->find('all',array('fields'=>array('Client.NOM , Client.PRENOM,Client.ID') , 'conditions'=>'Client.ID = '.$id_client.'' ));
			//	debug($this->request->data);


						foreach ($this->request->data as $value) {
							//$this->Article->query('update articles set paye = 1 where ID = '.$value.' ');
						}
						$article_to_facture=$this->Article->find('all',array('fields'=>array('Article.ID,Service.NOM,Service.PRIX_UNITAIRE, LANGUEUR ,LARGEUR'),'conditions'=>array('id_client = '.$id_client.'','paye = 1')));
							$this->set(array('article_to_facture'=>$article_to_facture,'info_client'=>$info_client));
							$str11=trim($this->request->data['select_article']);
							$article_selected=explode(' ',$str11);
							$data5=array();
							$data5['Facture']['ID_CLIENT']=$id_client;
							$data5['Facture']['TVA']=5;
							$data5['Facture']['DATE']=date('Y-m-t');
							$data5['Facture']['HEURE']=date('H:i:s');
							$this->Facture->create($data5,false);
							$idFacture2=$this->Facture->save(null,false);
							echo "la facture est crier avec id :";
							$idFacture=$idFacture2['Facture']['id'];

							foreach ($article_selected as  $value) {
								$sql1='update articles set  paye='.$idFacture.' where id='.$value.';';
								$this->Article->query($sql1);
													# code...
							}


							$this->redirect(array('action'=>'show\\'.$idFacture.''));




					}
			}


	function show($id_facture){
		if(isset($id_facture)){
			$this->loadModel('Article');
			$this->loadModel('Client');
			$this->loadModel('Service');
			$donneeF=$this->Facture->find('all',array('conditions'=>'ID_FACTURE = '.$id_facture.''));
		//	debug($donneeF);
			$donneeC=$this->Client->find('all',array('conditions'=>'Client.ID = '.$donneeF[0]['Facture']['ID_CLIENT'].''));
			$donneeA=$this->Article->find('all',array('conditions'=>'paye = '.$donneeF[0]["Facture"]["ID_FACTURE"].''));
			
			//debug($donneeC);
			//debug($donneeA);
			$this->set(array('donneeFacture'=>$donneeF,'donneeArticle'=>$donneeA,'donneeClient'=>$donneeC));


		}






	}
	function addselect(){
		$this->loadModel('Client');
		if($this->request->is('post') ){
			$this->request->data;
			if(isset($this->request->data['Client']['champ_nom'])){
				//cherche par nom 
				$find_client_by=$this->Client->findByNom($this->request->data['Client']['champ_nom']);

			}else{
				// cherch par nemero de tel 
				$find_client_by=$this->Client->findByTelephone($this->request->data['Client']['champ_tel']);
				if(!empty($find_client_by))				$this->redirect(array('action'=>'add/'.$find_client_by['Client']['ID'].''));


			}
			$this->set('find_client_by',$find_client_by);
			}



	}
    
    function showall($idclient){
        //debug($idclient);
        $allfactures=$this->Facture->findAllByIdClient($idclient);
        //debug($allfactures);
        $this->set("allfactures",$allfactures);
        
        
        
        
        
        
        
    }
	
}



?>