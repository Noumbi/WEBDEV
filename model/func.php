<?php

function noumbi(){/* permet de creer une function qui etablit la connxion*/
    $too =new PDO ("mysql:host=localhost;dbname=gojo","root",'');/*permet d'etablir la connexion avec la bd*/
    return $too;
}


function register(){
    $cal=noumbi();
    if(isset($_POST['ok'])){
        if(empty($_POST['Username']) || empty($_POST['Email']) || empty($_POST['Password'])){
           
           echo"veiller remplir tout les champs <a href='index.php'>BACK</a>";
        }else{
            $demon ="insert into projet(Username,Email,Password) values(?,?,?)";
        $cash= $_POST ['Username'];
        $seikai = $_POST ['Email'];
        $ikai = $_POST ['Password'];
        $yonko=$cal->prepare($demon);
        $yonko->bindParam(1,$cash);
        $yonko->bindParam(2,$seikai);
        $yonko->bindParam(3,$ikai);
        $yonko->execute();
        echo"Enregitrement reussir";
        header('Location:./view/login.php');
    }
    }else{
        //echo"echec";
    }
}/* 
function lo(){
    $cal=noumbi();
    if(isset($_POST['ok'])){
        $cash= $_POST ['Email'];
        $ikai = $_POST ['Password'];
        $demon ="insert into projet(Email,Password) values(?,?)";
        $yonko=$cal->prepare($demon);
        $yonko->bindParam(1,$cash);
        $yonko->bindParam(2,$ikai);
        $yonko->execute();
        echo"connexion reussir";
        header('Location:./view/forget.php');
    }else{
        echo"echec";
    }
}*/
function forget(){
    $cal=noumbi();
    if(isset($_POST['ok'])){
        $cash= $_POST ['Username'];
        $demon ="select * from projet where Username=?";
        $yonko=$cal->prepare($demon);
        $yonko->execute(array($cash));
        $ww=$yonko->fetch();
        if($ww){
        echo"ok";
        header('Location:./change_password.php');
    }else{
        echo"Enter your Name";
        
    }
    }
}
function login(){
    $cal=noumbi();
    if(isset($_POST['connexion'])){
        if(empty($_POST['Email']) || empty($_POST['Password'])){
           
        }
         $seikai = $_POST ['Email'];
        $ikai = $_POST ['Password'];
        $demon ="select * from projet where Email=? and Password=?";
        $yonko=$cal->prepare($demon);
      
        $yonko->execute(array($seikai,$ikai));
     
       $aa=$yonko->fetch();//ajt id user
        if($aa){
            echo"conncter";
           
        header('Location:./page-fugure.php?id='.$aa['id']);//ajouter un id user
        }else{
            echo" user n'existe pas";
        }
    
    }

}
function change(){
    $cal=noumbi();
    if(isset($_POST['reset'])){
        if(empty($_POST['username']) || empty($_POST['password'])){
            echo"Update password please";  
        }else{
    $seikai = $_POST ['username'];
    $ikai = $_POST ['password'];
    $demon ="UPDATE `projet` SET `Password`=? WHERE `username`=?";
    $yonko=$cal->prepare($demon);
    $yonko->bindParam(1,$ikai);
    $yonko->bindParam(2,$seikai);
    $yonko->execute();
    $red="select * from projet where  username=? and password=?";
   $vlc=$cal->prepare($red);
   $vlc->execute(array($seikai,$ikai));
    $wwe=$vlc->fetch();
    if($wwe){
    echo"successfull update password";
    header('Location:./page-fugure.php?id='.$wwe['id']);//redirection vers une autre page
}
}
} 
}
?>