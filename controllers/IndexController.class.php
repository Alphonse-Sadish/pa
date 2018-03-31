<?php


class IndexController{

	public function indexAction(){
        $title = "Recipez";
		$v = new View("index", "front");
        $v->assign("title", $title);
	}
	public function errorAction(){
        $v = new View("errors/error","front");

    }
    public function connexionAction(){

        $title = "Connexion";
        $v = new View("connexion", "front");
        $v->assign("title", $title);
    }

    public function inscriptionAction(){

        $title = "Inscription";
        $v = new View("inscription", "front");
        $v->assign("title", $title);
    }


}