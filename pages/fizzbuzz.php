<?php
for ($i=1; $i<=100; $i++) {
    $output = "";
    if ($i%3 === 0) $output .= "fizz";
    if ($i%5 ===0) $output .= "buzz";
    if ($i%3 !==0 && $i%5 !== 0) $output = $i;
    echo "<div> $output </div>";
    // echo "<br>";
}
?>

<?php
// for ($i=1; $i<=3; $i++) {
//     $output = "";
//     if ($i%3 === 0 && $i > 0) $output .= "fizz";
//     if ($i%5 ===0 && $i > 0) $output .= "buzz";
//     if ($i%3 !==0 && $i%5 !== 0) {
//         echo $i;
//         $output = $i;
//     }   
//     echo $output;
//     echo "<br>";
// }
?>