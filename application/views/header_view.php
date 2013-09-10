<!DOCTYPE html>
<html lang="en">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <title><?php echo (isset($title)) ? $title : "Barter | Get things done for Cheap" ?> </title>
	 <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap3.css">
	 <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
	 <!-- <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap-editable.css"> -->
	 <link rel="stylesheet" type="text/css"href="../assets/css/jqueryui-editable.css"/> 
	 <link rel="stylesheet" type="text/css" href="../assets/css/custom.css"><!-- 
	 <link rel="stylesheet" type="text/css" href="../assets/css/style.css" /> -->
	 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	 <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
	 <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
<!--	 <script type="text/javascript" src="../assets/js/bootstrap-editable.js"></script> -->
	 <script src="../assets/js/jqueryui-editable.min.js"></script>
<!-- javascript for edit form -->
	 <script type="text/javascript">

 	$(document).ready(function(){

 		$.fn.editable.defaults.mode = 'inline';

		// $('#username').editable({
  //                          type:  'text',
  //                          pk:    1,
  //                          name:  'username',
  //                          url:   'post.php',  
  //                          title: 'Enter username'
  //                       });

	 	$('.edits').editable();
	});

	// </script>
<!--  !end edit form javascript -->


</head>
<body>
 <div class="container">
	    <div class="header">
	        <ul class="nav nav-pills pull-right">
	          <li class="navbar-btn"><a href="../">Home</a></li>
	          <li class="navbar-btn"><a href="<?php echo base_url(); ?>/static_pages/about">About</a></li>
	          <li class="navbar-btn"><a href="#">Help</a></li>
	          <?php if($this->session->userdata('logged_in') === TRUE) 
	          	echo "<li class='navbar-btn dropdown'>
				    	<a class='dropdown-toggle' data-toggle='dropdown' href='#'>
				        Account<b class='caret'></b>
				      	</a>
				    	<ul class='dropdown-menu'>
				      		<li><a href='". base_url()."user/edit'>Edit Profile</a></li>
	    				  	<li><a href='". base_url()."user/logout'>Log out</a></li>
					    </ul>
					  </li>";

	          		else 
	          			echo "<li class='navbar-btn'><a href='". base_url()."static_pages/login'>Login</a></li>";
	          		
	          ?>				
<!-- 	          	<form action="user/login" method="post" class="navbar-form form-inline">
	          		<div class="col-lg-4">
	          			<input type="text" class="form-control" placeholder="Username">
	          		</div>
					<div class="col-lg-4">
	          			<input type="password" class="form-control" placeholder="Password">
	          		</div> -->	 					  
<!-- 				    <div class="checkbox">
				    	<label><input type="checkbox">Stay</label>
				  	</div> -->
				<!--   	<button type="submit" class="btn btn-default">Sign in</button>
					
				</form> -->
			</ul>
	        <?php if($this->session->userdata('logged_in') === TRUE) 			
	        		echo "<a href='".base_url()."user/landing'><h2 class='text-muted'>Barter!</h2></a>";
	        	  else 
	        	  	echo "<a href='".base_url()."'><h2 class='text-muted'>Barter!</h2></a>";
	        ?>	 
	         


	    </div>
	<hr>
	<!-- !header -->