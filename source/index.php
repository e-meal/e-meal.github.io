<?php
session_start();

include("conf.php");

$user_name = "";
$password = "";


if(isset($_POST['login'])) {
	$user_name = $_POST['username'];
    $password = $_POST['password'];

	if(!empty($user_name) && !empty($password)){
		
		$query = "select * from Users where email = '$user_name';";
		$result = mysqli_query($con, $query);
		if($result && mysqli_num_rows($result) > 0)
		{
			$user_data = mysqli_fetch_assoc($result);
			if($user_data['password'] === $password){
				$_SESSION['name'] = $user_data['email'];
				$_SESSION['id'] = $user_data['id'];
				$_SESSION['logged'] = true;
				
				$query = "select * from Customers where id = " . $user_data['id'] . ";";
				$result = mysqli_query($con, $query);
				if($result && mysqli_num_rows($result) > 0){
					header("Location: customer_home.php");
					die;
				}
				$query = "select * from Restaurant_Owners where id = " . $user_data['id'] . ";";
				$result = mysqli_query($con, $query);
				if($result && mysqli_num_rows($result) > 0){
					header("Location: owner_home.php");
					die;
				}
				$query = "select * from Delivery_Guys where id = " . $user_data['id'] . ";";
				$result = mysqli_query($con, $query);
				if($result && mysqli_num_rows($result) > 0){
					header("Location: delivery_home.php");
					die;
				}
				
			}else{
				echo "<script type='text/javascript'>alert('Invalid Username or Password.');</script>";
				$_SESSION['logged'] = false;
			}
		}else{
			echo "<script type='text/javascript'>alert('Invalid Username " . $user_name . " or Password.');</script>";
			$_SESSION['logged'] = false;
		}
	}
}

