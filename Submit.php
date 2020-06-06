<?php
if(isset($_POST['submit'])){
    include'connection.php';

    $firstname= $_POST['firstname'];
    $lastname= $_POST['lastname'];
    $username= $_POST['username'];
    $password= $_POST['password'];

    $mypict  =$_FILES['myImage']['name'];
    $temp =$_FILES['myImage']['tmp_name'];
    $type= $_FILES['myImage']['type'];

    $query= "SELECT username FROM users WHERE username='$username' ";
    $resul= mysqli_query($connect,$query);
    $count=mysqli_num_rows($resul);
    if($count>0){
    echo"<script> alert('Please try with another user name this one is already in system');
    window.location.href='index.php';
    </script>";
    }
    else{
      $directory="./myprofile/$username/pictures/";
      mkdir($directory,0777,true);
      move_uploaded_file($temp,"myprofile/$username/pictures/$mypict");
      $insert="INSERT INTO users(user_firstname,user_lastname,username,password) VALUES('$firstname','$lastname','$username','$password')";
      $execut= mysqli_query($connect,$insert);
      if($execut){
        echo"<script> alert('Wekcome $firstname');
    window.location.href='index.php';
    </script>";
      }
      else{
        echo"<script> alert('fail to regist new user please try again');
        window.location.href='index.php';</script>";
      } 
    

}
}


?>