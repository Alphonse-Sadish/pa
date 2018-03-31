<?php
/**
 * Created by PhpStorm.
 * User: alpho
 * Date: 27/03/2018
 * Time: 20:44
 */

class IngredientController
{
    public function indexAction(){
        $title = "Liste Ingrédient";
        $v = new View("ingredients/index", "front");
        $v->assign("title", $title);
    }
    public function addAction(){
        $title = "Creation Ingredient";
        $v = new View("ingredients/add", "front");
        $v->assign("title", $title);
    }
    public function editAction(){
        $title = "Modification Ingredient";
        $v = new View("ingredients/edit", "front");
        $v->assign("title", $title);
    }
    public function deleteAction(){

    }
}