<?php
echo '<div >
<table>

';


foreach ($messages as $value) {

	echo '<tr><td class="td_user"> <h5> Mr '.$this->Session->read('Auth.User.USER_NOM').' '.$this->Session->read('Auth.User.USER_PRENOM').'</h4></td><td><h4>'.$value['Message']['subject'].'</h5><BR> '.$value['Message']['body'].' </td></tr>';

}


echo '</table></div>';
?>