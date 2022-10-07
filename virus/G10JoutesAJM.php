<?php
require_once 'configs/chemins.class.php';

//head pour virus biologique
require Chemins::VUES_PERMANENTES . 'v_head.inc.php';

require Chemins::VUES_NAVBAR . 'v_navbarajm.inc.php';//barre de navigation
require Chemins::VUES . 'v_ajm.inc.php'; //texte pour accueil virus biologique

require Chemins::VUES_FOOTER . 'v_footer.inc.php';

?>