<?php

class Article{
    private $name;
    private $longDescription;
    private $link;
    private $cost;
    private $designer;
    private $designerMail;


    public function __construct($name='', $longDescription='', $link='',$cost='', $designer='', $designerMail=''){
        $this->name = $name;
        $this->longDescription = $longDescription;
        $this->link = $link;
        $this->cost = $cost;
        $this->designer = $designer;
        $this->designerMail = $designerMail;
    }

/**
 * calcul prix ttc.
 *
 * @param  float $ht
 * @param  float $tva
 * @return float
 */
function ttc($ht,$tva){
    return ($ht+($ht*($tva/100)));
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
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of longDescription
     */ 
    public function getLongDescription()
    {
        return $this->longDescription;
    }

    /**
     * Set the value of longDescription
     *
     * @return  self
     */ 
    public function setLongDescription($longDescription)
    {
        $this->longDescription = $longDescription;

        return $this;
    }

    /**
     * Get the value of link
     */ 
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set the value of link
     *
     * @return  self
     */ 
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get the value of cost
     */ 
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * Set the value of cost
     *
     * @return  self
     */ 
    public function setCost($cost)
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * Get the value of designer
     */ 
    public function getDesigner()
    {
        return $this->designer;
    }

    /**
     * Set the value of designer
     *
     * @return  self
     */ 
    public function setDesigner($designer)
    {
        $this->designer = $designer;

        return $this;
    }

    /**
     * Get the value of designerMail
     */ 
    public function getDesignerMail()
    {
        return $this->designerMail;
    }

    /**
     * Set the value of designerMail
     *
     * @return  self
     */ 
    public function setDesignerMail($designerMail)
    {
        $this->designerMail = $designerMail;

        return $this;
    }

    /**
     * pushCategory
     *
     * @param  array $categories
     * @return void
     */
    public function addArticle(&$article){
        array_push($article, $this);
    }

    /**
     * deleteCategory afin de supprimer une catégorie de la liste.
     *
     * @param  array $categories
     * @param  int $index
     * @return void
     */
    public function deleteArticle(&$article, $index){
        unset($article[$index]);
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
    public function updateArticle(&$category, $name='', $longDescription='', $link='', $cost='', $designer='', $designerMail=''){
        $index = array_search($this, $category);

        if(!empty($name)):
            $category[$index]->name = $name;
        endif;

        if(!empty($longDescription)):
            $category[$index]->longDescription = $longDescription;
        endif;

        if(!empty($link)):
            $category[$index]->link = $link;
        endif;

        if(!empty($cost)):
            $category[$index]->cost = $cost;
        endif;

        if(!empty($designer)):
            $category[$index]->designer = $designer;
        endif;

        if(!empty($designerMail)):
            $category[$index]->designerMail = $designerMail;
        endif;

    }

    /*$Article = array( );                    
                return $Article;*/

}