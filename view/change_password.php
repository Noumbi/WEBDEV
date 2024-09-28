<?php
require_once"../model/func.php";
$dex=change();
?>

<html>
    <head>
    <link rel="stylesheet" href="./css/reset.css" type="text/css">
        
    </head>
    <body class='dy'>
        <section class='ec'>
    <h3 class='pass'>RESET PASSWORD</h3>
    <form method ='post'class='place'>
    <label for='username'>username</label>
    <input type='username'placeholder='Enter your username' id='username' name='username' class='pla'>
    <label for='password'>new password</label>
    <input type='password' id='password' name='password' class='pla'>
    <input type= 'submit' value='reset' name='reset'class='pla'>
</form>
</section>
    </body>
</html>