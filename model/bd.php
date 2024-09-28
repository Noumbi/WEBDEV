<?php
  require_once"../model/func.php";


function image(){
  $voo=noumbi();
  if (isset($_POST['envoyer'])){
    if(empty($_POST['titre']) || empty($_FILES['image']) || empty($_POST['description'])){
      echo "Veiller bien remplir les champs";
  }
   
   /* if($_POST['titre']==null || $man['name']==null || $_POST['description']==null){
      echo "Veiller bien remplir les champs";
  }*/else{
    $dober=$_POST['titre'];
    $man=$_FILES["image"];
    $kengan=$_POST['description'];
    $an=$_GET['id'];//ajouter un id user
    $quie="INSERT INTO `image`( `titre`, `description`, `fichier`,`id_user`) VALUES (?,?,?,?)";
    $noum=$voo->prepare($quie);
    $noum->bindParam(1,$dober);
    $noum->bindParam(2,$kengan);
    $noum->bindParam(3,$man['name']);
    $noum->bindParam(4,$an);
    $noum->execute();
   
    move_uploaded_file($man["tmp_name"],"../image/".$man["name"]);/*move_uplo.. permet e sauvegarderune image dans un dossier*/
  }
  }
}
function recupere(){//cette function permet de recuperer les valeur dans la table de la bd 
  $recu=noumbi();
  $img="select * from image";
  $ok=$recu->query($img);
 
  return $ok;// le return nous permet de recuperer les element de la fonction dans la bd et de les afficher sur la page
}
function recu_img(){
  $joo=$_GET['id_img'];
  $img=noumbi();
  $des="select * from image where id=?";
  $do=$img->prepare($des);
  $do->execute(array($joo));
  return $do;
}
function update(){
  if (isset($_POST['envoyer'])){
    if(empty($_POST['titre']) || empty($_FILES['image']) || empty($_POST['description'])){
        echo "Veiller bien remplir tout les champs";
    }
    else{
    $cas= $_POST['titre'];
    $sei = $_FILES['image'];
    $kai =$_POST['description'];
    $gg=$_GET['id'];
    $whoot=noumbi();
    $det = "UPDATE `image` SET `titre`=?,`fichier`=?,`description`=? WHERE id=?";
    $hdd = $whoot->prepare($det);
    $hdd->bindParam(1, $cas);
    $hdd->bindParam(2, $sei['name']);
    $hdd->bindParam(3, $kai);
    $hdd->bindParam(4, $gg);
    $hdd->execute();
    
    echo" modifier avec succes";
    header('Location:./page-fugure.php');
    }
  }
}
  function aff_val_input_du_form(){
    $bloc = $_GET['id_update'];
    $whoot=noumbi();
    $ancien= "select * from image where id =?";
    $nou=$whoot->prepare($ancien);
    
    $nou->execute(array($bloc));
    $vea=$nou->fetch();
    if($vea){
      return $vea;
    }
  }
  
  function delete(){
    if (isset($_POST['envoyer'])){
    $bloc = $_GET['id_delete'];
    $whoot=noumbi();
    $green="select * from image where id=?";
    $vlc=$whoot->prepare($green);
    $vlc->execute(array($bloc));
    $min=$vlc->fetch();

    $det = "DELETE FROM `image` WHERE id=?";
    $hdd = $whoot->prepare($det);
    $hdd->bindParam(1,$bloc);
    $hdd->execute();
   
    
    if($min){
    header('Location:./page-fugure.php?id='.$min['id_user']);
    }
  }
}
function description(){
  if (isset($_POST['Ajouter'])){
    if(empty($_FILES['image'])){
      echo "Veiller bien remplir les champs";
  }else{
    $zzz = $_FILES['image'];       
    $nn=$_GET['id_img'];
   $cok=noumbi();
   
   $black="INSERT INTO `des_image`(`image`,`id_type_figure`) VALUES (?,?)";
   $xx=$cok->prepare($black);
$xx->bindParam(1,$zzz['name']);
$xx->bindParam(2,$nn);
   $xx->execute();
   $ewq=$xx->fetch();
   if($ewq){
     return $ewq;
   }
 }
}
  }
  function font(){//cette function permet de recuperer les valeur dans la table de la bd 
    $recu=noumbi();
    $img="select * from des_image";
    $ko=$recu->query($img);
    return $ko;
  }


    