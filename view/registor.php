<?php
require_once"./model/func.php";
$yyu=register();
?>

<html>
    <head>
        <link rel="stylesheet" href="./view/css/registre.css" type="text/css">
<title class='titre'>
    STRICK FIGURE
</title>

</head>
<body class='bo'>
<div class='dev'>
<header class='he'>
     WELCOME
</header>

</div>
<section class='end'>

<h3 class='freet'>
ENREGISTREMENT
</h3>
<div class='suite'>
<form method='post' class='for'>
    <label for='Username'>Username</label>
    <input type = 'Username' id='Username' name='Username' class='in'>
    <label for='Email'>Email</label>
    <input type = 'Email' id='Email' name='Email' class='in'>
    <label for='Passsword'>Password</label>
    <input type = 'Password' id='Password' name='Password' class='in'>
    <input type= 'submit' value='Creat an account' name='ok' class='in'>
</form>

<a href="index.php?action=connexion"> j'ai deja un compte</a>
</div>
</section>
</body>
</html>
  

