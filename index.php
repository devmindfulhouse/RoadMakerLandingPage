<?php

include_once('model/connexionRoadMaker.php');

if (!isset($_GET['section']) OR $_GET['section'] == 'index')
    {
        include_once('controller/accueil.php');
    }

    else {
            if ($_GET['section'] == 'mentions_legales')
            {
                include_once('controller/mentions_legales.php');
            }
    }



?>
