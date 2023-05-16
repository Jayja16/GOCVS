<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="../assets/css/design.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="C:\xampp\htdocs\CGCE\node_modules\sweetalert\dist\sweetalert.min.js">
</head>
<body>
<div class="contain" id="modal">
  <h1>Sign Up</h1>
  <form method="post" action="">
    <div class="txt_field">
      <input type="text" name="uname" required>
      <span></span>
      <label>Username</label>
    </div>
    <div class="txt_field">
      <input type="email" name="email" required>
      <span></span>
      <label>Email</label>
    </div>
    <div class="txt_field">
      <input type="password" name="pass1" required>
      <span></span>
      <label>Password</label>
    </div>
    <div class="txt_field">
      <input type="password" name="pass2" id="pass2" required>
      <span></span>
      <label>Repeat Password</label>
    </div>
    <input type="submit" value="Sign Up" class="Log-in" name="go">
    <div class="signup">
      Already have an account?<a href="login.php">Login Here.</a>
    </div>
  </form>
</div>
</body>
</html>
<?php
if(isset($_POST['go'])) {
    $uname=$_POST['uname'];
    $email=$_POST['email'];
    $pass1=$_POST['pass1'];
    $pass2=$_POST['pass2'];
    if($pass1==$pass2) {
        $pass=$pass2;
        $con = mysqli_connect("localhost", "root", "", "alevel");
        $sql = "INSERT into userinfo VALUES(null,'$uname','$email','$pass')";
        mysqli_query($con,$sql);
        ?>
        <script type="text/javascript">
            swal("Success", "Account has been successfully been created", "success");
        </script>
        <?php
        header("location:index.php");
    }else{
        echo "<p class='alert alert-danger'style='width:400px;left:37%;top:12%;z-index:1;'>Passwords do not match!</p>";
    }
}
?>