?>
<html><head><meta name="GCD" content="YTk3ODQ3ZWZhN2I4NzZmMzBkNTEwYjJl73d282fa8558827a1f434d90ae4096f9"/>
  <meta charset="utf-8">
  <title>Login</title>
  <meta name="generator" content="Google Web Designer 11.0.2.0415">
  <meta name="template" content="Expandable 3.0.0">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="gwdpage_style.css" rel="stylesheet" data-version="13" data-exports-type="gwd-page">
  <link href="gwdpagedeck_style.css" rel="stylesheet" data-version="14" data-exports-type="gwd-pagedeck">
  <link href="gwdimage_style.css" rel="stylesheet" data-version="16" data-exports-type="gwd-image">
  <style type="text/css" id="gwd-lightbox-style">.gwd-lightbox {
    overflow: hidden;
}</style>
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
.gwd-page-container {
    position: relative;
    width: 100%;
    height: 100%;
}
.gwd-page-content {
    background-color: transparent;
    transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
    -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
    -moz-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
    perspective: 1400px;
    -webkit-perspective: 1400px;
    -moz-perspective: 1400px;
    transform-style: preserve-3d;
    -webkit-transform-style: preserve-3d;
    -moz-transform-style: preserve-3d;
    position: absolute;
}
.gwd-page-wrapper {
    background-color: rgb(255, 255, 255);
    position: absolute;
    transform: translateZ(0px);
    -webkit-transform: translateZ(0px);
    -moz-transform: translateZ(0px);
}
.page1-content {
    width: 550px;
    height: 400px;
}
.gwd-rect-18cl {
    position: absolute;
    left: 0px;
    top: 0px;
    width: 550px;
    height: 67.4px;
    box-sizing: border-box;
    border-width: 1px;
    border-style: solid;
    border-color: rgb(0, 0, 0);
    background-image: none;
    background-color: rgb(0, 0, 0);
}
.gwd-p-ij1g {
    position: absolute;
    color: rgb(255, 255, 255);
    font-family: "Trebuchet MS";
    font-size: 33px;
    transform-origin: 50% 50% 0px;
    -webkit-transform-origin: 50% 50% 0px;
    -moz-transform-origin: 50% 50% 0px;
    left: 6.13%;
    top: 7.22%;
    width: 16.94%;
    height: 5%;
}
.gwd-image-1c5l {
    position: absolute;
    left: 36.88%;
    top: 3.36%;
    width: 25.26%;
    height: 11.95%;
}
.gwd-svg-1sby {
    width: 100%;
    left: 0%;
    height: 13.5%;
	top: 86.5%;
}
.gwd-image-14rg {
    position: absolute;
    left: 46.61%;
    top: 29.34%;
    width: 53.39%;
    height: 57.19%;
}
.gwd-span-finc {
    position: absolute;
    color: rgb(0, 0, 0);
    font-family: "Trebuchet MS";
    transform-origin: 50% 50% 0px;
    -webkit-transform-origin: 50% 50% 0px;
    -moz-transform-origin: 50% 50% 0px;
    font-size: 30px;
    left: 46.63%;
    top: 19.56%;
    width: 53.38%;
    height: 4.89%;
}
.gwd-image-1qut {
    position: absolute;
    left: 5.21%;
    top: 19.53%;
    width: 31.72%;
    height: 16.56%;
}
.gwd-span-1qkj {
    position: absolute;
    font-weight: bold;
    transform-origin: 50% 50% 0px;
    -webkit-transform-origin: 50% 50% 0px;
    -moz-transform-origin: 50% 50% 0px;
    font-size: 25px;
    left: 6.25%;
    top: 37.89%;
    width: 8.38%;
    height: 2%;
}
.gwd-input-1adh {
    position: absolute;
    top: 214px;
    height: 10px;
    width: 100px;
    left: 115px;
}
.gwd-input-1i0j {
    left: 18.44%;
    top: 54.22%;
    width: 22.14%;
    height: 3.23%;
}
.gwd-button-crip {
    position: absolute;
    overflow: visible;
    border-color: rgb(179, 179, 179);
    border-image-source: none;
    border-image-width: 1;
    border-image-outset: 0;
    border-image-repeat: stretch;
    padding: 0px 12px 15px 10px;
    border-width: 1px;
    border-style: hidden;
    border-radius: 10px;
    margin: 0px;
    left: 30.63%;
    top: 62.67%;
    width: 9.74%;
    height: 2.66%;
}
.gwd-div-1vjh {
    width: 100%;
    height: 100%;
}
.gwd-page-gy6u {
    width: 100%;
    height: 100%;
}
.gwd-span-tswf {
    font-size: 18px;
}
.gwd-input-zul2 {
    left: 18.44%;
    top: 45.78%;
    width: 22.14%;
    height: 3.22%;
}
.gwd-span-1ucn {
    position: absolute;
    transform-origin: 50% 50% 0px;
    -webkit-transform-origin: 50% 50% 0px;
    -moz-transform-origin: 50% 50% 0px;
    font-size: 25px;
    left: 5.19%;
    top: 75%;
    width: 15.87%;
    height: 3%;
}
.gwd-svg-2sty {
    top: 0%;
    width: 100%;
    height: 15.63%;
    left: 0%;
}
.gwd-span-17ym {
    position: absolute;
    font-family: "Trebuchet MS";
    transform-origin: 50% 50% 0px;
    -webkit-transform-origin: 50% 50% 0px;
    -moz-transform-origin: 50% 50% 0px;
    left: 100px;
    width: 135px;
    height: 28px;
    font-size: 25px;
    top: 390px;
}
.gwd-span-4x3i {
    width: 8.44%;
    height: 3.11%;
    left: 6.27%;
    top: 54.75%;
}
.gwd-span-19jq {
    width: 8.44%;
    height: 3.11%;
    left: 6.38%;
    top: 45.78%;
}

.gwd-button-16q2 {
    left: 22.32%;
    height: 3%;
    transform-origin: 50% 50% 0px;
    -webkit-transform-origin: 50% 50% 0px;
    -moz-transform-origin: 50% 50% 0px;
    width: 9%;
    top: 76%;
}
.gwd-span-1u0q {
    font-size: 16px;
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
      top: 90.53%;
    }
    .gwd-button-157n {
      left: 88.27%;
      top: 86.55%;
    }
    .gwd-button-1yob {
      left: 88.27%;
      top: 94.58%;
      text-align: left;
      width: 11%;
    }

