<?php
/**
 * Created by PhpStorm.
 * User: alpho
 * Date: 27/03/2018
 * Time: 19:36
 */

class UserController
{
    public function indexAction(){

        $title = "Liste Utilisateur";
        $v = new View("users/index", "front");
        $v->assign("title", $title);
    }
    public function addAction(){

        $title = "Creation Utilisateur";
        $v = new View("users/add", "front");
        $v->assign("title", $title);
    }
    public function editAction(){

        $title = "Modification Utilisateur";
        $v = new View("users/edit", "front");
        $v->assign("title", $title);
    }





}