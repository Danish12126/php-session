<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
 integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">




<?php
session_start();
if(!isset($_SESSION['name'])){
    header('location:index.php');
}
?>

<?php 
if($_COOKIE['user'] > time() + 5){
    session_destroy();
};
?>
<h1>Welcome <?php echo $_SESSION['name']?></h1>

<a href="logoutaccount.php" class="btn btn-warning">Logout Account</a>