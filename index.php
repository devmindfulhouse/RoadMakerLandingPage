<?php

include_once('model/connexionRoadMaker.php');

if (!isset($_GET['section']) OR $_GET['section'] == 'index')
{
    include_once('controller/accueil.php');
}
else if ($_GET['section'] == 'mentions_legales')
{
    include_once('controller/mentions_legales.php');
}
else if ($_GET['section'] == 'tourism_offer')
{
    include_once('controller/offers_controller/offer_tourism.php');
}
else if ($_GET['section'] == 'education_offer')
{
    include_once('controller/offers_controller/offer_education.php');

}
else if ($_GET['section'] == 'event_offer')
{
    include_once('controller/offers_controller/offer_event.php');

} else if ($_GET['section'] == "who_we_are")
{
    include_once('controller/who_we_are.php');

}




?>
