
<form action="" methode="get">
    <label>Login :</label>
    <input type= "text" name="mdp">

    <input type="submit" value="Connexion">
</form>

<?php
     $listeUtilisateurs =[
        ["Tya","test1"],
        ["Milo","test2"],
        ["Lili","test3"]
     ];

     if(!empty($_GET['login']) && !empty($_GET['mdp'])){
        $log = $_GET['login'];
        $mdp = $_Get['mdp'];

        $connecte = estConnecte($listeUtilisateurs, $log, $mdp);
        if(!$connecte){
            echo "combinaison login / mot de passe incorrect, recommencez !";
        } else {
            echo "vous etes connecté";
        }
     }

     function estConnecte($utilisateurs,$login,$password){
        for($i = 0; $i < sizeof($utilisateurs); $i++){
            if($login === $utilisateurs[$i][0] && $password === $utilisateurs[$i][1]){
                return true;
            }
        }
        return false;
     }
?>