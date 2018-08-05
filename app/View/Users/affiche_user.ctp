<?= $this->Session->flash(); ?>
<?php

echo '<table> <tr> <td> nom </td><td>username</td><td>email</td></tr>';
foreach ($all_user as $val) {
	echo '<tr>
<td> '.$this->Html->link(''.$val['User']['USER_NOM'].'  '.$val['User']['USER_PRENOM'].'',array('controller'=>'Users','action'=>'update\\'.$val['User']['id'].'')).' </td><td>'.$val['User']['username'].'</td><td>'.$val['User']['USER_EMAIL'].'</td></tr>
';
	}
	echo '</table>';



?>

