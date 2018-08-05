<?php
class TapisController extends AppController{
function add(){
if($this->request->is('POST')){
$this->Tapi->create($this->request->data,false);
$this->Tapi->save(null,true);


}


}


}

?>