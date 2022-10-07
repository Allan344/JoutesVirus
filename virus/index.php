<?php
require_once 'configs/chemins.class.php';

//head pour virus biologique
require Chemins::VUES_PERMANENTES . 'v_head.inc.php';

//recherche du cas dans l'URL
$cas = (!isset($_REQUEST['cas'])) ? 'presentation' : $_REQUEST['cas'];

//recherche de la categorie dans l'URL
$categorie = (!isset($_REQUEST['categorie'])) ? 'accueil' : $_REQUEST['categorie'];

//recherche du type dans l'URL
$type = (!isset($_REQUEST['type'])) ? 'info' : $_REQUEST['type'];


switch ($cas) {//Choix entre differents cas
	case 'presentation': {//si Cas=presentation
		require Chemins::VUES_NAVBAR . 'v_navbar.inc.php';//barre de navigation pour virus biologique
		require Chemins::VUES . 'v_accueil.inc.php'; //texte pour accueil virus biologique
		break;
		}
	case 'virus': { //si cas=virus
		switch($categorie) {
			case 'accueil': { //si ya pas de categorie (/=accueil)
								if (file_exists(Chemins::VUES_NAVBAR . 'v_navbar_' . $type . '.inc.php'))//si il existe une barre de navigation de la categorie , l'afficher
									require Chemins::VUES_NAVBAR . 'v_navbar_'.$type.'.inc.php';
								if (file_exists(Chemins::VUES . 'v_'.$type.'.inc.php'))//si il existe le texte pour la categorie , l'afficher
									require Chemins::VUES . 'v_'.$type.'.inc.php';
								break; 
							}
			default : {
						if (file_exists(Chemins::VUES_NAVBAR . 'v_navbar_' . $type .'_' . $categorie .'.inc.php'))//si il existe une barre de navigation de la categorie , l'afficher
							require Chemins::VUES_NAVBAR . 'v_navbar_' . $type .'_' . $categorie .'.inc.php';
						if (file_exists(Chemins::VUES . 'v_' . $type .'_' . $categorie .'.inc.php'))//si il existe le texte pour la categorie , l'afficher
							require Chemins::VUES . 'v_' . $type .'_' . $categorie .'.inc.php';
					
						}
	  }
	}      
 }

require Chemins::VUES_FOOTER . 'v_footer'.$type.'.inc.php';

?>