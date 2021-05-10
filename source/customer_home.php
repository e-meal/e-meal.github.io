<?php
session_start();

include("conf.php");

$user_name = "";
$password = "";
$id = 231;
?>

<html>

<head>
  <meta charset="utf-8">
  <title>Home</title>
  <meta name="generator" content="Google Web Designer 11.0.2.0415">
  <link href="gwdimage_style.css" rel="stylesheet" data-version="16" data-exports-type="gwd-image">
  <style type="text/css" id="gwd-text-style">
    p {
      margin: 0px;
    }
    h1 {
      margin: 0px;
    }
    h2 {
      margin: 0px;
    }
    h3 {
      margin: 0px;
    }
  </style>
  <style type="text/css">
    html, body {
      width: 100%;
      height: 100%;
      margin: 0px;
    }
    body {
      background-color: transparent;
      transform: perspective(1400px) matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
      transform-style: preserve-3d;
    }
    .gwd-rect-18cl {
      background-color: rgb(0, 0, 0);
      border-block-style: solid;
      border-block-width: 1.8432px;
      border-style: solid;
      border-width: 1.8432px;
      border-inline-style: solid;
      border-inline-width: 1.8432px;
      box-sizing: border-box;
      display: block;
      height: 15.63%;
      left: 0%;
      position: absolute;
      top: 0%;
      width: 100%;
    }
    .gwd-p-ij1g {
      color: rgb(255, 255, 255);
      font-family: "Trebuchet MS";
      position: absolute;
      transform-origin: 50% 50% 0px;
      font-size: 20px;
      height: 5%;
      width: 17%;
      left: 6.16%;
      top: 6.9%;
    }
    .gwd-image-1c5l {
      display: block;
      height: 11.95%;
      left: 36.88%;
      position: absolute;
      top: 3.36%;
      width: 25.26%;
    }
    .gwd-svg-1sby {
      border-block-width: 1.8432px;
      border-width: 1.8432px;
      border-inline-width: 1.8432px;
      left: 0%;
	  height: 13.5%;
      top: 106.5%;
    }
    .gwd-button-p0am {
      background-color: rgb(0, 0, 0);
      border-block-style: none;
      border-block-width: 0px;
      border-color: rgb(0, 0, 0);
      border-style: none;
      border-width: 0px;
      border-inline-style: none;
      border-inline-width: 0px;
      color: rgb(97, 97, 97);
      display: block;
      font-size: 14px;
      height: 4%;
      left: 88.25%;
      overflow: hidden;
      position: absolute;
      text-align: left;
      top: 85.5%;
      width: 7%;
    }
    .gwd-button-1uwz {
      background-color: rgb(0, 0, 0);
      border-block-style: none;
      border-block-width: 0px;
      border-color: rgb(0, 0, 0);
      border-style: none;
      border-width: 0px;
      border-inline-style: none;
      border-inline-width: 0px;
      color: rgb(97, 97, 97);
      display: block;
      font-size: 14px;
      height: 4%;
      left: 88.25%;
      overflow: hidden;
      position: absolute;
      text-align: left;
      top: 94.52%;
      width: 7%;
    }
    .gwd-button-1ux3 {
     
      left: 88.25%;
      top: 110.53%;
    }
    .gwd-button-157n {
      left: 88.27%;
      top: 106.55%;
    }
    .gwd-button-1yob {
      left: 88.27%;
      top: 114.58%;
      text-align: left;
      width: 11%;
    }
    .gwd-svg-1bis {
      left: 0%;
      top: 0%;
    }
    .gwd-button-esum {
      position: absolute;
      opacity: 1;
      background-color: grey;
		color: white;
      overflow: visible;
      border-style: ridge;
      height: 3%;
      width: 7%;
      left: 6.05%;
      top: 34.28%;
    }
    .gwd-img-8j60 {
      position: absolute;
      background-color: rgb(255, 252, 252);
      width: 8.41%;
      left: 6.05%;
      top: 17.44%;
      height: 15%;
    }
    .gwd-button-1jn1 {
      position: absolute;
      left: 6.05%;
      top: 32.44%;
	  border-radius: 20px;
	  text-align: center;
      border-width: 0px;
      border-image-source: none;
      border-image-width: 1;
      border-image-outset: 0;
      border-image-repeat: stretch;
      border-color: rgb(255, 255, 255);
      background-image: none;
      background-color: rgb(253, 251, 251);
      border-style: none;
    }
    .gwd-span-1qa7 {
      font-weight: bold;
      font-family: "Trebuchet MS";
    }
    .gwd-button-ryfn {
      font-weight: bold;
      font-family: "Trebuchet MS";
      left: 6.05%;
      top: 50%;
      width: 9%;
      height: 2.5%;
    }
    .gwd-button-1otn {
      left: 6.05%;
      top: 40.16%;
      width: 8%;
      height: 2.5%;
    }
    .gwd-div-1v7x {
      position: absolute;
      background-color: rgb(253, 251, 251);
      left: 6.05%;
      width: 27%;
	  height: 53%;
      top: 53%;
    }
    .gwd-p-1n8r {
      position: absolute;
	  background-color: white;
      border-radius: 20px;
	  text-align: center;
	  font-weight: bold;
      font-family: "Trebuchet MS";
      left: 43.27%;
      height: 2.5%;
      width: 6%;
      top: 20.86%;
    }
    .gwd-div-1cld {
		background-color: white;
      position: absolute;
	  overflow: auto;
      left: 43.27%;
      width: 44.98%;
      height: 81.48%;
      top: 23.94%;
    }
	.gwd-rect-hzke {
      position: absolute;
      box-sizing: border-box;
      border-width: 1px;
      border-style: solid;
      border-color: rgb(0, 0, 0);
      height: 81.48%;
      width: 44.97%;
      left: 43.27%;
      top: 23.94%;
    }
    .gwd-img-p260 {
      position: absolute;
      width: 5%;
      left: 64.74%;
      top: 70%;
      height: 18.4%;
    }
    .gwd-p-1rmt {
      position: absolute;
      transform-origin: 50% 50% 0px;
      font-size: 20px;
      font-family: "Trebuchet MS";
      width: 23%;
      height: 11.2%;
      left: 74.8%;
      top: 75.16%;
    }
    .gwd-p-11z5 {
      position: absolute;
      left: 545px;
      top: 210px;
      font-weight: bold;
      font-family: "Trebuchet MS";
      width: 79.1753px;
      height: 18.3333px;
      transform-origin: 50% 50%;
    }
    .gwd-p-lezf {
      width: 96%;
      left: 2.07%;
      top: 40.81%;
      height: 11.2%;
    }
    .gwd-p-fgb6 {
      left: 2.07%;
      width: 41%;
      top: 66.88%;
      height: 30%;
    }
    .gwd-p-8ire {
      width: 30%;
      left: 2.07%;
      top: 9.72%;
      height: 11.2%;
    }
    .gwd-div-adyl {
      position: relative;
	  border-style: solid;
      width: 98%;
      left: 1%;
      top: 2%;
      height: 24.8%;
    }
    .gwd-span-1ic5 {
      position: absolute;
      left: 874px;
      top: 212px;
      font-family: "Trebuchet MS";
      font-weight: normal;
    }
    .gwd-span-nyjl {
      background-image: none;
	  color: white;
	  text-align: center;
      width: 4%;
      left: 86.3%;
      top: 10%;
      height: 11.2%;
    }
    .gwd-span-17b5 {
      background-image: none;
	  color: white;
	  text-align: center;
      width: 4%;
      left: 64.82%;
      top: 9.72%;
      height: 11.2%;
    }
	.gwd-img-cyr6 {
      position: absolute;
      width: 4.5%;
      height: 15.64%;
      left: 91.33%;
      top: 75.16%;
    }
	.gwd-img-1ssu {
		position: absolute;
		left: 93.77%;
		top: 20.36%;
		width: 2.46%;
		height: 3.5%;
	}
	.rect{
		position: absolute;
		box-sizing: border-box;
		border-width: 1px;
		border-style: solid;
		border-color: rgb(0, 0, 0);
		left: 0%;
		top: 0%;
		overflow: auto;
		width: 100%;
		height: 100%;
	}
	.back-image{
		position: absolute;
		background-image: url("assets/home_back.png");
		top: 15%;
		width: 100%;
		height: 100%;
		filter: blur(3px);
		-webkit-filter: blur(3px);
	}
  </style>
  <script data-source="googbase_min.js" data-version="4" data-exports-type="googbase" src="googbase_min.js"></script>
  <script data-source="gwd_webcomponents_v1_min.js" data-version="2" data-exports-type="gwd_webcomponents_v1" src="gwd_webcomponents_v1_min.js"></script>
  <script data-source="gwdimage_min.js" data-version="16" data-exports-type="gwd-image" src="gwdimage_min.js"></script>
