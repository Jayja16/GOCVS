<?php
session_start();
$_SESSION['option']=$_POST['select'];
$_SESSION['id']=$_POST['mat'];
$option= $_SESSION['option'];
$id= $_SESSION['id'];

    $con=mysqli_connect("localhost","root","","alevel");
    switch($option){
        case "alevel":
            $query="SELECT  * from `alevelcertificates` where candidateIdNum=$id";
            $result=mysqli_query($con,$query);
            break;
        case "olevel":
            $query="SELECT * from `olevelcertificate`where candidateIdNum=$id";
            $result=mysqli_query($con,$query);
            break;
        case "inter":
            $query="SELECT * from `tveealevelcert` where candidateIdNum=$id";
            $result=mysqli_query($con,$query);
            break;
        case "advance":
            $query="SELECT * from `tveeintermediatecert` where candidateIdNum=$id";
            $result=mysqli_query($con,$query);
            break;
        default:
            die("Error");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>G.O.C.V.S</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/result_style.css">
</head>
<body>
<header>
    <div class="navbar">
        <div class="logo"><a href="#">G.O.C.V.S</a></div>
        <ul class="links">
            <li class="link"><a href="index.php" class="active">Home</a></li>
            <li class="link"><a href="#">Contact Us</a></li>
            <li class="link"><a href="faq.html">FAQS</a></li>
        </ul>
        <button class="action-btn"><a href="#"> Subscribe</a> </button>
        <div class="toggle_btn">
            <i class="fa-solid fa-bars"></i>
        </div>
    </div>
</header>
<div class="container">
    <div class="sub_text">
        <h2>Welcome to GCE Online Certificate Verification System</h2>
        <p>The result of each applicant is checked against our permanent record and<br> verification supplied is based wholly on that record </p>
    </div>
    <div class="verify">
        <form method="post" action="result.php" >
            <select name="select" value="select">
                <option value="none" disabled>---Select the certificate you want to verify---</option>
                <option value="alevel">GCE Advanced Level</option>
                <option value="olevel">GCE Ordinary Level</option>
                <option value="inter">TVEE Intermediate Level</option>
                <option value="advance">TVEE Advanced Level</option>
            </select>
            <input type="text" placeholder="Enter your CIN as inscribed on your certificate" class="mat" name="mat" required>
            <input type="submit" value="Verify" name="go" class="sub" id="go">
        </form>

    </div>
</div>
    <?php
    if ($result->num_rows > 0) {
        echo "<script src='../JS/modal.js'></script>";
        echo" <table>
                <thead>
                <tr>
                    <th>candidateIdNum</th>
                    <th>firstName</th>
                    <th>lastName</th>
                    <th>sex</th>
                    <th>dateOfBirth</th>
                    <th>yearIssued</th>
                </tr>
                </thead>
                <tbody>";
        while ($row = $result->fetch_array()) {
            echo "<tr><td>" . $row["candidateIdNum"] . "</td><td>" . $row["firstName(s)"] . "</td><td>" . $row["lastName(s)"] . "</td><td>" . $row["sex"] . "</td><td>" . $row["dateOfBirth"] . "</td><td>" . $row["yearIssued"] . "</td></tr>";
        }
        echo"</tbody></table>";

    }else{
        echo"<script src='../JS/js.js'></script>";
    }
    ?>
    <footer>
    &copy; GCE Board <?php echo date("Y")?> | Powered by TheDevNerd
</footer>
</body>
</html>
