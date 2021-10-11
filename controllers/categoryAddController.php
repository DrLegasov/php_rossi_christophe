<?php
require_once('models/categoryModel.php');

$aCatego = array();

$oCatery = new Category('Boiseries', 'qaeghg    ZGAQEBRF', '1961');
$oCatery->pushCategory($aCatego);

$ocaterina = new Category('bOISERIES2', 'zrnnnqhgfvwsfv', '9465');
$ocaterina->pushCategory($aCatego);

var_dump($aCatego);




var_dump($aCatego);



?>