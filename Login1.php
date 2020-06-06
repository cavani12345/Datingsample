<?php
session_start();
include'connection.php';
if(isset($_POST['Login']))
{
$user=$_POST['username'];
$pass=$_POST['password'];

$query="SELECT* FROM users WHERE username='$user' ";
$result=mysqli_query($connect,$query);
$count=mysqli_num_rows($result);
if($count==0)
{
  echo"<script> alert('you are  not accepted');
  window.location.href='index.php';
  </script>";
}
else
{
while($rows=mysqli_fetch_object($result))
{
$st_username=$rows->username;
$st_password=$rows->password;
$st_firstname=$rows->user_firstname;
$lastname=$rows->user_lastname;
}
$_SESSION['username']=$st_username;
$_SESSION['firstname']=$st_firstname;
$_SESSION['password']=$st_password;
$_SESSION['lastname']=$lastname;
if($_SESSION['username']==$user && $_SESSION['password']==$pass){

echo "<script> alert('Welcome on new page');
window.location.href='indexd.php';
</script>";
}
else{
    echo "<script> alert('Invalid user crudential ');
    window.location.href='index.php';
    </script>";  
}

}

}
?>