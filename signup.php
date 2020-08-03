<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/hover.css">
    <script src="js/jquery-2.1.4.min.js"></script>
</head>
<body> 
<div>
<div class="login_form">
<div class="top">
        <p class="text-center">Chamber</p>
    </div>
    <div class="top_1 mt-5" >
        <p class="text-center">Create Your Account</p>
    </div>
    <form action="">
        <div class="row">
            <div class="col">
            <input type="text" class="form-control" placeholder="First Name" name="firstname" id="firstname" Required >
            </div>
            <div class="col">
            <input type="text" class="form-control" placeholder="Last Name" name="lastname" Required>
            </div>
        </div>
        <input type="email" class="form-control" placeholder="Email" name="email" id="email" Required >
        <input type="tel" class="form-control" placeholder="Phone Number" name="phone" id="phone" Required >
        <input type="password" class="form-control" placeholder="Password" name="password" minlength="8" Required>
        
        <button class="form-control btn btn-success" name="submit">Sign Up</button>
    </form>
    <hr>
    <p class="text-center">Already have account?<a href="login.php"> Sign in</a></p>
</div>    
</div>

</body>
<script src="js/bootstrap.min.js"></script>
<script src="js/javascript.js"></script>
</html>