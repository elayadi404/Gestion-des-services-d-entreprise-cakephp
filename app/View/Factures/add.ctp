<?php
 if(!$this->request->is('post')){
     

         
         
         
         
        
     
echo $this->Form->create('Facture',array('label'=>'Validé','name'=>"Facture", 'onSubmit' => ' return confirmfrmSubmit123();'));
	
		echo '<table border="5"> <tr> <td> La commmande </td><td>le prix</><td>Validé</td>  </tr>';
		$select_checkbox=array();
		$i=0;
		//debug($tab_ligne_found);
		foreach($tab_ligne_found as $elem_ligne){
			
				//debug($article_info);
			
				//debug($tapis_info);
			//debug($elem_ligne);

						echo '<tr> 
						<td>'.$elem_ligne['Service']['NOM'].' 
							<input type="hidden" name="article_'.$i.'" value= "'.$elem_ligne['Service']['NOM'].'">
								</td>
								<td><input type="text" name="article_prix_'.$i.'" value= "'.$elem_ligne['Service']['PRIX_UNITAIRE'].'"></input>

								</td>
								<td><input type="checkbox" name="article_id_valid'.$i.'" value='.$elem_ligne['Article']['ID'].' onclick="calc();">
								</td>
								</tr>';
$i++;
				//debug($article_info);
				//debug($tapis_info);
				//$this->Tapi->findById()
		}
		echo '
		 <tr> <td> Somme : </td> <td>  
<input type="text" name="result" readonly="readonly">
<input type="hidden" name="select_article" id="txt123" readonly="readonly" "hidden"="hidden" >

		</td>
		</tr></table><input type="submit" class="button " value="générer la facture" >';
     
		echo $this->Form->end();
				echo '<script language="JavaScript"
type="text/JavaScript">
function calc(){

var som = 0 ;
var id_val="";
for(var j=0;j<'.$i.' ;j++){
	$nam="article_prix_"+j;
	$chek="article_id_valid"+j;
	if(document.Facture.elements[$chek].checked== true ){
	som = som + parseFloat(document.Facture.elements[$nam].value,2);
	id_val = document.Facture.elements[$chek].value+" "+id_val;
}
//alert(document.Facture.elements[$nam].value + document.Facture.elements[$chek].checked);
}
document.Facture.elements["select_article"].value=id_val;

document.Facture.elements["result"].value=som;

}
//var a = document.getElementById("somme");


</script>';
	

}else{

//'article_to_facture'=>$article_to_facture,'info_client'=>$info_clien
echo 'la facture por le client ';
//debug($this->request->data);
debug($this->trequest->data['select_article']);




}



	

?>