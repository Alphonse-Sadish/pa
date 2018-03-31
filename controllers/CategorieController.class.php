<?php
/**
 * Created by PhpStorm.
 * User: alpho
 * Date: 27/03/2018
 * Time: 20:43
 */

class CategorieController
{
    public function indexAction(){
        $title = "Liste Categorie";
        $v = new View("categories/index", "front");
        $v->assign("title", $title);
    }
    public function addAction(){
        $title = "Creation Categorie";
        $v = new View("categories/add", "front");
        $v->assign("title", $title);
    }
    public function editAction(){
        $title = "Modification Categorie";
        $v = new View("categories/edit", "front");
        $v->assign("title", $title);    }
    public function deleteAction(){

    }
}