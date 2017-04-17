<?php

include './Connexion_db.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Deck
 *
 * @author Guillaume Betton
 */
class Deck {

    private $deck = array();

    public function __construct($nbcarte) {
        $connexion = new Connexion_db('root', ''); //voir index.php
        $lareq = "Select * from cartes limit :nbcarte"; // Création de la requête

        $mondbh = $connexion->get_dbh(); //voir index.php
        $query = $mondbh->prepare($lareq); // $mondbh accéde à la fonction prepare() qui va préparer la requête $lareq --> http://php.net/manual/fr/pdo.prepare.php
        $query->execute(array(':nbcarte' => $nbcarte)); //accéde à la fonction execute() et l'affiche dans un tableau qui aura pour proportion le nombre de carte.

        $compteur = 0; //Création du compteur
        while ($row = $query->fetch(PDO::FETCH_OBJ)) {
            $carte = new Carte($row->id_carte, $row->lienurl, $row->id_image);
            $this->addItem($carte, $compteur); 
            $compteur += 1;
        }
    }

    public function addItem($cartes, $key = null) { 
        if ($key == null) {
            $this->deck[] = $cartes;
        } else {
            if (isset($this->deck[$key])) {
                throw new KeyHasUseException("Key $key already in use.");
            } else {
                $this->deck[$key] = $cartes;
            }
        }
    }

    public function deleteItem($key) {
        if (isset($this->deck[$key])) {
            unset($this->deck[$key]);
        } else {
            throw new KeyInvalidException("Invalid key $key.");
        }
    }

    public function getItem($key) {
        return $this->deck[$key];
    }


}

        
    public function tourdejeux($idcarte, $idcarte2) {
        $undeck = new Deck(4);
        $uneboite = $undeck->getItem(4);
        $uneboite2 = $undeck->getItem(3);
        $idimgboite1 = $uneboite->get_idimage();
        $idimgboite2 = $uneboite2->get_idimage();
        if ($idimgboite1 == $idimgboite2) {
            $undeck->deleteItem(3);
            $undeck->deleteItem(4);
        } else {
            
        }
    }