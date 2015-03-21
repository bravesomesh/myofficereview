<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Greenfield Template</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>">
		<link href="<?php echo base_url('assets/css/login_signup.css'); ?>" rel="stylesheet">
		<link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
		<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css">
		<script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
	</head>
	<body>
		<nav class="navbar navbar-default navbar-fixed-top">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <a class="navbar-brand" href="#">Logo</a>
	        </div>
	        <div id="navbar" class="navbar-collapse collapse">
	          <!-- <ul class="nav navbar-nav">
	            <li class="active"><a href="#">Home</a></li>
	            <li><a href="#about">About</a></li>
	            <li><a href="#contact">Contact</a></li>
	            <li class="dropdown">
	              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
	              <ul class="dropdown-menu" role="menu">
	                <li><a href="#">Action</a></li>
	                <li><a href="#">Another action</a></li>
	                <li><a href="#">Something else here</a></li>
	                <li class="divider"></li>
	                <li class="dropdown-header">Nav header</li>
	                <li><a href="#">Separated link</a></li>
	                <li><a href="#">One more separated link</a></li>
	              </ul>
	            </li>
	          </ul> -->
	          <ul class="nav navbar-nav navbar-right">
<!-- 	            <li><a href="../navbar/">Default</a></li>
	            <li><a href="../navbar-static-top/">Static top</a></li> -->
	            <li>
	            	<a href= "javascript:void(0)" onclick = "document.getElementById('card').style.display='block';document.getElementById('fade').style.display='block'">Signup</a>
	            </li>
	            <li class="active">
	            	<a href= "javascript:void(0)" onclick = "document.getElementById('card').style.display='block';document.getElementById('fade').style.display='block'">Login<span class="sr-only">(current)</span></a>
	            </li>
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </nav>
	    <div id="card" class="white_content">
		  <a style="float:right;padding-right:2%" href = "javascript:void(0)" onclick = "document.getElementById('card').style.display='none';document.getElementById('fade').style.display='none'">Close</a>
		  <h2>Sign-up  </h2>
		  <input type="text" id="name" name="name" placeholder="Name.."/>
		  <input type="text" id="mail" name="mail" placeholder="Mail.." />
		  <input type="text" id="password" name="password"  placeholder="Password.." />
		  <!-- Agree with the term of services -->
	<!-- 	  <input type="checkbox" id="tos" name="tos" />
		  <label for="tos">Accept the <a href="">Terms of service</a></label>
	 -->
		  <input type="submit" id="submit" name="submit"/>
		  <input type="submit" id="submit" name="submit" value=" Facebook"/>
		  <input type="submit" id="submit" name="submit" value=" Linkedin"/>
			<div> Or</div>
		  <div>Already Registered please <a href="#">login</a> here</div>
		</div>
		<div id="fade" class="black_overlay"></div>
