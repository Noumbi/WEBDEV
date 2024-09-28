<html>
    <head>
    <link rel="stylesheet" href="./css/img.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>

        </title>
    </head>


<?php 
require_once"../model/bd.php";//requireOnce permet de charger un fichier dans un autre fichier en fin de pouvoir utiliser les fonction qui se trouve dans ce fichier 
$over=recu_img();
$bbb=description();
$rrtt=font();
?> 
<div>
<form method='post'enctype="multipart/form-data" class='ich'>
<input type="file" id="file" name="image" class='ptt'>
<input type='submit' value='Ajouter' name='Ajouter' class='ptt'>
</form>
    <?php
    foreach($over as $wwe){
        echo"<img src='../image/$wwe[fichier]' class='joan'>";
        echo"<p class='allan'>$wwe[description]</p>";
       
        }
      foreach($rrtt as $apk){
        echo"<img src='../image/$apk[image]'class='wpp'>";
        echo"<a href='./delete.php?id_delete=$apk[id]' class='jj'> <i class='fa-solid fa-trash-can'></i></a>";
        echo"<a href='./update.php?id_update=$apk[id]' class='jj'> <i class='fa-solid fa-pen'></i></a>";
      }  
   
    ?>
</div>
</html>