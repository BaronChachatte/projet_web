<?php
if(isset($_POST['formapp']))
{
    
    extract($_POST);

    if (!empty($nom_app))
    {
        include 'database.php';
        global $db;

        $cat = $_POST['menu_cat'];
        if ($cat == "camera")
        {
            $cat = 1;
        }
        elseif ($cat == "thermostat")
        {
            $cat = 2;
        }
        elseif ($cat == "eclairage")
        {
            $cat = 3;
        }
        elseif ($cat == "aspirateur")
        {
            $cat = 4;
        }

        echo $cat;
        $q = $db ->prepare("INSERT INTO appareil(nom_app,id_cat) VALUES(:nom_app, :id_cat)");

        $q->execute([
            'nom_app' => $nom_app,
            'id_cat' => $cat,
        ]);
    
    }else{
        echo "les champs ne sont pas tous remplis";
    }
}
?>