<?php
include_once './includes/bdd.inc.php';



if(isset($_POST["form-add"]))
{
  
  $_POST['user'];
  $_POST['passworld'];
  $test= password_hash($_POST['passworld'] ,PASSWORD_DEFAULT);
  $req = $bdd->prepare("INSERT INTO login(user, passworld) VALUES(:user,:passworld)");
  $req->execute(array(
  'user' => $_POST['passworld'],
  'passworld' =>$test,
  ));

}
$hash='$2y$10$aWtUjxJmXp5b1vGV9yewmOk3T.IgdEfe3AGCz1kvQKU7PdAyGWQtC';
if (password_verify('rasmuslerdorf', $hash)) {
  echo 'Le mot de passe est valide !';
} else {
  echo 'Le mot de passe est invalide.';
}
/*$req = $bdd->prepare('SELECT id, passworld FROM login WHERE USER =:user');
$req->execute(array('user'=>$user));


/*$resultat = $req->fetch();
$correct = password_verify( $_POST['passworld'],$resultat['passworld']);
if (!$resultat)
{
    echo 'Mauvais identifiant ou mot de passe !';
}
else
{
    if ($isPasswordCorrect) {
        echo 'correct';
    }
    else {
      echo 'Mauvais identifiant ou mot de passe !';
  }
}  */