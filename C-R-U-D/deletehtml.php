<style>
    .header{
background-color: lightgray;
padding:10px 20px;
display: block ;
}
.sbtn{
margin-left:1050px;
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
<?php
$id=$_GET['viewid'];
$servername="";
$username="root";
$password="";
$dbname="crud";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("Error connection".$conn->connect_error."<br>");
}else{
    $sql="SELECT empid FROM crud WHERE empid='$id';";
$result=$conn->query($sql);
if($conn){
    $row=$result->fetch_assoc();
       $id=$row['empid'];
}}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body >
<div class="header"> 
<a href="#" class="home">Home</a>
<a href="index.html" class="sbtn">Log out</a>
<a href="view.php" class=sbtn2>Back</a>
</div>
<div class="mt-5 container border border-5 rounded">
    <div class="text  mt-3 mb-3 p-4"><h1>Delete</h1>
        <div class="form-floating mb-3 mt-3">
        <h4>  Are you sure want to delete</h4>
</div>
 <a  href="delete.php?id=<?php echo $id;?>"><button class="btn btn-secondary">Yes</button></a> 
 <a  href="view.php"><button class="btn btn-secondary">No</button></a>
</div>
</body>
</html>