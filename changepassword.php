<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Change_password</title>
    <link rel="stylesheet" type="text/css" href="../static/css/css.css" />
   <script>
     function Myvalid()
{
var nn=document.getElementById('newpass').value;
var nnn=document.getElementById('confirmpass').value;
if(nn==nnn)
{
return true;
}
else
{
alert('passwords do not match');
confirmpass.focus();
confirmpass.style="border-color:red;";
return false;
}
}
   </script>
    <style>
        input[type=number]
        {
        font-family:"Times New Roman", Times, serif;
        font-size:14px;
        font-style:italic;
        }
        
        </style>
</head>
<body>
    <table id="main" align="center" border="0">

        <tr id="middle"><td><form action="change_password.php" method="post" onsubmit="return Myvalid();"><table align="center" cellpadding="10">
        <tr><td align="left"><label>Usernane:</label></td><td>
        <input type="text"  name="username" required border="2" placeholder="your username "> &nbsp</td></tr>
        <tr><td align="left"><label>Old Password:</label></td><td align="left">
        <input type="password" name="oldpassword" required border="2" placeholder="old password"></td></tr>
        <tr><td align="left"><label>New Password:</label></td><td align="left">
        <input type="password" name="newpassword" id="newpass" required border="2" placeholder="new password"></td></tr>
        <tr><td align="left"><label>Confirm password:</label></td><td align="left">
        <input type="password" name="confirmpass" id="confirmpass" required border="2" placeholder="confirm password"><span id"message"></span></td></tr>
        <tr><td><input type="submit" name="change" value="Change" ></td><td>
        <input type="reset" name="reset" value="Reset"></td></tr></table></form>  
</body>
</html>