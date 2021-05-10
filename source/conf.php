<?php

if(!defined('dhost')) define('dhost', "dijkstra.cs.bilkent.edu.tr");
if(!defined('duser')) define('duser', "f.demir");
if(!defined('dpass')) define('dpass', "Rkxv2bu3");
if(!defined('dname')) define('dname', "f_demir");

$con = mysqli_connect(dhost, duser, dpass, dname);

if(!$con){
	die("Failed to connect");
}
