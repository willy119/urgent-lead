<?php
class Agences{
    // Connexion
    private $connexion;
    private $table = "agences";

    // object properties
    public $id;
    public $nom;
    public $lat;
    public $lon;

    /**
     * Constructeur avec $db pour la connexion � la base de donn�es
     *
     * @param $db
     */
    public function __construct($db){
        $this->connexion = $db;
    }

    /**
     * Lecture des agences
     *
     * @return void
     */
    public function lire(){
        // On �crit la requ�te
        $sql = "SELECT * FROM " . $this->table;

        // On pr�pare la requ�te
        $query = $this->connexion->prepare($sql);

        // On ex�cute la requ�te
        $query->execute();

        // On retourne le r�sultat
        return $query;
    }
}