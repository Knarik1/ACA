<?php include 'header.php'?>

<div class="form-group">
<form action="#" method="post">
    <label>Name</label>
    <input type="text" name="name"  class="form-control btn btn-warning" >
    <label>Surname</label>
    <input type="text" name="surname"  class="form-control  btn btn-warning" >
    <label>Email address</label>
    <input type="email" name="email"  class="form-control  btn btn-warning" >
    <input type="submit" class="btn btn-default">
</form>        
</div>
<?php
    if(isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['email'])) {
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $myfile = fopen("data.txt", "a") or die("Unable to open file!");
        $data = 'Name : '.$name.' Surname : '.$surname.' Mail : '.$email;
        fwrite($myfile, $data);
        fclose($myfile);

    }else {
        echo 'you should fill all fields';
    }




?>
<?php include 'footer.php'?>

