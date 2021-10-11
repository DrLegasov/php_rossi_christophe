<?php

//appel du fichier model "once" une seule fois pour palier d'éventuelles erreurs ultérieures.
require_once('models/categoryModel.php');

//appel des méthode générée dans le model.php''

//exemple
/*$oRange = new Category('voila', 'texte bien écrit qui donne envie', '00009');
$oRange->pushCategory($categories);*/


//var_dump($categories);



include('views/categoriesList.php');


?>