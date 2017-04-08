<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Connexion_db
 *
 * @author Guillaume Betton
 */
class Connexion_db {
    //put your code here
    private $utilisateur;
    private $mdp;
    private $dbh;
    
    public function __construct ($utilisateur,$mdp)
    {
        $this -> utilisateur = $utilisateur;
        $this -> mdp = $mdp;
        $this -> dbh = new PDO("mysql:host=localhost;dbname=memo","$utilisateur","$mdp");
    }
    
    public function  Set_mdp($mdp)
    {
        $this -> mdp = $mdp;
    }
    
    public function get_mdp()
    {
        return $this -> mdp;
    }
        
    public function get_dbh()
    {
        return $this -> dbh;
    }
}
