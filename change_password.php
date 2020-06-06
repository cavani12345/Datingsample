<?php
include'connection.php';
if(isset($_POST['change'])){

    $username= $_POST['username'];
    $oldpassword= $_POST['oldpassword'];
    $newpassword= $_POST['newpassword'];

    $query= "SELECT password FROM users WHERE username='$username' AND password='$oldpassword'";
    $result= mysqli_query($connect,$query);
    $count= mysqli_num_rows($result);
    if($count==0){
    echo "<script> alert('invalid information. please try again');
    window.location.href='changepassword.php'; </script>";
    }
else{

    while($row= mysqli_fetch_object($result)){
        $update= "UPDATE users SET password='$newpassword' WHERE username='$username' AND password='$oldpassword'";
        $exec= mysqli_query($connect,$update);
        if($exec){
            echo "<script> alert('your password has been changed');
            window.location.href='index.php'; </script>"; 
        }
        else{
            echo "<script> alert('your password has not been changed);
            window.location.href='change_password.php'; </script>";  
        }
    }     
    }
}

?>