@media (min-width: 1527px) and (max-width: 1533px) and (min-height: 797px) and (max-height: 803px) {}</style>
  <link href="https://fonts.googleapis.com/css?family=Roboto:regular" rel="stylesheet" type="text/css">
  <script data-source="googbase_min.js" data-version="4" data-exports-type="googbase" src="googbase_min.js"></script>
  <script data-source="gwd_webcomponents_v1_min.js" data-version="2" data-exports-type="gwd_webcomponents_v1" src="gwd_webcomponents_v1_min.js"></script>
  <script data-source="gwdpage_min.js" data-version="13" data-exports-type="gwd-page" src="gwdpage_min.js"></script>
  <script data-source="gwdpagedeck_min.js" data-version="14" data-exports-type="gwd-pagedeck" src="gwdpagedeck_min.js"></script>
  <script data-source="gwdimage_min.js" data-version="16" data-exports-type="gwd-image" src="gwdimage_min.js"></script>
</head>

<body class="document-body">
  <script gwd-served-sizes="" type="application/json">["1530x800"]</script>
  <gwd-pagedeck class="gwd-page-container" id="pagedeck">
    <gwd-page id="page1" class="gwd-page-wrapper page1-content gwd-lightbox gwd-page-gy6u" data-gwd-width="100%" data-gwd-height="100%">
      <div class="gwd-page-content page1-content gwd-div-1vjh">
        <svg data-gwd-shape="rectangle" class="gwd-rect-18cl gwd-svg-2sty"></svg>
        <svg data-gwd-shape="rectangle" class="gwd-rect-18cl gwd-svg-1sby"></svg>
        <p class="gwd-p-ij1g">e-Meal</p>
        <gwd-image class="gwd-image-1c5l" id="gwd-image_1" source="assets/LOGO-B.PNG.jpeg"></gwd-image>
        <gwd-image class="gwd-image-14rg" id="gwd-image_2" source="Background.PNG"></gwd-image><span class="gwd-span-finc">The only thing we're serious about is food.</span>
        <gwd-image class="gwd-image-1qut" id="gwd-image_3" source="assets/LOGO.png"></gwd-image><span class="gwd-span-1qkj">Log-In</span>
        <form action="" method="POST">
			<input type="text" name="username" required="required" class="gwd-input-1adh gwd-input-zul2">
			<input type="text" name="password" required="required" class="gwd-input-1adh gwd-input-1i0j">
			<input type="submit" name="login" value="Login" class="gwd-button-crip"><br>
		</form>
		<span class="gwd-span-17ym gwd-span-19jq">Username</span><span class="gwd-span-17ym gwd-span-4x3i">Password</span>
		
			<button value="Sign Up" class="gwd-button-crip gwd-button-16q2"> <a style="text-decoration:none; color: black;" target="_blank" href="customer_home.php"> Sign Up</a></button>
			<span class="gwd-span-1ucn">Don't have an account?</span>
		
			<button class="gwd-button-p0am gwd-button-157n" data-gwd-name="help">Help</button>
			<button class="gwd-button-p0am gwd-button-1yob" data-gwd-name="contact">Contact Us</button>
			<button class="gwd-button-p0am gwd-button-1ux3" data-gwd-name="about">About</button>
	  </div>
    </gwd-page>
  </gwd-pagedeck>
  <script type="text/javascript" id="gwd-init-code">
    (function() {
      document.body.style.opacity = "0";
      var pageDeck = document.getElementById('pagedeck');
      /**
       * Handles the DOMContentLoaded event. The DOMContentLoaded event is
       * fired when the document has been completely loaded and parsed.
       */

      function handleDomContentLoaded(event) {}

      /**
       * Handles the WebComponentsReady event. This event is fired when all
       * custom elements have been registered and upgraded.
       */
      function handleWebComponentsReady(event) {
        document.body.style.opacity = "";
        setTimeout(function() {
          pageDeck.goToPage(pageDeck.getDefaultPage().id);
        }, 0);
      }

      window.addEventListener('DOMContentLoaded',
        handleDomContentLoaded, false);
      window.addEventListener('WebComponentsReady',
        handleWebComponentsReady, false);
    })();
  </script>


</body></html>