</head>

<body class="htmlNoPages">
<div class="back-image"></div>
  <script gwd-served-sizes="" type="application/json">["809.985x460.995"]</script>
  <svg data-gwd-shape="rectangle" class="gwd-rect-18cl gwd-svg-2sty gwd-svg-10t8 gwd-svg-1bis"></svg>
  <p class="gwd-p-ij1g">e-Meal</p>
  <a href="customer_home.php"><gwd-image class="gwd-image-1c5l" id="gwd-image_1" source="assets/LOGO-B.PNG.jpeg"></a></gwd-image>
  <svg data-gwd-shape="rectangle" class="gwd-rect-18cl gwd-svg-1sby"></svg>
  <button class="gwd-button-p0am gwd-button-157n" data-gwd-name="help">Help</button>
  <button class="gwd-button-p0am gwd-button-1yob" data-gwd-name="contact">Contact Us</button>
  <button class="gwd-button-p0am gwd-button-1ux3" data-gwd-name="about">About</button>
  <button id="button_1" class="gwd-button-esum">Profile<br></button>
  
  
  <?php 
		echo "<img class=\"gwd-img-8j60\" id=\"image\" src=\"profile_photos/id" . $id . ".jpeg\">";
  ?>
  <p class="gwd-button-1jn1 gwd-button-1otn"><span class="gwd-span-1qa7">Reputation</span><br></p>
  <p class="gwd-button-1jn1 gwd-button-ryfn">Last Orders</p>
  <div class="gwd-div-1v7x" id="last_orders">
	<svg data-gwd-shape="rectangle" class="rect"></svg>
  </div>
  <p class="gwd-p-1n8r">Restaurants</p>
  <svg data-gwd-shape="rectangle" class="gwd-rect-hzke"></svg>
  <div class="gwd-div-1cld" id="restaurants">
    <?php 
		$query = "select * from Restaurants where is_open = 1";
		$result = mysqli_query($con, $query);

        if (!$result) {
            echo "Unsuccesful";
			exit();
        }


        while($rest = mysqli_fetch_array($result)) {
			$service = "green";
			$taste = "green";
			if($rest['taste_point'] < 8 && $rest['taste_point'] >= 5)
				$taste = "orange";
            else if($rest['taste_point'] < 5)
				$taste = "brown";
			
			if($rest['service_point'] < 8 && $rest['service_point'] >= 5)
				$service = "orange";
            else if($rest['service_point'] < 5)
				$service = "brown";
			echo "<div class=\"gwd-div-adyl\" id=\"rest_elemtn\">
		<img src=\"assets/financial.png\" id=\"financial\" class=\"gwd-img-p260\">
		<p class=\"gwd-p-1rmt\">" . $rest['minumum_fee'] . " TL</p>
		<p class=\"gwd-p-11z5 gwd-p-8ire\"> " . $rest['restaurant_name'] . "</p>
		<p class=\"gwd-p-11z5 gwd-p-fgb6\">Address: " . $rest['city'] . " " . $rest['zip'] . "</p>
		<p class=\"gwd-p-11z5 gwd-p-lezf\">Fav meal</p>
		<p class=\"gwd-span-1ic5 gwd-span-17b5\" style=\"background-color: " . $service . ";\" >" . $rest['service_point'] . "</p>
		<p class=\"gwd-span-1ic5 gwd-span-nyjl\" style=\"background-color: " . $taste . ";\">" . $rest['taste_point'] . "</p>
		<img class=\"gwd-img-cyr6\" src=\"assets/in.png\">
		</div>";
        }

	?>
  </div>
  <a href="index.php"><img class="gwd-img-1ssu" src="assets/log-out.jpeg"></a>
</body>

</html>