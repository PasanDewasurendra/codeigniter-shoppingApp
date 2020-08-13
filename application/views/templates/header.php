<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="<?php echo base_url().'assets/css/styles_product-list.css'?>" >
	<title>Document</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-expand-md navbar-light bg-light">
  <a class="navbar-brand" href="/">
	  <img src="<?php echo base_url().'assets/images/logo.png'?>" width="30" height="30" class="d-inline-block align-top" alt="">
	  BlueSpark</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>about">About</a>
      </li>
		<li class="nav-item ">
			<a class="nav-link" href="<?php echo base_url(); ?>Contact">Contact</a>
		</li>
    </ul>
  </div>
	<ul class="navbar-nav navbar-right">
		<li class="nav-item">
			<a class="nav-link" href="<?php echo base_url(); ?>cart">
				<span class="fa fa-shopping-cart"></span> Cart
				<span class='badge badge-warning' id='lblCartCount'> <?php echo ($this->cart->total_items()>0?$this->cart->total_items(): '')?></span>
			</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="<?php echo base_url(); ?>register">
				<span class="fa fa-user"></span> Sign Up
			</a>
		</li>
	</ul>
</nav>

<div class="container">
