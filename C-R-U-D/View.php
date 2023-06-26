<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    .header{
background-color: lightgray;
padding:10px 20px;
display: block ;
}
.sbtn3{
   margin-left:1050px;
border-left: 2px solid black;
border-right:2px solid black;
text-decoration: none;
padding: 5px 10px;
text-decoration: none;
text-decoration-color: none;
color: black;
transition:all 1s;
}
.sbtn3:hover{
letter-spacing: 4px;
transition: all 1s;
}
.sbtn{
   margin-left:00px;
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

.h1f {
	position:fixed;
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
}else{
    $sql="SELECT * FROM crud;";
$result=$conn->query($sql);
if($conn){
?>  
<div class="header"> 
<a href="#" class="home">Home</a>
<a href="index.html" class="sbtn3">Log out</a>
<a href="sign up.html" class="sbtn">Sign up</a>

</div>
<div class="mt-5 container border border-3 clearfix">

<div class="text-center "><span class="h1 h1">Employee data</span></div>

</div>
  <table class=" table table-bordered table-primary table-hover">
    <thead class="table  bg-secondary text-white ">
    <tr> 
<td>ID</td>
<td >First Name</td>
<td>Last Name</td>
<td>Date of birth</td>
<td>E-Mail</td>
<td>Phone number</td>
<td>salary</td>
<td>job designation</td>

<td>update</td>
<td>Delete</td>
</tr>
</thead>
<tbody> 
 <?php
while($row=$result->fetch_assoc()){
  $ID =$row['empid'];
$fname =$row['f_name'];
$lname=$row['l_name'];
$dob=$row["dob"];
$em =$row["e_mail"];
$ph =$row["ph_number"];
$salary=$row['salary'];
$jobdesg=$row['job_designation'];
$username=$row["username"];
?>
<tr class="">
        <td scope=""><?php echo $ID;?></td>
        <td scope="col"><?php echo $fname; ?></td>
        <td scope=" col"><?php echo $lname; ?></td>
        <td scope="col"><?php echo $dob; ?></td>
        <td scope="col"><?php echo $em; ?></td>
        <td scope="col"><?php echo $ph; ?></td> 
        <td scope="col"><?php echo $salary;?></td>
        <td scope="col"><?php echo $jobdesg;?></td>
       
        <td><a href="update.php?viewid=<?php echo htmlentities($row['empid']); ?>&fname=<?php echo htmlentities($row['f_name']); ?>&lname=<?php echo htmlentities($row['l_name']);?>&dob=<?php echo htmlentities($row['dob']);?>&email=<?php echo htmlentities($row['e_mail']);?>&phnumber=<?php echo htmlentities($row['ph_number']);?>&salary=<?php echo htmlentities($row['salary']); ?>&jobdesg=<?php echo htmlentities($row['job_designation']);?>"><button class="btn btn-outline-primary">Update</button></a></td>
        <td><a  href="deletehtml.php?viewid=<?php echo htmlentities ($row['empid']);?>"><button onclick="delete()"class="btn btn-outline-primary">Delete</button></a></td>
    </tr>
  
<?php
}
}
}
?> 
</tbody>
</table>

