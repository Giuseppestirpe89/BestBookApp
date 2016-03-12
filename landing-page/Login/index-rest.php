<?php 
session_start(); 
include('../../config2.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Sign in!</title>
        <meta name="description" content="Custom Login Form Styling with CSS3" />
        <meta name="keywords" content="css3, login, form, custom, input, submit, button, html5, placeholder" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<script src="js/modernizr.custom.63321.js"></script>
		<!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
		<style>
			@import url(http://fonts.googleapis.com/css?family=Ubuntu:400,700);
			body {
				background: #563c55 url(images/blurred.jpg) no-repeat center top;
				-webkit-background-size: cover;
				-moz-background-size: cover;
				background-size: cover;
			}
			.container > header h1,
			.container > header h2 {
				color: #fff;
				text-shadow: 0 1px 1px rgba(0,0,0,0.7);
			}
		</style>
    </head>
    <body>
        <div class="container">
		
			
			
			<header>
			
				<h1>Restuarant<strong>Login</strong>
				
				
				<nav class="codrops-demos">
					
					
					<a class="current-demo" href="index-rest.php">Sign in!</a>
					<a href="index-rest-new.php">Need an account?</a>
					
				</nav>

				
				
			</header>
			
			<section class="main">
				<div class="form-3">
				 <?php
        
        if(isset($_SESSION['user'])){
            echo'
            <p>hello '.$_SESSION['user'].' you are still logged in'.'
            <p>go to the <a href="../../welcome.php">welcome page</a></p>
            <p>or<a href="../../logout.php">logout</a></p>';
        }        
        else{
            echo"
            
            
            <form action='../../welcome.php' method='post' >
                     <label for='login'>Username</label><input type='text' id='nameCheck' name='username'/>
                    <br>
                    <label for='password'>Password</label><input type='password' id='password' name='password'/>
                    <br>
                    <input type='submit' value='Login' onClick='clicked()'/>
            </form>
           
           
          
            ";
        }
        ?>       
				</div>
			</section>
			
        </div>
        
        <nav class="codrops-demos">
					
				<a href="../../landing-page/index.html">Back to landing</a>
				
					
				</nav>
    </body>
</html>

