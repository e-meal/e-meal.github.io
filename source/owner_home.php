<?php
session_start();

include("conf.php");

$user_name = "";
$password = "";
$id = 232;
?>
<html><head><meta name="GCD" content="YTk3ODQ3ZWZhN2I4NzZmMzBkNTEwYjJl1c09ccb47ecc9cc39b3785afc31a7579"/>
  <meta charset="utf-8">
  <title>Home</title>
  <meta name="generator" content="Google Web Designer 11.0.2.0415">
  <link href="gwdimage_style.css" rel="stylesheet" data-version="16" data-exports-type="gwd-image">
  <style type="text/css" id="gwd-text-style">p {
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
	}</style>
	  <style type="text/css">html,
	body {
		width: 100%;
		height: 100%;
		margin: 0px;
	}
	body {
		transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
		-webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
		-moz-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
		perspective: 1400px;
		-webkit-perspective: 1400px;
		-moz-perspective: 1400px;
		transform-style: preserve-3d;
		-webkit-transform-style: preserve-3d;
		-moz-transform-style: preserve-3d;
		background-image: none;
		background-color: transparent;
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
		-webkit-transform-origin: 50% 50% 0px;
		-moz-transform-origin: 50% 50% 0px;
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
		height: 13.5%;
		left: 0%;
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
	.gwd-button-esum2 {
		position: absolute;
		opacity: 1;
		background-color: grey;
		color: white;
		overflow: visible;
		border-style: ridge;
		height: 3%;
		width: 9%;
		left: 6.05%;
		top: 41.28%;
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
		left: 53px;
		top: 211px;
		border-radius: 20px;
		text-align: center;
		border-image-source: none;
		border-image-width: 1;
		border-image-outset: 0;
		border-image-repeat: stretch;
		border-color: rgb(255, 255, 255);
		background-image: none;
		background-color: rgb(253, 251, 251);
		border-style: none;
	}
	.gwd-button-ryfn {
		font-weight: bold;
		font-family: "Trebuchet MS";
		left: 6.15%;
		width: 10%;
		transform-origin: 50% 50% 0px;
		-webkit-transform-origin: 50% 50% 0px;
		-moz-transform-origin: 50% 50% 0px;
		height: 2.5%;
		top: 46.63%;
	}
	.gwd-div-1v7x {
		position: absolute;
		background-color: rgb(253, 251, 251);
		left: 6.05%;
		width: 27%;
		top: 50%;
		height: 53%;
	}
	.gwd-p-1n8r {
		background-color: white;
		border-radius: 20px;
		text-align: center;
		position: absolute;
		font-weight: bold;
		font-family: "Trebuchet MS";
		left: 43.27%;
		height: 2.5%;
		width: 8%;
		top: 20%;
	}
	.gwd-div-1cld {
		position: absolute;
		background-color: white;
		overflow: auto;
		width: 44.98%;
		height: 78.48%;
		left: 43.27%;
		top: 24%;
	}
	.gwd-rect-hzke {
		position: absolute;
		box-sizing: border-box;
		border-width: 1px;
		border-style: solid;
		border-color: rgb(0, 0, 0);
		height: 78.36%;
		width: 44.97%;
		left: 43.27%;
		top: 23.94%;
	}
	.gwd-img-p260 {
		position: absolute;
		width: 8%;
		height: 23%;
		top: 70.33%;
		left: 32.03%;
	}
	.gwd-p-1rmt {
		position: absolute;
		transform-origin: 50% 50% 0px;
		-webkit-transform-origin: 50% 50% 0px;
		-moz-transform-origin: 50% 50% 0px;
		font-size: 20px;
		font-family: "Trebuchet MS";
		width: 23%;
		color: rgb(255, 255, 255);
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
		-webkit-transform-origin: 50% 50%;
		-moz-transform-origin: 50% 50%;
	}
	.gwd-p-lezf {
		width: 96%;
		left: 2.07%;
		top: 40.81%;
		height: 14%;
		color: rgb(255, 255, 255);
	}
	.gwd-p-8ire {
		width: 30%;
		left: 2.07%;
		top: 9.72%;
		height: 14%;
		color: rgb(255, 255, 255);
	}
	.gwd-div-adyl {
		position: relative;
		width: 98%;
		height: 31%;
		background-image: none;
		background-color: rgb(125, 0, 0);
		
	}
	.gwd-img-cyr6 {
		position: absolute;
		width: 6%;
		height: 19.55%;
		left: 92.33%;
		top: 75.16%;
	}
	.gwd-button-1f45 {
		position: absolute;
		background-image: none;
		background-color: transparent;
		color: rgb(255, 255, 255);
	}
	.gwd-img-sc12 {
		position: absolute;
		height: 18%;
		width: 5%;
		top: 75.16%;
		left: 93.08%;
	}
	.gwd-div-65h4 {
		border-style: solid;
		border-width: 2px;
		height: 19.2%;
		left: 1%;
		top: 2%;
	}
	.gwd-img-13km {
		width: 5.5%;
		height: 27%;
		left: 68.33%;
		top: 9.8%;
	}
	.gwd-p-avf2 {
		height: 22%;
		left: 77.25%;
		top: 12.47%;
	}
	.gwd-button-e50o {
		background-color: grey;
		color: white;
		left: 70.28%;
		width: 18.84%;
		height: 21.38%;
		top: 65.02%;
	}

	.add-button{
		background-color: grey;
		color: white;
		left: 89.68%;
		width: 9%;
		height: 3.68%;
		top: 99.02%;
		
	}
	.gwd-img-5etu {
		left: 93.08%;
		width: 4%;
		height: 20%;
		top: 64.13%;
	}
	.gwd-p-1ojg {
		width: 65%;
		height: 54%;
	}
	.gwd-div-xvmc {
		background-color: transparent;
		left: 0.74%;
		top: 11%;
	}
	.gwd-p-vdjc {
		color: rgb(0, 0, 0);
		top: 38.3%;
	}
	.gwd-p-1w0h {
		color: rgb(0, 0, 0);
	}
	.gwd-button-vqpv {
		color: rgb(0, 0, 0);
	}
	.gwd-img-1ssu {
		position: absolute;
		left: 93.77%;
		top: 20.36%;
		width: 2.46%;
		height: 3.5%;
	}
	.gwd-span-yexi {
		position: absolute;
		font-family: "Trebuchet MS";
		font-weight: bold;
		color: rgb(0, 0, 0);
		left: 0.92%;
		top: 23%;
		width: 13%;
		height: 4%;
	}
	.gwd-rect-2tyn {
		position: absolute;
		box-sizing: border-box;
		border-width: 1px;
		border-style: solid;
		border-color: rgb(0, 0, 0);
		left: 0%;
		top: 26.4%;
		width: 99%;
		height: 0%;
	}

	.gwd-rect-n0c8 {
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
</style>
  <script data-source="googbase_min.js" data-version="4" data-exports-type="googbase" src="googbase_min.js"></script>
  <script data-source="gwd_webcomponents_v1_min.js" data-version="2" data-exports-type="gwd_webcomponents_v1" src="gwd_webcomponents_v1_min.js"></script>
  <script data-source="gwdimage_min.js" data-version="16" data-exports-type="gwd-image" src="gwdimage_min.js"></script>
</head>

<body class="htmlNoPages">
<div class="back-image"></div>
  <script gwd-served-sizes="" type="application/json">["1280x900"]</script>
  <svg data-gwd-shape="rectangle" class="gwd-rect-18cl gwd-svg-1bis"></svg>
  <p class="gwd-p-ij1g">e-Meal</p>
  <gwd-image class="gwd-image-1c5l" id="gwd-image_1" source="LOGO-B.PNG.jpeg"></gwd-image>
  <svg data-gwd-shape="rectangle" class="gwd-rect-18cl gwd-svg-1sby"></svg>
  <button class="gwd-button-p0am gwd-button-157n" data-gwd-name="help">Help</button>
  <button class="gwd-button-p0am gwd-button-1yob" data-gwd-name="contact">Contact Us</button>
  <button class="gwd-button-p0am gwd-button-1ux3" data-gwd-name="about">About</button>
  <a href="customer_home.php"><button id="button_1" class="gwd-button-esum">Profile</button></a><br>
  <button id="button_1" class="gwd-button-esum2">Maintain Orders<br>
    
  </button>
  <?php 
		echo "<img class=\"gwd-img-8j60\" id=\"image\" src=\"profile_photos/id" . $id . ".jpeg\">";
  ?>
  <p class="gwd-button-1jn1 gwd-button-ryfn">Last Customers</p>
  <div class="gwd-div-1v7x" id="last_orders">
	<svg data-gwd-shape="rectangle" class="gwd-rect-n0c8"></svg>
  </div>
  <p class="gwd-p-1n8r">Meals<br></p>
  <svg data-gwd-shape="rectangle" class="gwd-rect-hzke"></svg>
  <div class="gwd-div-1cld" id="meals">
	<div class="gwd-div-adyl gwd-div-65h4" id="fav_elemtn">
      <img src="assets/financial.png" id="financial" class="gwd-img-p260 gwd-img-13km">
      <p class="gwd-p-1rmt gwd-p-avf2">10.00&nbsp; TL</p>
      <p class="gwd-p-11z5 gwd-p-8ire">Meal Name</p>
      <p class="gwd-p-11z5 gwd-p-lezf gwd-p-1ojg">Ingredients&nbsp;</p>
      <button id="button_2" class="gwd-button-1f45 gwd-button-e50o">Edit</button>
      <img src="assets/exit.png" id="exit" class="gwd-img-sc12 gwd-img-5etu">
    </div>
	<?php
		$query = "select * from Items i, Restaurants r where i.restaurant_id = r.restaurant_id and r.owner_id = 1";
		$result = mysqli_query($con, $query);

        if (!$result) {
            echo "Unsuccesful";
			exit();
        }


        while($rest = mysqli_fetch_array($result)) {
			echo "<div class=\"gwd-div-adyl gwd-div-65h4 gwd-div-xvmc\" id=\"meal_elemnt\">
		<img src=\"assets/financial.png\" id=\"financial_1\" class=\"gwd-img-p260 gwd-img-13km\">
		<p class=\"gwd-p-1rmt gwd-p-avf2 gwd-p-1w0h\">" . $rest['price'] . " TL</p>
		<p class=\"gwd-p-11z5 gwd-p-8ire gwd-p-1w0h\"> " . $rest['name'] . "</p>
		<p class=\"gwd-p-11z5 gwd-p-lezf gwd-p-1ojg gwd-p-vdjc\">" . $rest['description'] . "</p>
		<button id=\"button_3\" class=\"gwd-button-1f45 gwd-button-e50o gwd-button-vqpv\">Edit</button>
		<img src=\"assets/exit.png\" id=\"exit_1\" class=\"gwd-img-sc12 gwd-img-5etu\">
		</div>";
        }
	?>
    
    <span class="gwd-span-yexi">Meals</span>
	<svg data-gwd-shape="rectangle" class="gwd-rect-2tyn"></svg>
</div>
	<a href="index.php"><img class="gwd-img-1ssu" src="assets/log-out.jpeg"></a>
	<a href="home.php"><button id="add" class="gwd-button-1f45 add-button">Add Meal</button></a>

</body></html>
