
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


.custom-container {
      max-width: 600px; /* Adjust the width as needed */
      max-height: 780px;
      margin-left: auto;
      margin-right: auto;
      margin-top: 50px;
    } 
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">



<?php
$id=$_GET['viewid']??"";
$f_name=$_GET['fname'];
$l_name=$_GET['lname'];
$_dob=$_GET['dob'];
$e_mail=$_GET['email'];
$ph_number=$_GET['phnumber'];
$salary=$_GET['salary'];
$jobdesg=$_GET['jobdesg'];
$servername="";
$username="root";
$password="";
$dbname="crud";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("Error connection".$conn->connect_error."<br>");
}else{
  if (isset($_POST['submit'])) {
    // Call the method
  $id=$_GET['viewid'];
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$dob=$_POST['dob'];
$email=$_POST['email'];
$phnumber=$_POST['phno'];
$salary=$_POST['salary'];
$jobdesg=$_POST['jobdesg'];
  $sql = " UPDATE crud SET f_name='$fname' ,l_name='$lname', dob='$dob' ,e_mail='$email' ,ph_number='$phnumber' ,salary='$salary' ,job_designation='$jobdesg' WHERE `empid`='$id'";
$result=$conn->query($sql);
if($result)
{
  echo"<script>
  window .location.href='view.php';
  </script>";
 
}else{
Echo$conn->error;
}}}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
<div class="header"> 
<a href="#" class="home">Home</a>
<a href="index.html" class="sbtn">Log out</a>
<a href="view.php" class="sbtn2" >Back</a>
</div>
    <form  method="post" class="was-validated">
    <div class="custom-container border border-3 ">
        <div class="text  mt-3 mb-3 p-4"><h1>Update</h1>
                        <div class="form-floating mb-3 mt-3">
                            <input type="number" class="form-control disabled" name="firstname" placeholder="" value=<?php echo $id; ?> disabled>
                            <label for="lastname" >Your ID</label>
                        </div>
                    <table>
                        <tr>
                            <td>
                                <div class="form-floating mt-3 mb-3">
                                    <input type="text" class="form-control"  name="firstname" placeholder="firstname" pattern="[A-za-z/s]"  title="only text is allowed" value="<?php echo $f_name;?>" required>
                                    <label for="First-name" class="form-label">First-name</label>
                                </div>
                            </td>
                            <td >
                                <div class="form-floating mb-3 mt-3">
                                    <input type="text" class="form-control" name="lastname" placeholder="Last name"pattern="[A-za-z/s]"  title="only text is allowed" value="<?php echo $l_name;?>" required>
                                    <label for="lastname" >Last name</label>
                                </div>
                            </td>
                        </tr>
                    </table>
                    <div class="form-floating mb-3 mt-3" >
                       <input type="date" class="form-control" name="dob" value="<?php echo $_dob;?>" required>
                       <label for="" class="">date of birth</label>
                    </div>
            
                    <div class="form-floating mb-3 mt-3">
                    <input type="email" class="form-control" name="email" placeholder="E-mail" value="<?php echo $e_mail;?>" required>
                    <label for="e-mail" class="">E-mail</label>
                    </div>
                    <div class="form-floating mb-3 mt-3">
                        <input type="number" class="form-control" name="salary" placeholder="salary" value="<?php echo $salary;?>" required>
                        <label for="phno" class="form-label">Enter salary</label>
                    </div>
                    <div class="form-floating mb-3 mt-3">
                        <input type="text" class="form-control" name="jobdesg" placeholder="Job designation" pattern="[A-za-z/s]"  title="only text is allowed"value="<?php echo $jobdesg;?>" required>
                        <label for="phno" class="form-label">job designation</label>
                    </div>
            
                    <div class="form-floating mb-3 mt-3">
                        <input type="number" class="form-control" name="phno" placeholder="Phone number" value="<?php echo $ph_number;?>" required>
                        <label for="phno" class="form-label">Phone number</label>
                    </div>
                    <input type="submit" name='submit'  class="btn btn-outline-primary"> 
                </div>
        </form>
      
</body>
</html>