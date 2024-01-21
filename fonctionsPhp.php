
<?php


// Supprime la valeur d'un index d'un tableau mais pas l'index lui même 

unset($fruits[1]);


// Supprime l'index et sa valeur d'un tableau entierement, 0 -> à partir de quel index et 1 -> combien de lignes

array_splice($fruits, 0, 1);


//Ajoute un élément à la fin d'un tableau indexé

array_push($fruits, "Mango");


// Ajoute un élément à la fin d'un tableau associatif

$tasks["dusting"] = "Daniel";


// Insère un élement à un tableau, 1 -> à partir de quel index et 0 -> on veut rien supprimer

array_splice($fruits, 1, 0, "Mango");

array_splice($fruits, 1, 0, $unAutreTableau); // permet d'insérer un autre tableau


// Tableau multidimensionnel indexé

$food = 
[
    array("apple", "mango", "banana"),
    "onion",
    "chicken"

];

echo $food[0][0];


// Tableau multidimensionnel associatif

$food = 
[
    "fruits" => array("apple", "mango", "banana"),
    "meat" => array("chicken", "fish", "beef"),
    "vegetables" => array("cucumber", "onion", "carrot"),


];

echo $food[0][0];


// Héritage classe enfant constructeur

class PhysicalBook extends Book

{

    public $weight;

    public function __construct(string $title, string $author, int $price, int $weight)

    {

        parent::__construct($title, $author, $price);
        this->weight = $weight;

    }


{
    







?>