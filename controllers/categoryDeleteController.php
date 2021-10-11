<?php
require_once('models/categoryModel.php');

$aCatego = array();

$oCatery = new Category('Boiseries', 'qaeghg   hqethqgten ZGAQEBRF', '1961');
$oCatery->pushCategory($aCatego);

$ocaterina = new Category('bOISERIES2', 'zrnnnqhgfstrhsqthnnqqeetvwsfv', '9465');
$ocaterina->pushCategory($aCatego);
var_dump($aCatego);



$ocaterina = new Category();
$ocaterina->deleteCategory($aCatego,$_GET['index']);


?>