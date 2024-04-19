<?php
$dishes = [
    [
        "name" => "Spaghetti",
        "servings" => 4,
        "type_of_dish" => "main",
        "price" => 8.99

    ],

    [
        "name" => "Lasagna",
        "servings" => 6,
        "type_of_dish" => "main",
        "price" => 12.99
    ],
    [
        "name" => "Caesar Salad",
        "servings" => 2,
        "type_of_dish" => "side",
        "price" => 5.99
    ],
    
    
]

?>


<?php
// foreach ($dishes as $dish) {
//     echo $dish["name"];
//     echo "<br>";
//     echo $dish["servings"];
//     echo "<br>";
//     echo $dish["type_of_dish"];
//     echo "<br>";
//     echo $dish["price"];
//     echo "<br>";
//     echo "<br>";
// }
?>

<?php
echo "<ol>";
foreach ($dishes as $dish) {
    echo "<li>".$dish["name"]."</li>";
    echo "<br>";
    echo "Servings: ".$dish["servings"];
    echo "<br>";
    echo "Type of dish: ".$dish["type_of_dish"];
    echo "<br>";
    echo "Price: ".$dish["price"];
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "</div>";
}
?>