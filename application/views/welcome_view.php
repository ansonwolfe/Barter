<div class="content">
  <h2>Welcome Back, <?php echo $this->session->userdata('user_name'); ?>!</h2>
  <p>This section represents the area that only logged in members can access.</p>
<?php 
	echo $this->session->userdata('user_first_name');

	echo "<pre>";  
	var_dump($this->session->userdata);
	echo "</pre>" ?>
  <h4>I suck!</h4>
</div><!--<div class="content">-->