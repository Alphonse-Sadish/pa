<?php
/**
 * Created by PhpStorm.
 * User: alpho
 * Date: 27/03/2018
 * Time: 20:33
 */

class RecetteController
{
    public function indexAction(){

        $title = "Liste Recette";
        $v = new View("recettes/index", "front");
        $v->assign("title", $title);
    }
    public function addAction(){

        $title = "Creation Recette";
        $v = new View("recettes/add", "front");
        $v->assign("title", $title);
    }
    public function editAction(){
        $title = "Modification Recette";
        $v = new View("recettes/edit", "front");
        $v->assign("title", $title);    }
    public function deleteAction(){

    }
}