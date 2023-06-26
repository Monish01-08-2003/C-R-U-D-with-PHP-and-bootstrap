<div class=container-float></div>  




<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<?php

$servername="";
$username="root";
$password="";
$dbname="crud";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("Error connection".$conn->connect_error."<br>");
}else{
    $email=$_POST['email'];
    $pwd=$_POST['pwd'];
    $email=$_POST['email'];
    $sql="SELECT e_mail, password FROM crud WHERE e_mail='$email' ;";
    $result=$conn->query($sql);
    if($result){ 
        $row=$result->fetch_assoc();
        $emaildb=$row['e_mail'];
        $passworddb=$row['password'];
        
        if(password_verify($pwd,$passworddb)){
            echo"<script>
            window.alert('Log in sucessfull');
            window .location.href='view.php';
            </script>";
        }else{
            ?>
            <script>
                   window.alert("Invalid username or password");
                   window.history.back();
            </script>
            <?php
        }}}
        
        
?>


