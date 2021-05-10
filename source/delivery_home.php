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
    .gwd-p-ij1g {
		background-color: white;
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
    .reput {
      color: black;
      font-size: 16px;
	  text-align: center;
	  border-radius: 20px;
      font-weight: bold;
      height: 2.5%; 
	  width: 6.5%;
      left: 6.05%;
      top: 45%;
    }
	.reputa {
      color: black;
      font-size: 16px;
      font-weight: bold;
	  height: 2.5%;
	  text-align: center;
	  border-radius: 20px;
      width: 1.5%;
      left: 13.05%;
      top: 45.1%;
    }
	
    .region {
      color: black;
      font-size: 16px;
	  text-align: center;
	  border-radius: 20px;
      font-weight: bold;
      width: 8%;
	  height: 2.5%;
      left: 6.05%;
      top: 59%;
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
    .gwd-image-1c5l {
      display: block;
      height: 11.95%;
      left: 36.88%;
      position: absolute;
      top: 3.36%;
      width: 25.26%;
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
    .regions-div {
		background-color: white;
      position: absolute;
      width: 13%;
      top: 62%;
      height: 30%;
      left: 6.05%;
    }
    .rect {
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
    .edit {
      color: black;
      font-size: 16px;
	  text-align: center;
	  border-radius: 20px;
	  width: 8%;
	  height: 2.5%;
      left: 6.05%;
      top: 97.7%;
    }
    .image-regions {
		background-color: white;
      position: absolute;
      left: 14%;
      top: 97.5%;
      width: 1.4%;
      height: 3%;
    }
    .gwd-div-18v9 {
      position: absolute;
      height: 85%;
      width: 45%;
      left: 43%;
      top: 19%;
    }
    .gwd-span-x739 {
      position: absolute;
	  background-color: white;
	  border-radius: 20px;
	  text-align: center;
      font-weight: bold;
      left: 0%;
      top: 0%;
      width: 30%;
      height: 3%;
      font-size: 16px;
      font-family: "Trebuchet MS";
    }
    .gwd-div-1yvq {
		background-color: white;
      position: absolute;
      left: 0%;
      width: 100%;
      height: 34.85%;
      top: 3.08%;
    }
    .gwd-span-wn2j {
      position: absolute;
	  background-color: white;
	  border-radius: 20px;
	  text-align: center;
      font-weight: bold;
      font-size: 16px;
	  font-family: "Trebuchet MS";
      width: 13%;
      height: 3%;
      left: 0%;
      top: 39%;
    }
    .gwd-div-ordw {
		background-color: white;
      position: absolute;
      left: 0%;
      top: 42%;
      width: 100%;
      height: 58%;
    }
    .gwd-rect-p24e {
      position: absolute;
      box-sizing: border-box;
      border-width: 1px;
      border-style: solid;
      border-color: rgb(0, 0, 0);
      left: 0%;
      top: 0%;
      width: 100%;
      height: 100%;
    }
    .gwd-rect-1w9z {
      position: absolute;
      box-sizing: border-box;
      border-width: 1px;
      border-style: solid;
      border-color: rgb(0, 0, 0);
      left: 0%;
      top: 0%;
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
    @media (width: 1200px) and (height: 800px) {}
  </style>
  <script data-source="googbase_min.js" data-version="4" data-exports-type="googbase" src="googbase_min.js"></script>
  <script data-source="gwd_webcomponents_v1_min.js" data-version="2" data-exports-type="gwd_webcomponents_v1" src="gwd_webcomponents_v1_min.js"></script>
  <script data-source="gwdimage_min.js" data-version="16" data-exports-type="gwd-image" src="gwdimage_min.js"></script>
</head>

<body class="htmlNoPages">
  <div class="back-image"></div>
  <script gwd-served-sizes="" type="application/json">["1200x800"]</script>
  <svg data-gwd-shape="rectangle" class="gwd-rect-18cl"></svg>
  <svg data-gwd-shape="rectangle" class="gwd-rect-18cl gwd-svg-1sby"></svg>
  <p class="gwd-p-ij1g" style="background-color: black;">e-Meal</p>
  <button id="button_1" class="gwd-button-esum">Profile<br>
    
  </button>
  <?php 
		echo "<img class=\"gwd-img-8j60\" id=\"image\" src=\"profile_photos/id" . $id . ".jpeg\">";
		$color = "green";
		$query = "select * from Delivery_Guys where id = " . $id . ";";
		$result = mysqli_query($con, $query);
        if (!$result) {
            echo "Unsuccesful";
			exit();
        }
		$rest = mysqli_fetch_array($result);
		if($rest['speed_point'] < 8 && $rest['speed_point'] >= 5)
			$color = "orange";
		else if($rest['speed_point'] < 5)
			$color = "brown";
		echo "<p style= \"background-color: " . $color . ";\" class=\"gwd-p-ij1g reputa\">" . $rest['speed_point']. "</p> ";
	?>
	
  
  <p class="gwd-p-ij1g region">Regions</p>
  <p class="gwd-p-ij1g reput">Speed Point </p>
  <div class="regions-div" id="regions">
    <svg data-gwd-shape="rectangle" class="rect"></svg>
  </div>
  <p class="gwd-p-ij1g edit">Edit Regions</p>
  <a href="index.php" class="">
    <img class="image-regions" src="assets/edit.png">
  </a>
  <button class="gwd-button-p0am gwd-button-157n" data-gwd-name="help">Help</button>
  <button class="gwd-button-p0am gwd-button-1yob" data-gwd-name="contact">Contact Us</button>
  <button class="gwd-button-p0am gwd-button-1ux3" data-gwd-name="about">About</button>
  <gwd-image class="gwd-image-1c5l" id="gwd-image_1" source="assets/LOGO-B.PNG.jpeg"></gwd-image>
  <div class="gwd-div-18v9">
    <h1 class="gwd-span-x739">Ready to Pick Up Orders</h1>
    <div class="gwd-div-1yvq">
      <svg data-gwd-shape="rectangle" class="gwd-rect-p24e" id="ready"></svg>
    </div>
    <h1 class="gwd-span-wn2j">Delivering&nbsp;</h1>
    <div class="gwd-div-ordw">
      <svg data-gwd-shape="rectangle" class="gwd-rect-1w9z" id="deliver"></svg>
    </div>
  </div>
</body>

</html>