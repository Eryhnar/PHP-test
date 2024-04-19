<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <header>This is a header <a href="./pages/about.php">about</a></header> -->
    <?php
        include("./common/header.php");
    ?>
    <h1>Dishes</h1>
    <?php
        include("./pages/dishes.php");
    ?>

    <?php
        include("./functions/dice.php");
        // echo "dice rolls: ";
        // $dieNum = 3;
        // $total = 0;
        // for ($i = 1; $i <= $dieNum; $i++) {
        //     $roll = roll_dice(6);
        //     echo "<br>";
        //     $total += $roll;
        //     echo "Roll $i: ".$roll;
        // }
        // echo "<br>";
        // echo "Total: ".$total;

        // echo "<br>";
        echo roll_dice(6, 3);
    ?>
    <br>
    <?php
        include("./functions/timeTo.php");
        $initialDate = "2024-10-2";
        $finalDate = "2024-10-10";
        echo "Days from $initialDate, until $finalDate: ".daysTo($initialDate, $finalDate);
    ?>
    <br>
    <!-- <footer>This is a footer</footer> -->
    <?php
        include("./common/footer.php");
    ?>
</body>
</html>