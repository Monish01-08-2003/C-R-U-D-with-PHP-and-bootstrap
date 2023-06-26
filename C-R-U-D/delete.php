
<?php
$id=$_GET['id']??"";
$servername="";
$username="root";
$password="";
$dbname="crud";
$conn=new mysqli($servername,$username,$password,$dbname);
error_reporting(0);
if($conn->connect_error){
    die("Error connection".$conn->connect_error."<br>");
}else{
?>   
<?php
}
$sql="DELETE FROM crud WHERE empid='$id';";

if($conn->query($sql)===true){
?>

<div class="header"> 
<a href="#" class="home">Home</a>
<a href="index.html" class="sbtn">Log out</a>
<a href="view.php" class=sbtn2>Back</a>
</div>

<div class="container border border-3 mt-5">
<H1 class="text text-primary">Sucessfully DELETED</H1>
<a href="view.php"><button class="btn btn-outline-primary mt-3 mb-4">Home</button></a>
</div>

<?php
}else{
    ?>
    <div class="container border">
<h2 class="text text-prrimary">Error while deleting</h2>
</div>
    <?php echo$conn->error;

}
?><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script class="alert txt txt-danger"> </script>
<style>
    .header{
background-color: lightgray;
padding:10px 20px;
display: block ;
}
.sbtn{
    margin-left: 1050px;
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

}
.home{
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

