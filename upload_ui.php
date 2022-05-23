
<?php
require('db.php');
include("session.php");
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <title>Import the covid CSV</title>

  <style>
    .custom-file-input.selected:lang(en)::after {
      content: "" !important;
    }

    .custom-file {
      overflow: hidden;
    }

    .custom-file-input {
      white-space: nowrap;
    }

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

  <div class="container">
    <form action="upload.php" method="post" enctype="multipart/form-data" >
      <div class="input-group">
        <div class="custom-file">
          <input type="file" class="custom-file-input" id="customFileInput" aria-describedby="customFileInput" name="file">
          <label class="custom-file-label" for="customFileInput">Select file</label>
        </div>
        <div class="input-group-append">
           <input type="submit" name="submit" value="Upload" class="btn btn-primary">
        </div>
      </div>
  </form>
  </div>
  </header>
</body>

</html>
