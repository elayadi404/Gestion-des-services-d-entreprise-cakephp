<?php
class OutputController extends AppController{
    function beforeFilter(){
        parent::beforeFilter();
        $this->Auth->allow();

    }
    function index(){
       $this->layout=false;
            // connection to the database.
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        $bdd = new PDO('mysql:host=localhost;dbname=proj', 'root', '', $pdo_options);
        if ($_GET['req']=="rdv"){
    

        $sql = 'SELECT ID_RDV , id ,nom , prenom, ADRESSE,COORDONNEES,DATE,HEURE FROM appointmentes  INNER JOIN clients ON appointmentes.ID_CLIENT = clients.ID AND appointmentes.TYPE = "rdv_r_condicteur" AND VIREFICATION_RDV_="0" AND  DATE_FORMAT( DATE, "%Y-%m-%d"  ) =DATE_FORMAT(NOW(),"%Y-%m-%d" );';
       $response = $bdd->query($sql);
        $output = $response->fetchAll(PDO::FETCH_ASSOC);
            echo(json_encode($output));
        }else if($_GET['req']=="aut" && isset($_GET['user'] )&& isset($_GET['pass'])){
            $pass=$this->Auth->password($_GET['pass']);
        $sql='SELECT USER_NOM,USER_PRENOM,username FROM users WHERE USERNAME="'.$_GET['user'].'" AND PASSWORD="'.$pass.'";';
       $response = $bdd->query($sql);
        $output = $response->fetchAll(PDO::FETCH_ASSOC);
            echo(json_encode($output));
        }else if($_GET['req']=="valid_rdv" && isset($_GET['rdvtoval'])){
            echo $_GET['rdvtoval'];
            $sql='UPDATE appointmentes set VIREFICATION_RDV_ = "1" WHERE ID_RDV="'.$_GET['rdvtoval'].'";';
         if( $response = $bdd->query($sql)){
            echo "le rendivous et validé";

         }
//$output = $response->fetchAll(PDO::FETCH_ASSOC);
  
    if($response){echo "ok ";
            var_dump($response);
            }

      
}
}
}
?>