<?php

// Exemple de données de produits
$products = [
    [
        'name' => 'Pantalon élégant pour hommes',
        'description' => 'Description du produit...',
        'price' => 5000,
    ],
    [
        'name' => 'Jean décontracté pour femmes',
        'description' => 'Description du produit...',
        'price' => 3500,
    ],
    [
        'name' => 'Short de sport pour hommes',
        'description' => 'Description du produit...',
        'price' => 2500,
    ],
    // Ajoutez d'autres produits ici...
];

// Exemple de fonction pour afficher les produits
function displayProducts($products)
{
    foreach ($products as $product) {
        echo '<div class="product">';
        echo '<h4>' . $product['name'] . '</h4>';
        echo '<p>' . $product['description'] . '</p>';
        echo '<span class="price">' . $product['price'] . ' Da</span>';
        echo '<button>Acheter</button>';
        echo '</div>';
    }
}

?>
