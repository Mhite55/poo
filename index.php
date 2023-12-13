<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programation orienté objet</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <h1>Programation orienté objet</h1>
    <?php 
        include "Shape.php";

        // // Nous allons créer une instance de Shape, et la mettre dans une variable

        // $shape = new Shape(5, 7);

        // var_dump($shape->getLengthA());
        // var_dump($shape->getLengthB());


        // $shape->setLengthB(9);
        // //echo $shape->getLength();
        // //echo ($shape->getLength() + $shape->getWidth()) * 2;
        // echo $shape->getPerimeter();
        // echo $shape;

        // $shape2 = new Shape(100, 180, "chartreuse");
        // $shape2->drawShape();
        // $shape3 = new Shape(50, 70, "brown");
        // $shape3->drawShape();
        // $shape4 = new Shape(200, 200);
        // $shape4->drawShape();
        // echo $shape::$count;

        // for ($i=0; $i < 10; $i++) { 
        //     if (Shape::$count <= Shape::MAXLIMIT) {
        //         $shape = new Shape(10 * $i, 20 * $i, "yellow");
        //         $shape->drawShape();
        //     }else {
        //         echo "limite de forme atteinte.";
        //         break;
        //     }
        // }

        include "Car.php";
        include "Plane.php";

        $plane = new Plane( "SnecmaM88","kerosène", "non-specular light grey", "Mach 0.8", "3125L/h", "Mirage", 5, false);
        echo $plane->getNbrWings();
        echo "<br>";
        echo "<br>";
        $car = new Car("TU","essence", "EZR", "250km/h","4.7L/km100", "Vega Missile", 4 , 3, false, "GG-666-EZ" );
        $newPlate = "VV-456-XX";
        $car->setPlate($newPlate);
        echo $car->getPlate();

        include "Rectangle.php";
        include "Triangle.php";

        echo "<br>";

        $triangle = new Triangle(10, 4);
        echo $triangle->surface() . "cm²"; 

        echo "<br>";
        
        $rectangle = new Rectangle(10, 4);
        echo $rectangle->surface() . "cm²";
        echo "<br>";

        // Exercices

        // Créer une class Compte modélisant un compte en banque
        // Compte a deux attributs, somme(sum) et taux(rate)
        // c'est deux valeurs doivent être affecter par le même constructeur

        // Ajouter une methode show(), cette methode affiche le texte suivant :

        // compte | somme : 2000€ | taux: 2%

        include "Compte.php";

        $compte = new Compte ( 2000, 2 );
        $compte->show();
        echo "<br>";
        // Ajouter une méthode de deposit() qui ajoute la somme sur votre compte. 

        $compte->deposit(500);
        $compte->show();
        echo "<br>";

        // Ajouter une methode wihdrawal($money), cepandant si le retrait dépasse nos moyen alors
        // vous envoyer un message d'erreur .

        try {
            $compte->withdrawal(9999);
        } catch (Exception $e) {
            $error = $e->getMessage();
            echo "<h2 style='color:red'>$error</h2>";
        }
        $compte->show();
        echo "<br>";
        $compte->interest();
        $compte->show();
        // Ajouter un methode interest() qui calcul la somme de votre compte apres les interet: (taux * somme /100 )+ somme


        // Vous me faite une classe Position qui modélise un position en x et y sur une grille.

        // Quand une instance de position est crée sa position initial est x:0 et y:0
        // Faire un methode qui affiche les positions tels que "Position X : valeur de x | Y : valeur de Y"
        // Faire une methode translate() qui deplace le position en x
        // $position->translate(1, 2)
        // $position->translate(7, -3)
        // $position->show() ====> X:0, Y:-1

        include "Position.php";
        $position = new Position();
        echo "<br>";
        $position->translate(1, 2);
        $position->show();
        echo "<br>";
        $position->translate(7, -3);
        $position->show();

    ?>
</body>
</html>