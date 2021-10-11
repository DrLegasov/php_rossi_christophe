<?php

class Category{
    private $name;
    private $shortDescription;
    private $orderNumber;


    public function __construct($name='', $shortDescription='', $orderNumber=''){
        $this->name = $name;
        $this->shortDescription = $shortDescription;
        $this->orderNumber = $orderNumber;
    }



    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  string
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of shortDescription
     */ 
    public function getShortDescription()
    {
        return $this->shortDescription;
    }

    /**
     * Set the value of shortDescription
     *
     * @return  string
     */ 
    public function setShortDescription($shortDescription)
    {
        $this->shortDescription = $shortDescription;

        return $this;
    }

    /**
     * Get the value of orderNumber
     */ 
    public function getOrderNumber()
    {
        return $this->orderNumber;
    }

    /**
     * Set the value of orderNumber
     *
     * @return  int
     */ 
    public function setOrderNumber($orderNumber)
    {
        $this->orderNumber = $orderNumber;

        return $this;
    }
    
    
    /**
     * pushCategory
     *
     * @param  array $categories
     * @return void
     */
    public function pushCategory(&$categories){
        array_push($categories, $this);
    }

    /**
     * deleteCategory afin de supprimer une catégorie de la liste.
     *
     * @param  array $categories
     * @param  int $index
     * @return void
     */
    public function deleteCategory(&$categories, $index){
        unset($categories[$index]);
    }
    
    /**
     * updatecategory afin de mettre à jour les paramètres d'une catégorie définie.
     *
     * @param  array $category
     * @param  string $name
     * @param  string $shortDescription
     * @param  string $orderNumber
     * @return object
     */
    public function updatecategory(&$category, $name='', $shortDescription='', $orderNumber=''){
        $index = array_search($this, $category);

        if(!empty($name)):
            $category[$index]->name = $name;
        endif;

        if(!empty($shortDescription)):
            $category[$index]->shortDescription = $shortDescription;
        endif;

        if(!empty($orderNumber)):
            $category[$index]->orderNumber = $orderNumber;
        endif;
    }


    public function getCategoriesList() {

        $categories = array(
                                    array(
                                        "name" =>'Produits',
                                        "shortDescription" => 'une liste non exhaustive de l\'ensemble de nos produits.',
                                        "orderNumber" => '000001'),
                                    array(
                                        "name" =>'Pièces',
                                        "shortDescription" => 'Chaque pièces de la maison détaillée pour vous.',
                                        "orderNumber" => '000002'),
                                    array(
                                        "name" =>'Inspirations',
                                        "shortDescription" => 'Où nos designers trouvent ils ces idées?',
                                        "orderNumber" => '000003'),
                                    array(
                                        "name" =>'Services',
                                        "shortDescription" => 'Bien entendu nous proposons livraison et installation...',
                                        "orderNumber" => '000004'),
                                    array(
                                        "name" =>'Matières',
                                        "shortDescription" => 'Le Bois, le Métal, le Plastic, chacun ses avantages.',
                                        "orderNumber" => '000005'),
                                    array(
                                        "name" =>'Coin Bois',
                                        "shortDescription" => 'Ici se trouve l\'âme de cete noble matière qu\'est le Bois.',
                                        "orderNumber" => '000006'),                                    
                                    array(
                                        "name" =>'Électroménager',
                                        "shortDescription" => 'Parce que nous vendons de la vaisselle, mais aussi de quoi la laver.',
                                        "orderNumber" => '000007'),
                                    array(
                                        "name" =>'Suède',
                                        "shortDescription" => 'Ce beau pays qui n\'est pas qu\'une grande usine de meubles.',
                                        "orderNumber" => '000008')
                                    );
            return $categories;
    }






}

?>