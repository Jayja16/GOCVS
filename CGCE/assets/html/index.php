<?php
if(isset($_GET['as'])){
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>G.O.C.V.S</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
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
        <button  data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" class="action-btn"><a href="#"> Subscribe</a> </button>

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
            <input type="submit" value="Verify" name="go" class="sub" id="go" >
        </form>


<!--                Don't have an account?<a href="#">SignUp</a>-->
<!--            </div>-->
<!--        </form>-->
<!--        <script>-->
<!--            let modal=document.getElementById("modal");-->
<!--            function openModal(){-->
<!--                modal.classList.add("open-modal");-->
<!--            }-->
<!--            function closeModal(){-->
<!--                modal.classList.remove("open-modal");-->
<!--            }-->
<!--        </script>-->
    </div>
</div>
<footer>
    &copy; GCE Board 2023 | Powered by TheDevNerd
</footer>
</body>
</html>