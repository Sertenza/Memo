<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Carte
 *
 * @author Guillaume Betton
 */
class Carte {
    private $id; //identifiant de la carte.
    private $lienurl; //lien vers lequel l'image va être afficher.
    private $idimage; // identifiant de l'image

    //Constructeur
    public function __construct ($id,$lienurl,$idimage)
    {
        $this -> id = $id;
        $this -> lienurl = $lienurl;
        $this -> idimage = $idimage;
    }
    
    
    //Liste des SET
   public function  Set_id($id)
    {
        $this -> id = $id;
    }
    
    public function  Set_lienurl($lienurl)
    {
        $this -> lienurl = $lienurl;
    }
    
    public function  Set_idimage($idimage)
    {
        $this -> idimage = $idimage;
    }
    //liste des GET
       public function get_id()
    {
        return $this -> id;
    }
    
       public function get_lienurl()
    {
        return $this -> lienurl;
    }
    
       public function get_idimage()
    {
        return $this -> idimage;
    }
    
}
