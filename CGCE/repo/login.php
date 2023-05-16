
<?php
session_start();
if(isset($_POST['log'])) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $con = mysqli_connect("localhost", "root", "", "alevel");
    $sql = "SELECT * FROM userinfo WHERE email='$email' AND password='$pass'";
    $result = mysqli_query($con, $sql);
//    $row=$result->fetch_array();
    if ($result) {
        $_SESSION['email'] = $email;
        $_SESSION['pass'] = $pass;
        header("location:index.php");
    } else {
        echo "<p  class='alert alert-danger'style='width:400px;left:37%;top:12%;z-index:1;'>Incorrect credentials entered.</p>";
    }
}
//}else{
//    header("location:login.php");
//}
//if(isset($_GET['as'])){
//    echo "<p  class='alert alert-danger'style='width:400px;left:37%;top:12%;z-index:1;'>Incorrect credentials entered.</p>";
//}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>G.O.C.V.S/Login</title>
    <link rel="stylesheet" href="../assets/css/design.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
<div class="contain" id="modal">
    <h1>Login</h1>
    <form method="post" action="">
        <div class="txt_field">
            <input type="email" name="email" required>
            <span></span>
            <label>Email</label>
        </div>
        <div class="txt_field">
            <input type="password" name="pass" required>
            <span></span>
            <label>Password</label>
        </div>
        <div class="pass"><a href="#">Forgot Password?</a></div>
        <input type="submit" value="Login" class="Log-in" name="log">
        <div class="signup">
            Don't have an account?<a href="signUp.php">SignUp</a>
        </div>
    </form>
</div>
</body>
</html>