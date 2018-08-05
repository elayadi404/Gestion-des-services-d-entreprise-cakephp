<?php

echo '<table> <tr> <td> type </td></tr>';
foreach ($touslestype as $val) {
	echo '<tr>
<td> '.$this->Html->link(''.$val['Service']['NOM'].' '.'',array('controller'=>'Services','action'=>'update\\'.$val['Service']['ID'].'')).' </td></tr>
';
	}


	echo '</table>';


?>