
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="header"> 
<a href="#" class="home">Home</a>
<a href="index.html" class="sbtn">Log out</a>
</div>
<style>
    .header{
background-color: lightgray;
padding:10px 20px;
display: block ;
}
.sbtn{
    margin-left: 1125px;
border-left: 2px solid black;
border-right:2px solid black;
text-decoration: none;
padding: 5px 10px;
text-decoration: none;
text-decoration-color: none;
color: black;
transition: all 1s;
}
.sbtn:hover{
letter-spacing: 4px;
}
.sbtn2{
    margin-left: 1125px;
border-left: 2px solid black;
border-right:2px solid black;
text-decoration: none;
padding: 5px 10px;
text-decoration: none;
text-decoration-color: none;
color: black;
transition: all 1s;
}
.sbtn2:hover{
letter-spacing: 4px;

}.home{
text-decoration: none;
padding: 10px;
color: black;
}
.home:hover{
background-color:darkblue;
color:white;
transition: all 1s;
}


</style>
<?php
$servername="";
$username="root";
$password="";
$dbname="crud";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("Error connection".$conn->connect_error."<br>");
    echo"error";
}
    else{

/*$sql="CREATE DATABASE crud";
if($conn->query($sql)===true)
{
    echo"created sucessfully<br>";    
}else{
    echo"error while creating database".$conn->error."<br>";
}*/
/*$sql="CREATE TABLE crud(
    id int(10) AUTO_INCREMENT PRIMARY KEY, 
    f_name varchar(30) NOT NULL,
    l_name varchar(30) NOT NULL,
    dob int(10) NOT NULL,
    e_mail VARCHAR(30) NOT NULL,
    ph_number int(10) NOT NULL);";
    if($conn->query($sql)){
        echo"created sucessfully<br>";
    }else{
        echo"error while creating<br>".$conn->error;
//     }*/

$fname = $_POST["firstname"] ?? "";
$lname=$_POST["lastname"]??"";
$dob=$_POST["dob"]??"";
$email=$_POST["email"]??"";
$phnumber=$_POST["phno"]??"";
$username=$_POST['username'];
$salary=$_POST['salary'];
$jobdesg=$_POST['job_desg'];

$pwd=$_POST['pwd'];
$hashedpass=password_hash($pwd,PASSWORD_BCRYPT);

$sql1="SELECT e_mail FROM crud WHERE e_mail='$email';";
$select=$conn->query($sql1);
$row=$select->fetch_assoc();
$emaildb=$row['e_mail']??"";
if($emaildb===$email){
    ?>
<script> 
   window.alert("Email address already existed");
   window.location.href = "log in.html";
   </script>

    <?php
}
else{
$sql="INSERT INTO crud (f_name,l_name,dob,e_mail,ph_number,salary,job_designation,username,password)
VALUES('$fname','$lname','$dob','$email','$phnumber','$salary','$jobdesg','$username','$hashedpass')";

if($conn->query($sql)===true){
    
?>
<div class="mt-5 container border">
<H1 class="text text-primary mt-3 mb-3">New user Registered sucessfully 
 <a href="index.html"><button class="btn  btn-outline-primary"  >log_in</button></a>
</H1>
<h2 class="text">Welcome</h2>
</div>
<?php }else{
echo $conn->error;

}
}}
?>