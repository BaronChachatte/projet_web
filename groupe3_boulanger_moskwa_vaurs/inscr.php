<?php
if(isset($_POST['formsend']))
{
    
    extract($_POST);

    if (!empty($mdp) && !empty($nom) && !empty($prenom) && !empty($email))
    {

        $options = [
            'cost' => 12,
        ];

        $hashmdp = password_hash($mdp, PASSWORD_BCRYPT, $options);

        include 'database.php';
        global $db;

        $q = $db ->prepare("INSERT INTO users(nom,prenom,email,mdp) VALUES(:nom,:prenom,:email,:mdp)");

        $q->execute([
            'nom' => $nom,
            'prenom' => $prenom,
            'email' => $email,
            'mdp' => $hashmdp,
        ]);
    
    }else{
        echo "les champs ne sont pas tous remplis";
    }
}
?>