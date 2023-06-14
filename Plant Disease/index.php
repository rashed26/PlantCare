
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Index</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel='stylesheet' type='text/css' href='style.css'>
</head>
<body>
    <div class="wrapper">
        <div class="form-wrapper sign-in">
            <form action="index.php" method="post">
                <h2>Log In</h2>
                <div class="input-group">
                    <input type="text" id="userName" name="username" required>
                    <label for="">Username</label>
                </div>
                <div class="input-group">
                    <input type="password" id="password" name="password" required>
                    <label for="">Password</label>
                </div>
                <div class="remember">
                    <label><input type="checkbox"> Remember me</label>
                                                
                </div>
             <button type="submit" onclick="Auth()">Log In</button>
             <div class="signUp-link">
                <p>Don't have an account? <a href="register.php" class="signUpBtn-link">Register</a></p>
             </div>
             <div class="social-platform">
                <p>Or sign in with</p>
                <div class="social-icons">
                    <a href="#" ><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" ><i class="fa-brands fa-google"></i></a>
                </div>
             </div>
            </form>
        </div>
    </div>
    <script>
        function Auth()
 {
       var userName=document.getElementById("userName").value;
       var password=document.getElementById("password").value;
       
       if(userName=="user" && password=="12345")
       {
         window.location.assign("home.html");
         alert("Login Successful");
           }
       else
       {
         alert("Invalid Credentials");
         return;
       }


 }
        </script>
    <script src="script.js"></script>
</body>
</html>