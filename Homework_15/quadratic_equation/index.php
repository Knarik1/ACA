
<?php include '../header.php';?>
   
    <form action="index.php" method="POST">
        <input type="text" name="a" placeholder="a">
        <button>x<sup>2</sup> +</button>
        <input type="text" name="b" placeholder="b">
        <button>x +</button>
        <input type="text" name="c" placeholder="c">
        <button>=</button>
        <button>0</button><br><br>
        <input type="submit" name="submit"><br><br>

    </form>

<?php include '../footer.php';?>

<?php

    if (isset($_POST['a']) && isset($_POST['b']) && isset($_POST['c'])) {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];

        $d = ($b * $b - 4 * $a * $c);
        if ($d > 0){
            $x1 = (-$b - sqrt($d)) / (2 * $a);
            $x2 = (-$b + sqrt($d)) / (2 * $a);
            echo '<button class="btn-warning">x1= ' . $x1 . '</button><br><br>';
            echo '<button class="btn-warning">x2= ' . $x2 . '</button>';
        } elseif($d == 0) {
            $x = (-$b) / (2 * $a);
            echo '<button class="btn-warning">x = ' . $x . '</button><br><br>';
        } else {
            echo 'this equation has no solution';
        }
    } else {
        echo "pay attention, you should fill in all fields";
        die;
    }






