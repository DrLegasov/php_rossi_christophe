<?php

//appel du fichier model "once" une seule fois pour palier d'éventuelles erreurs ultérieures.
    require_once('models/articleModel.php');

//appel des méthode générée dans le model.php''

//"include" permet l'appel d'un fichier
    include('views/articlesList.php');


?>