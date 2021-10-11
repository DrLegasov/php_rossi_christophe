<?php
//gestion des erreurs
if (!empty($_POST['Valider'])):
$name = $_POST['name'] ;
$shortDescription = $_POST['shortDescription'] ;
$orderNumber = $_POST['orderNumber'] ;
endif;
$NotYet = "Tous les champs sont obligatoires!!!";
//tableau dans lequel on empile les erreurs
$ErrorsStackTab = array();

if(empty($name)): 
    array_push($ErrorsStackTab,'Le nom de la Catégorie est requis!'); 
endif; 

if(empty($shortDescription)): 
    array_push($ErrorsStackTab, 'Un brève description est requise'); 
endif;

if(empty($orderNumber)): 
    array_push($ErrorsStackTab, 'Tout est objet et tout a un numéro'); 
endif; 

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>CategoryForm</title>
</head>
<body>
    <header>

    </header>
    <main>
        <div class="container mt-5">
            <div>
                    <?php if(!empty($_POST["Valider"])):
                    ?>
                    <h2 class="errorsdude my-2">
                        <?php 
                        if (empty($name) || empty($shortDescription) || empty($orderNumber)):
                        echo $NotYet; 
                        endif?>
                    </h2>
                    
                    <h1><strong> 
                        <?php            
                        echo $name; 
                        ?>
                        </strong></h1>
                    <p>
                        <?php            
                        echo $shortDescription; 
                        ?>
                    </p><br>
                    <hr>                
                        <?php            
                        echo $orderNumber;
                        ?>                    
                    <hr>
                    <?php endif  ;?>
                <?php
                //ici nous renvoyons les erreurs empilées dans le tableau.
        foreach($ErrorsStackTab as $error):
        ?>
        <p>- <?php echo $error; ?></p>
        <?php endforeach; ?>
                <form action="categoryForm.php" method="post">
                    <p>
                        <label for="name">Nom</label><br>
                        <input type="text" id="name" name="name">
                    </p>
                    <p>
                        <label for="shortDescription">Description</label><br>
                        <input type="text" id="shortDescription" name="shortDescription">
                    </p>
                    <p>
                        <label for="orderNumber">Numéro d'ordre</label><br>
                        <input type="number" id="orderNumber" name="orderNumber">
                    </p>
                    <p>
                        <input class="btn btn-outline-success" type="submit" name="Valider" value="Valider">
                    </p>
                </form>
            </div>
        </div>

    </main>
    <footer>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>