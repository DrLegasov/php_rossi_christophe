<?php


if(!empty($_GET['action'])):
    
    switch ($_GET ['action']) {
                                case 'categoriesList':
                                    require('controllers/categoriesController.php');
                                    break;

                                /*case 'articleList':
                                    require('controllers/articlesController.php');
                                    break;*/

                                case 'categoryForm':
                                    require('views/categoryForm.php');
                                    break;

                                default:
                                    require('controllers/errorController.php');
                                }
    endif;
    ?>