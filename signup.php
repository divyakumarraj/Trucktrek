<?php
$username='root';
$pass="";
$server="localhost";
$db="trucks";

$connection=mysqli_connect($server,$username,$pass,$db);


if($connection){
    // echo "connection successful";?>
    <!-- <script>alert("your connection is successfull")</script> -->
    <?php
}
else{
    echo "";
    die("no connection" . mysqli_connect_error());
    // this is used to give the error but it is not necessary by default every xamppp server give this error by own
}

// INSERTION

if(isset($_POST['kaalia']))

{
    $username=$_POST['username'];
    $first=$_POST['firstname'];
    $last=$_POST['lastname'];
    $model=$_POST['model'];
    $capa=$_POST['capacity'];
    $reg=$_POST['vnumber'];
    $mobno=$_POST['number'];
    $email=$_POST['email'];
    $pass=$_POST['password'];
   
    $insert="INSERT INTO `user` (`firstname`, `lastname`, `username`, `pass`, `model`, `capa`, `reg`, `mobno`) VALUES ('$first', '$last', '$username', '$pass', '$model', '$capa', '$reg', '$mobno');";

    if(mysqli_query($connection,$insert)){
        ?>
        <script> alert("Succesfully Submitted"); </script>
   <?php }
}
?>


