<center><div class="callout success"> <h3>Gestion des Rendez-vous </h3></div></center>
 <table style="width: 100%" border="1">
      <tbody>
        <tr>
          <td>Client</td>
          <td>Rendez-vous</td>
          <td>Date</td>
          <td>heur</td>
          <td>rendez-vous et fait ?</td>
        </tr>
<?php
	foreach ($all_rdv as $val) {
	echo '
        <tr>
          <td >'.$val ['Client']['NOM'].'  '.$val['Client']['PRENOM'].' 
          </td>
          <td >'.$val ['Appointmente']['TYPE'].'
          </td>
          <td>'.$val ['Appointmente']['DATE'].'
          </td>
          <td>'.$val ['Appointmente']['HEURE'].'
          </td>
          <td>'.$this->Form->checkbox('verf',array('checked'=>$val ['Appointmente']['VIREFICATION_RDV_'],'readonly'=>"readonly") ).'
          </td>
        </tr>
     ';

    }
	?>
	 </tbody>
    </table>
