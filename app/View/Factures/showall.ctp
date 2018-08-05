<?php
echo '<div class="row text-center"><div class="large-8 columns "><center><table >
<tr><td > Factures</td> </tr>';
foreach($allfactures as $value){
    $sow="show/".$value["Facture"]["ID_FACTURE"];
    echo '<tr> <td> '.$this->Html->link($value["Facture"]["created"],array("action"=>$sow )).' </td></tr>';
    
    
    
    
}
echo '</table></center></div></div>';



?>