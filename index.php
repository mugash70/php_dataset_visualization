
<?php
//include auth_session.php file on all user panel pages
include("session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
    <style >
header {
	background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url(./image/1.jpg);
	height: 100vh;
	-webkit-background-size: cover;
	background-size: cover;
	background-position: center center;
	position: relative;
}
ul{
	float: right;
	list-style-type: none;
}

ul li {
	display: inline-block;
}
ul li a{
    text-decoration:none;
    color:#fff;
    padding:5px 20px;
    border: 1px solid #fff;
    transition: 0.6s ease;
}
ul li a: hover{
    background-color:#fff;
    color:#000;
}
.main{
    max-width:1200px;
    margin:auto;
}

        </style>
    <title>Dashboard </title>
</head>
<body>
    <header>
        <div class="main">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="upload_ui.php">upload csv</a></li>
                <li><a href="view.php">view csv</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
</div>
<div class="form">
        <h1 style="color:white">Home page.</h1>
        <h1 style="color:white">Welcome : <?php echo $_SESSION['username']; ?></h1>
    </div>
</header>



</body>
</html>
