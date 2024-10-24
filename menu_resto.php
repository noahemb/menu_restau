<?php
$menu = array(
    "Entrées" => array("Pain", "Légumes", "Toast"),
    "Plats" => array("Agneau", "Kebab", "Pizza"),
    "Desserts" => array("Tiramisu", "Glace")
);
echo "<ul>"; //liste non ordonnée avec Entrées, Plats et Desserts
foreach ($menu as $categorie => $nourritures) {//boucle qui parcourt le premier tableau interdimensionnelle avec les entrees plats et desserts
    echo "<li>$categorie</li>"; //Ca affiche le nom des différentes catégories en boucle
    echo "<ul>"; // liste non ordonnée avec la nourriture de chaque categproes
    foreach ($nourritures as $nourriture) {//boucle qui parcourt le deuxieme tableau interdimensionnelle avec les plats du deuxieme tableaux
        echo "<li>$nourriture</li>"; // Affiche chaquee plat dans la bonne catégories 
    }
    echo "</ul>";
}
echo "</ul>";
?>