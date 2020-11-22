<?php
include_once './includes/bdd.inc.php';
?>
<!DOCTYPE html>
<html lang="fr">

    <?php include_once './view/head.html'; ?>

    <form method="post" action="treatment.php"  >

        <h1>Ajouter</h1>
        <div class="form-group">

            <label for="exampleInputEmail1">email</label>
            <input type="text"  class="form-control" id="user" name="user" aria-describedby="emailHelp" placeholder="lucasDubois@gmail.com">
                                    
        </div>
                                    
        <div class="form-group">

            <label for="exampleInputEmail1">mot de passe</label>
            <input type="text" class="form-control" id="passworld" name="passworld" aria-describedby="emailHelp" placeholder="ex:mot de passe">
                                
        </div>
        <input type="hidden"  name="form-add">
        <button type="submit" class="btn btn-primary">ajouter</button>
   </form>
   
</html>