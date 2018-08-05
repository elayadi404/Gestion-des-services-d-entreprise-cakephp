<html>
<head  ><meta charset="UTF-8"> 
<title>facture</title>
</head>
<body>
<div class="rows">
<div class="large-5 columns">

<font color="blue">
  SNJS <br>
Nettoyage et Jardinage   <br>
www.snjs.ma<br>
05.28.22.11.31<br>
<font >
</td>
</div>
<br>
<div class="large-5 columns"> <font color="blue">
Bon De Réception & Livraison</br>
N°: </font>
 </td></tr>
</div>
</div>
<br><br><br><br>
<div align="left">
 <div class="large-6 columns">
 Client
 <?=$donneeClient[0]['Client']['NOM']." ".$donneeClient[0]['Client']['PRENOM'];?>
 </p>
 <p align="right">
 Date :
<?=date("Y-m-t ")?>
 </p>
 
 </div>
 </div>
 
 

 
 
 
<table border="2"  height="170" width="1200">
 
<tr>
<td style=" background:Blue"  ><font color="white"> Désignation</font></td>
<td style=" background:Blue"><font color="white">Unité</font></td>
<td style=" background:Blue"><font color="white">Quantité</font></td>
<td style=" background:Blue"><font color="white">Prix Unitaire</font></td> 
<td style=" background:Blue"><font color="white">Prix Total</font></td>
</tr>
<?php
$sommetotale=0;
foreach ($donneeArticle as  $value) {

	$unit=($value['Article']['isUNITE']==1)?$value['Article']['UNITE']:0;
	$qtt="";
	$somme=0;
	if($value['Article']['isLANGEUR']==1){$unit="m";$qtt=$qtt.$value['Article']['LANGUEUR'];$somme=$value['Article']['LANGUEUR'];}

	if($value['Article']['isLARGEUR']==1){$unit=$unit."x m";$qtt=$qtt."*".$value['Article']['LARGEUR'];$somme=$somme*$value['Article']['LARGEUR'];}
	if($value['Article']['isUNITE']==1){$unit="pièce";$qtt=$qtt."*".$value['Article']['UNITE'];$somme=($somme==0)?$value['Article']['UNITE']:$somme*$value['Article']['UNITE'];}
	$somme=$somme*$value["Service"]["PRIX_UNITAIRE"];
	
	


	
echo '
<tr>
<td>'.$value['Service']['NOM'].'</td>
<td>'.$unit.'  </td>
<td>  '.$qtt.'</td>
<td>  '.$value["Service"]["PRIX_UNITAIRE"].'</td>
<td>  '.$somme.'</td>
</tr>';
$sommetotale=$sommetotale+$somme;

}

?>
<td colspan="4" style="text-align:right"><font color="Blue">TOTAL</font></td>
<td><?=$sommetotale;?></td>
</tr>
</table>




<script type="text/javascript">
function imprimer_page(){
  window.print();
}
</script>
<div class="large-4 columns">
<h3><font color="blue">Visa Client</font></H3>
<table border="1" align="left" style="width:450px" style="height:270px">
	<tr style=" background:Blue"  >
		<td><center><font color="white"> Livraison</font></center></td>
         <td><center><font color="white"> Réception</font></center></td>
     </tr>
     <tr>
		<td><textarea rows="4" cols="27"></textarea></td>
         <td><textarea rows="4" cols="27"></textarea></td>
     </tr>
 </table>
 
 </div>
 <div class="large-4 columns ">
        <fieldset class = "fieldset"  >
    <legend> Visa SNJS </legend>
    <textarea  rows="6" cols="12" ></textarea>
    </fieldset>

</div><div class="large-4 columns">
<br><br><br>

<table border='1' align="right">
  <tr>
    <td>
      <font color="blue"><center>

       SNJS sarl. Avenue Hassan 1er Bloc G4 N°5 Dakhla - Agadir</br>
       Tél : 05 28 22 11 31 - Fax : 05 28 23 29 35</br>
       Email : snjs.sarl@gmail.com</center></font>

</td>
</tr>
</table>
</div>
<div class="large-10 columns">
<center>

<form>
  <input id="impression" name="impression" type="image" onclick="imprimer_page()" value="Imprimer cette page" style="width:60px" style="height:70px" src="http://icon-icons.com/icons2/629/PNG/512/print-printer-tool-with-printed-paper-outlined-symbol_icon-icons.com_57772.png" />
</form>

</center>

 </div>
 
</body>
</html>