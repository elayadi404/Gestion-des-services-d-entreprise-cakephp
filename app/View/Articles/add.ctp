<?php 
echo '<script language="JavaScript">

function selectuni(){
    var divto=document.getElementById("un11");
var ff=document.getElementById("un1");
if(ff.checked==true){
divto.innerHTML="Quantté : <input type=number name=data[Article][UNITE] >";
}else{
	divto.innerHTML="";
}
}

function selectlarg(){
    var divto=document.getElementById("lar11");
var ff=document.getElementById("lar1");
if(ff.checked==true){
divto.innerHTML="Largeur: <input type=number name=data[Article][LARGEUR] >";

}else{
	divto.innerHTML="";
}}
function selectlang(){
    var divto=document.getElementById("lan11");
var ff=document.getElementById("lan1");
if(ff.checked==true){
divto.innerHTML="langueur : <input type=number name=data[Article][LANGUEUR] >";

}else{
	divto.innerHTML="";
}}
function selectaut(){
    var divto=document.getElementById("aut11");
var ff=document.getElementById("aut1");
if(ff.checked==true){
divto.innerHTML="hauteur : <input type=number name=data[Article][HAUTEUR] >";

}else{
	divto.innerHTML="";
}}



</script>';



	if(!$this->request->is('POST')){
echo '<fieldset class="fieldset"><legend> Enregistrer  la commande du client : '.$nom_client_find.'</legend>';
echo 
$this->Form->create('Article',array('label'=>'type de produit')).
$this->Form->input('nom_client',array('value'=>$nom_client_find)).
$this->Form->input('id_client',array('value'=>$id_client,'disabled')).
$this->Form->input('service',array('options'=>array('empty' => '(choisissez)',array($nom_tapis)),'onchange'=>'showTypeService();','label'=>'type de produit','required'=>'required'));
echo '<div ></div>';

echo "<div classe=select>
"."<div class='large-3 columns' >".
$this->Form->input('isUNITE',array('type'=>'checkbox','label'=>'quantité','id'=>'un1' ,'onchange'=>'selectuni();'))."</div><div class='large-3 columns' >".
$this->Form->input('isLARGEUR',array('type'=>'checkbox','label'=>'Largeur','id'=>'lar1','onchange'=>'selectlarg();'))."</div><div class='large-3 columns' >".
$this->Form->input('isLANGEUR',array('type'=>'checkbox','label'=>'Langueur','id'=>'lan1', 'onchange'=>'selectlang();'))."</div><div class='large-3 columns' >".
$this->Form->input('isHAUTEUR',array('type'=>'checkbox','label'=>'hauteur','id'=>'aut1', 'onchange'=>'selectaut();')).
"</div>"."<div id='show'><div id=un11 class='large-3 columns'></div><div id=lar11 class='large-3 columns' ></div><div id=lan11 class='large-3 columns' ></div><div id=aut11 class='large-3 columns' ></div></div>"."<div class=row ><div class='large-12 columns'>".
$this->Form->input('description',array('label'=>'Description'))."</div></div>".
$this->Form->input('RDV',array('label'=>'la client et besoin de transport ','options'=>array('Oui'=>'Oui','Non'=>'Non'))).$this->Form->submit(
    'Send', 
    array('class' => 'success button', 'title' => 'Custom Title')
);
				$this->Form->end();
}else{

	echo '<div class="callout success" >Votre service  a été bien   enregistrer : </div> <br>';
	echo $this->Html->Link('Enregistrer une autre  demmande de service pour ce client ',array('action'=>'add\\'.$id_client.''),array('class'=>'button success'));
	echo '<br>'.$this->Html->Link('générer la facture',array('controller'=>'factures' ,'action'=>'add\\'.$id_client.''),array('class'=>'button success'));





}
?>