<?php 

$conn = mysqli_connect("localhost","root","","test");
if(isset($_POST["submit"])){
    $query = mysqli_query($conn,"select * from role where username='".$_POST['username']."' and password='".$_POST['password']."' ");
    if(mysqli_num_rows($query) > 0){
       $_SESSION['username']=$_POST['username'];
    header('location:dashboard.php');
    }else{
        echo "Please, try again";
    }
};





?>