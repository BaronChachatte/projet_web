<?php
if(isset($_POST['formlogin']))
{
    include 'database.php';
    global $db;

    extract($_POST);

    if(!empty($lemail) && !empty($lmdp))
    {
        $q = $db->prepare("SELECT * FROM users WHERE email = :email");
        $q->execute(['email' => $lemail]);
        $result = $q->fetch();

        if($result == true)
        {
            if (password_verify($lmdp, $result['mdp']))
            {
                $loggedUser = ['email' => $user['email'],];
            }
            else
            {
                echo "le mot de passe est erroné";
            }
        }
        else
        {
            echo "le compte correspondant a l'email" . $lemail . "n'existe pas";
        }
    }
    else
    {
        echo "Tous les champs ne sont pas remplis";
    }
}
?>