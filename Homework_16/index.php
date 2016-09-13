<?php
include_once 'header.php';
include_once 'footer.php';

define('ITEMS_PER_PAGE',3);

$users_array=[];
$handle= fopen('data.txt','a+') or die('can\'t open file');
while(!feof($handle)){
    $line = fgets($handle);
    $line_words = explode(' ',$line);
    $users_array[]=$line_words;
}

//echo '<pre>';
//print_r($users_array);
//echo '</pre>';

$currentPage = 1;
if (isset($_GET['page'])){
    $currentPage = $_GET['page'];
}
$totalPageCount = ceil(count($users_array)/ITEMS_PER_PAGE);
$start = ($currentPage-1)*ITEMS_PER_PAGE;
$limit = ITEMS_PER_PAGE;
if ($start+$limit>count($users_array)){
    $limit = count($users_array)-$start;
}
?>

<table class="table table-bordered table-responsive table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Surname</th>
            <th>Course name</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
           for($i=$start; $i<$start+$limit;$i++){
               echo '<tr>';
                echo '<td>'.($i+1).'</td>';
                echo '<td>'.$users_array[$i][0].'</td>';
                echo '<td>'.$users_array[$i][1].'</td>';
                echo '<td>'.$users_array[$i][2].'</td>';
               echo '<td><a class="btn btn-danger btn-xs" href="delete.php">Delete</a>&nbsp<a class="btn btn-success btn-xs" href="add.php">Add</a></td>';
               echo '</tr>';
           }
        ?>
    </tbody>
</table>
<?php
//pagination with bootstrap
echo '<ul class="pager">';
echo '<li><a href="http://localhost/ACA/Homework_16/index.php?page='.($currentPage-1).'">previous</a></li>';
for($i=1; $i<=$totalPageCount;$i++){
 echo   '<ul class="pagination pagination-lg">';
 echo      '<li><a href="http://localhost/ACA/Homework_16/index.php?page='.$i.'">'.$i.'</a></li>';
    echo '</ul>';
}
echo '<li><a href="http://localhost/ACA/Homework_16/index.php?page='.($currentPage+1).'">next</a></li>';
echo '</ul>';


