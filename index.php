<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../static/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../static/css/maina.css">
    <title>::Best Design Ever::</title>
</head>
<body>
    <div class="all_inside">
    <div class="container" id="container">
        <div class="form-container Sign-up-container">
            <form action="Submit.php" method="POST" enctype="multipart/form-data">
                <img src="static/images/sky.png" alt="Not found" height="30px" width="50px">
                <h1>Create Acount</h1>
                <div class="social-container">
                   <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                   <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                   <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your Email for registration</span>
                <input type="text" placeholder="Firstname" name="firstname">
                <input type="text" placeholder="Lastname" name="lastname">
                <input type="text" placeholder="Username" name="username">
                <input type="password" placeholder="Password" name="password">
                <input type="file" name="myImage" id="myImage">
                <!--<button type="button">Sign Up</button>-->
                <button type="submit" name="submit">Sign Up</button>
            </form>
        </div>

        <div class="form-container Sign-in-container">
            <form action="Login1.php" method="POST">
                <img src="static/images/sky.png" alt="Not found" height="30px" width="50px">
                <h1>Dating App</h1>
                <h4>Sign In</h4>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>Or Use Your Account</span>
                <input type="text" placeholder="Username" name="username">
                <input type="password" placeholder="Password" name="password">
                <a href="#">Forget Password</a>
                <button type="submit" name="Login">Sign In</button>
            </form>
        </div>

        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-right">
                    <h1>Welcome Back</h1>
                    <p>
                        To Keep connected with us please login with your person info
                    </p>

                    <button class="ghost" id="signIn">Sign In</button>
                </div>

                <div class="overlay-panel overlay-left">
                    <div class="walls">
                        <div class="walls_inner">
                    <h1>Dear Friend,</h1>
                    <p>
                        With this system you can create your account today! Join us and Feel Happy
                    </p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
            </div>
            </div>
        </div>
    </div>
</div>
    <script src="../static/app.js"></script>
</body>
</html>