<?php


$categories = array(
    array(
        "name" =>'Produits',
        "shortDescription" => 'une liste non exhaustive de l\'ensemble de nos produits',
        "orderNumber" => '000001'),
    array(
        "name" =>'Pièces',
        "shortDescription" => 'chaque pièces de la maison détaillée pour vous',
        "orderNumber" => '000002'),
    array(
        "name" =>'Inspirations',
        "shortDescription" => 'Où nos designers trouvent ils ces idées',
        "orderNumber" => '000003'),
    array(
        "name" =>'Services',
        "shortDescription" => 'Bien entendu nous proposons livraison et installation',
        "orderNumber" => '000004'),
    array(
        "name" =>'Matières',
        "shortDescription" => 'Le Bois, le Métal, le Plastic, chacun ses avantages',
        "orderNumber" => '000005'),
    array(
        "name" =>'Coin Bois',
        "shortDescription" => 'Ici se trouve l\'âme de cete noble matière qu\'est le Bois',
        "orderNumber" => '000006'),                                    
    array(
        "name" =>'Électroménager',
        "shortDescription" => 'Parce que nous vendosn de la vaisselle, mais aussi de quoi la laver',
        "orderNumber" => '000007'),
    array(
        "name" =>'Suède',
        "shortDescription" => 'Ce beau pays qui n\'est pas qu\'une grande usine de meubles.',
        "orderNumber" => '000008')
    );

;?>


<!DOCTYPE html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>IKESLA</title>
</head>

<body>
    <header>
        <h2>Mobilier IKESLA</h2>
    </header>
    <div class="container justify-content-center">
        <div class="row d-flex justify-content-center">
            <?php if(count($categories)>0): ?>
            <a class="btn btn-success" href="views/categoryForm.php">Ajouter une nouvelle catégorie</a>
            <table>
                <?php
                        //boucle permettant un affichage des categories une par une.
                    foreach($categories as $category => $stat):    
                    ?>
                <tr>
                    <td><?php echo $category; ?></td>
                    <td>
                        <?php
                        if(count($stat)>0):
                        ?>
                        <ul>
                            <?php
                                // affichage des stat par catégorie dans une liste à puces.
                                foreach($stat as  $cat): ?>
                            <li><?php echo $cat; ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <?php endif; ?>
                    </td>
                    <td><button class="btn btn-outline-info">Édit</button></td>
                    <td><button class="btn btn-outline-danger"><a href="controllers/categoryDeleteController.php"></a> Delete</button></td>
                </tr>
                <?php endforeach; ?>
            </table>
            <?php endif; ?>
        </div>
    </div>
    <footer>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>