<?php
session_start();

include("conf.php");

$user_name = "";
$password = "";

if($_SESSION['logged'] != true){	
	header("Location: login.php");
	die;
}

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
		color: rgb(255, 255, 255);
		font-family: "Trebuchet MS";
		position: absolute;
		transform-origin: 50% 50% 0px;
		-webkit-transform-origin: 50% 50% 0px;
		-moz-transform-origin: 50% 50% 0px;
		font-size: 20px;
		height: 5%;
		width: 17%;
		left: 6.16%;
		top: 6.9%;
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
    @media (width: 1200px) and (height: 800px) {}
  </style>
  <script data-source="googbase_min.js" data-version="4" data-exports-type="googbase" src="googbase_min.js"></script>
  <script data-source="gwd_webcomponents_v1_min.js" data-version="2" data-exports-type="gwd_webcomponents_v1" src="gwd_webcomponents_v1_min.js"></script>
  <script data-source="gwdimage_min.js" data-version="16" data-exports-type="gwd-image" src="gwdimage_min.js"></script>
</head>

<body class="htmlNoPages">
  <script gwd-served-sizes="" type="application/json">["1200x800"]</script>
  <svg data-gwd-shape="rectangle" class="gwd-rect-18cl gwd-svg-2sty"></svg>
  <svg data-gwd-shape="rectangle" class="gwd-rect-18cl gwd-svg-1sby"></svg>
  <p class="gwd-p-ij1g">e-Meal</p>
  
  
  
  
  
  <button class="gwd-button-p0am gwd-button-157n" data-gwd-name="help">Help</button>
  <button class="gwd-button-p0am gwd-button-1yob" data-gwd-name="contact">Contact Us</button>
  <button class="gwd-button-p0am gwd-button-1ux3" data-gwd-name="about">About</button>
  <gwd-image class="gwd-image-1c5l" id="gwd-image_1" source="assets/LOGO-B.PNG.jpeg"></gwd-image>
</body>

</html>