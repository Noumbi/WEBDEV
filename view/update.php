<?php
  require_once"../model/bd.php";
  $qwe=update();
 $vea=aff_val_input_du_form();

?>
 <form method='post'enctype="multipart/form-data" class='for'>
        <label for='titre'>titre</label>
            <input type='titre' id='titre' name='titre' value=<?php echo $vea['titre'];?> class='put'>
            <input type="file" id="file" name="image"  class='put'>
           
            <label for='description'>description</label>
            <input type='text' id='description' name='description'value=<?php echo $vea['description'];?> class='put'>
            <input type='submit' value='envoyer' name='envoyer' class='put'>
        </form>

  