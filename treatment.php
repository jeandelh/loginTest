<?php
include_once './includes/bdd.inc.php';

//ajout mot de passe en base
//................................
// if(isset($_POST["form-add"]))
// {
  
//   $_POST['user'];
//   $_POST['passworld'];
//   $test= password_hash($_POST['passworld'] ,PASSWORD_DEFAULT);
//   $req = $bdd->prepare("INSERT INTO login(user, passworld) VALUES(:user,:passworld)");
//   $req->execute(array(
//   'user' => $_POST['passworld'],
//   'passworld' =>$test,
//   ));

// }
/*................................................*/



/*............vérification mot de passe.......................................*/ 
if(isset($_POST['passworld'])) {

  $pass=$_POST['passworld'];

  $stored_password='$2y$10$ZWTOXECIsDu/7ImA0..8auXDye05oV2.365S3R/KouTvGaPJ3SGbG';

  if (password_verify( $pass, $stored_password)) {
   
    $secure=1;
    
  } else {
    $secure=2;
  }
}
else
{
  $erreur="erreur veuillez remplir les champs";
  echo $erreur;
}

if (isset($secure) AND $secure ==  1) 
{
  echo 'Le mot de passe est valide !';
}
else
{
  echo 'Le mot de passe est pas valide !';
}

/*..................................................*/
/*.....................vérification mail............................ */

if(isset($_POST['user'])) {

    $email = $_POST['user'];
            
    $masque = "/^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@([a-zA-Z0-9-]+\.)+[a-zA-Z]{2,4}$/";
              
            
          
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) 
    {
        $mailSecure=1;
    } 
    else 
    {
        $mailSecure=2;
    }


    if(preg_match($masque, $email))  
    {
        $mailSecure=1;
    } 
    else
            
    {
       $mailSecure=2;
    }

}
else
{
    $erreur="erreur veuillez remplir les champs";
    echo $erreur;
}

if (isset($secure) AND $mailSecure ==  1) 
{
  echo 'adresse mail est valide !';
}

else
{
  echo 'adresse mail est pas valide !';
}
/*...................................................*/
/*.........vérification si les champs sont remplis..............................*/   

