<?php
    //Including FusionCharts’ PHP Wrapper
    include("./fusioncharts/fusioncharts-wrapper/fusioncharts.php"); 


?>
    <html>
<head>
    <!-- Including FusionCharts JavaScript file -->
<script type="text/javascript" src="./resources/js/fusioncharts.js"></script>
<script type="text/javascript" src="./resources/js/themes/fusioncharts.theme.fusion.js"></script>
<style>
  
  header {
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
    color:#000;
    padding:5px 20px;
    border: 1px solid #000;
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
<?php
    require('db.php');
    $sql = "SELECT * FROM dataset";
    $result = $conn->query($sql);
if ($result) {

    // creating an associative array to store the chart attributes
    $arrData = array(
      "chart" => array(
        "caption" => "COVID-19 Coronavirus Pandemic ",
        "numberSuffix" => "K",
        "theme" => "fusion"
      )
    );
  
    $arrData["data"] = array();
  
    // iterating over each data and pushing it into $arrData array
    while ($row = mysqli_fetch_array($result)) {
      array_push($arrData["data"], array(
        "label" => $row["Country"],
        "value" => $row["TotalCases"]
      ));
    }
  
    $jsonData = json_encode($arrData);
    
  }
//   echo $jsonData;
  $columnChart = new FusionCharts("column2d", "covidChart",
 "100%", "500", "covid-chart", "json", $jsonData);
 // FusionCharts render() method
  $columnChart->render();
  
?>
<header>
        <div class="main">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="upload_ui.php">upload csv</a></li>
                <li><a href="view.php">view csv</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
</div>

<div id="covid-chart">Here is your chart</div>
</header>
</body>

</html>

