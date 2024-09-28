<?php
             require_once"../model/bd.php";//requireOnce permet de charger un fichier dans un autre fichier en fin de pouvoir utiliser les fonction qui se trouve dans ce fichier 
             $dex=image();
             $ap=recupere();
            
 ?> 
<html>
    <head class=ent>
    <link rel="stylesheet" href="./css/acceuil.css" type="text/css">
    <link rel="stylesheet" href="./css/acceuil-1.css" type="text/css">
    <link rel="stylesheet" href="./css/fugure.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
     <title>
        My favory fugure sky
     </title>   
    </head>
    <body class='corp'>
        <header class='hea'>
            <img src='./photo.webp' class='fre'>
            <nav class='na'>
                <ul class='wq'>
                    <li class='boos'>
                        home
                    </li>
                    <li class='boos'>
                    <a href="#" class='lien'>strick</a>
                    </li>
                    <li class='boos'>
                    <a href="./index.php?action=deconnexion">sign in</a>
                    </li>
                    <li class='boos'>
                    <a href="../index.php?action=deconnexion">log out</a>
                    </li>
                </ul>
            </nav>
            
        </header>
      
         <div class='flo'>
         <p class='sky'>Fans de sky? Alors venez partager vos plus belles figures avec nous </p>
            <img src='./télécharger (2).jpg' class='weh'>
         </div>
        <form method='post'enctype="multipart/form-data" class='for'>
        <label for='titre'>Titre</label>
            <input type='titre' id='titre' name='titre' class='put'>
            <input type="file" id="file" name="image" class='put'>
           
            <label for='description'>Description</label>
            <input type='text' id='description' name='description' class='put'>
            <input type='submit' value='envoyer' name='envoyer' class='put'>
        </form>
        <div class='phone'>
           <?php 
            foreach($ap as $app){//foreach permet de parcourir un tableau pour recuperer ces valeurs et l'afficher sur la page
                echo"<article class='art'>";
                
             
             echo"<img src='../image/$app[fichier]'class='woo'>";
             echo"<div class='saad'>";
             echo"<a href='img-des.php?id_img=$app[id]'> $app[titre]</a>";
             echo"<a href='./delete.php?id_delete=$app[id]' class='rr'> <i class='fa-solid fa-trash-can'></i></a>";
             echo"<a href='./update.php?id_update=$app[id]' class='rr'> <i class='fa-solid fa-pen'></i></a>";
             echo"</div>";
             echo"</article>";
             
            }
           ?>
        </div>    
    </body>
    <script>
        const jo=document.querySelector('.lien')//masquer le formulaire 
        console.log(jo)
        jo.addEventListener('click',()=>{
            document.querySelector('.for').style.display='block'
        })
    </script>
</html>