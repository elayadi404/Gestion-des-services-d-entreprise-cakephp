<?php
class PannelsController extends AppController {
 public $helpers = array(
		'Editor' => array(
			'className' => 'Summernote.Summernote'
		),
	);
function index(){
$this->loadModel('Note');
  

}	
function notes(){
	$this->Layout=null;
	 
}




}


?>