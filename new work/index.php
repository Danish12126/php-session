<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
 integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<h1 class="row justify-content-center">NEW WORK</h1>

<section class="container">
    <div class="row">
        <div class="col-4">
            <h2>Account Login</h2>
            <form method="post">
            <input type="text" placeholder="Enter your username" class="form-control mb-4" name="username">
            <input type="password" placeholder="Enter your password" class="form-control mb-4" name="password">

            <button class="btn btn-success w-100" name="btn_account">Login Account</button>
            </form>
        </div>
    </div>
</section>
<?php
session_start();

if(isset($_SESSION['name'])){
    header("location:loginaccount.php");
}
else{
if(isset($_POST['btn_account'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == "Danish" && $password == "learning"){
        echo "login Successfully"; 
        $_SESSION['name'] = $username;
        setcookie("user", $username , time()+ 60*60*60);
        header("Location:loginaccount.php");
    }
    else{
        echo "<h1>INVALID USERNAME OR PASSWORD</h1>";
    }
}
}
?>