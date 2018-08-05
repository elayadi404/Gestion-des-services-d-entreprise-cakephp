<?php

echo '<table> <tr> <td> type </td></tr>';
foreach ($touslestype as $val) {
	echo '<tr>
<td> '.$this->Html->link(''.$val['TypeClient']['TYPE'].' '.'',array('controller'=>'TypeClients','action'=>'update\\'.$val['TypeClient']['id'].'')).' </td></tr>
';
	}
	echo '</table>';




?>