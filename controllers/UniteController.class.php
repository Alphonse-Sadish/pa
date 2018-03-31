<?php
/**
 * Created by PhpStorm.
 * User: alpho
 * Date: 27/03/2018
 * Time: 20:44
 */

class UniteController
{
    public function indexAction(){
        $title = "Liste Unite";
        $v = new View("unites/index", "front");
        $v->assign("title", $title);
    }
    public function addAction(){
        $title = "Creation Unite";
        $v = new View("unites/add", "front");
        $v->assign("title", $title);
    }
    public function editAction(){
        $title = "Modification Unite";
        $v = new View("unites/edit", "front");
        $v->assign("title", $title);    }
    public function deleteAction(){

    }
}