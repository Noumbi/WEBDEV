<?php 
 require_once"./model/func.php";
 
 if(isset($_POST['ok'])){
    register();
    
 }elseif(isset($_GET['action'])){
   if($_GET['action']=='connexion'){
      header('Location:./view/login.php');
   }elseif($_GET['action']=='reset'){
      header('Location:./view/forget.php');
   }elseif($_GET['action']=='deconnexion'){
      header('Location:./view/login.php');
   }
 
}
 else{
    require"./view/registor.php";
 }
 
 ?>