<?php

//dispatcher artisanal permettant la navigation entre les fichiers en récupérant grâce au GET la fin de l'url et en redirigant en fonction de "action"

if(!empty($_GET['action'])):
    
    switch ($_GET ['action']) {
                                case 'categoriesList':
                                    //'action' = categoriesList donc dans ce GET l'instruction est la suivante.
                                    require('controllers/categoriesController.php');
                                    break;

                                /*case 'articleList':
                                    require('controllers/articlesController.php');
                                    break;*/

                                    case 'categoryDelete':
                                        include('controllers/categoriesDeleteController.php');
                                        break;

                                case 'categoryForm':
                                    require('views/categoryForm.php');
                                    break;

                                default:
                                    require('controllers/errorController.php');
                                }
    endif;
    ?>