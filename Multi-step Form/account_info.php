<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="header  background mb-1">
    <a href="" class="h2 " style="margin-top:0%; margin-bottom: 0%;">Sign up Form</a>
</div>
<?php
$servername="";
$username="root";
$password="";
$dbname="signupdb";
$conn=new mysqli($servername,$username,$password,$dbname);

$username=$_POST['username']??"";
$password=$_POST['pwd']??"";
$fname=$_POST['fname']??"";
$lname=$_POST['lname']??"";
$email=$_POST['email']??"";
$phno=$_POST['phno']??"";
$zipcode=$_POST['zipcode']??"";
$cardtype=$_POST['cardtype']??"";
$cardnumber=$_POST['cardnumber']??"";
$cvc=$_POST['cvc']??"";
$cardholder=$_POST['cardholdername']??"";
$gender=$_POST['gender']??"";
$address=$_POST['address']??'';
$hashpwd=password_hash($password,PASSWORD_BCRYPT);
$sql="INSERT INTO account_info(username,Password,gender,fname,lname,email,cardtype,cardnum,cvc,phno,zipcode,address,cardholder) 
VALUES('$username','$hashpwd','$gender','$fname','$lname','$email','$cardtype','$cardnumber','$cvc','$phno','$zipcode','$address','$cardholder');";
$result=$conn->query($sql);

if($result)
{    
?>
<div class="container border" style="margin-top: 50px;">
    <div class='h1' style="color:  rgb(219, 174, 88);"  >Sucessfully registered</div>
</div>
<?php
}
else{
    $conn->error;
}
?>
<style>
.header a:hover{
background-color: rgb(219, 174, 88);
color:rgb(31, 63, 73); 
transition-duration: 0.4s;
}
.header{
padding-top: 5px;
padding-bottom: 10px;
background-color:rgb(31, 63, 73)
}
.header a{
    text-decoration: none;
    color:  rgb(219, 174, 88);
    margin-left: 10px;
}
</style>