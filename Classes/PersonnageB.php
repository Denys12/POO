<?php  
class PersonnageB{	//Création d'une classe
	
	//Début définition de variables (Caractéristiques du personnage)

	protected $nom = "PersonnageB";		
	protected $vie = "100";
	protected $force = "10";

	//Fin définition de variables

	//Début création de fonctions (Valeures du personnage)

	public function __construct($nom, $vie, $force){
		$this->setNom($nom);	//Définition du nom du personnage