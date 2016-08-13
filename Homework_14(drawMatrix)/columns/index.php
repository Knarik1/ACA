<?php

include '../header.php';

$cols = rand(2,8);
$rows = rand(2,8);

for ($i = 0; $i <= $cols; $i++){
    echo "<div class='row'>";
        for ($j = 0; $j <= $rows; $j++){
            if ($i==0 || $i==$cols || $j==0 || $j==$rows) {
                echo "<div class='col-md-1' style='border: 5px solid purple; margin: 5px;'>oK</div>";
            } else {
                echo "<div class='col-md-1' style='border: 5px solid #b2dba1; margin: 5px;'>oK</div>";
            }
        }
    echo "</div>";
}

include '../footer.php';