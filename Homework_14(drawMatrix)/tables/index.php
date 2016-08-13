<?php

include '../header.php';

$tr = rand(3,10);
$td = rand(3,10);
echo '<table class="table-bordered">';
for ($i=0;$i<=$tr;$i++){
    echo '<tr>';
        for ($j=0;$j<=$td;$j++){
            echo '<td>it is working</td>';
        }
    echo "</tr>";
}
echo '</table>';

include '../footer.php';