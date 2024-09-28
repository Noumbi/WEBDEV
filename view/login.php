 <?php
require_once"../model/func.php";
$dex=login();
?>
<html>
   
        <head>
            <title>login</title>
        <link rel="stylesheet" href="./css/login.css" type="text/css">
        </head>
    <body class='bod'>
        
    

<section class='form'>
<h2 class='conn'>
    CONNEXION
    </h2>
   <div class='feu'>
   <form method ='post' class='des'>
    <label for='Email'>Email</label>
    <input type='Email' id='Email' name='Email' class='new'>
    <label for='Password'>Password</label>
    <input type='Password' id='Password' name='Password' class='new'>
    <input type= 'submit' value='connexion' name='connexion' class='new'>
</form>
</div>
<div class='link'>
<a href="../index.php" class='yoo'>registor</a>
<a href="../index.php?action=reset" class='yee'>Mot de passe oublier</a>
</div>
</section>
</body>
</html> 