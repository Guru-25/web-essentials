<html>
    <head>

    </head>
    <body>
        <form action="site.php" method="get">
            Enter a Number: <input type="number" name="num"> <br>
            <input type="submit" value="Submit">
        </form>
        <?php
            if (isset($_GET["num"])) {
                $n = $_GET["num"];

                // fibonocii
                $x = 0; $y = 1; $flag = 1;
                echo "Fibonocii Series: ".$x." ".$y." ";
                for ($i = 0; $i < $n - 2; $i++) {
                    $z = $x + $y;
                    echo $z." ";
                    $x = $y;
                    $y = $z;
                }
                echo "<br><br>";

                // factorial
                $j = 1; $fact = 1;
                while ($j <= $n) {
                    $fact *= $j;
                    $j++;
                }
                echo "Factorial is: ".$fact;
                echo "<br><br>";

                // multiplication table
                $k = 1;
                echo "Tables:<br>";
                do {
                    echo $n." x ".$k." = ".$n * $k;
                    $k++;
                    echo "<br>";
                } while ($k <= 10);
            }
        ?>
    </body>
</html>
