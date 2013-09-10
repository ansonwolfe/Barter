
<!-- // echo $this->session->userdata('user_id');
// 	echo "<pre>";  
// 	var_dump($this->session->userdata);
// 	echo "</pre>"  -->
	<div class="span5 well">
		<div class="row">
			<div class="span1">
				<a href="http://critterapp.pagodabox.com/others/admin" class="thumbnail"><img src="http://critterapp.pagodabox.com/img/user.jpg" alt=""></a>
			</div>
			<div class="span3">
				<h5>Welcome <?php 
					echo $this->session->userdata('user_first_name'); ?></h5>
	          	<p><strong><?php 
								echo $this->session->userdata('user_first_name'). " " .
									 $this->session->userdata('user_last_name'); ?>
					</strong></p>
	            <p><strong>Location: </strong><?php echo $this->session->userdata('user_location'); ?></p>
				<span class=" badge badge-warning">8 messages</span>
<!-- 				<span class=" badge badge-info">15 followers</span> -->
				<p><strong>About Me:</strong> <br />
					<?php		echo $this->session->userdata('user_profile'); ?></p>
			</div>
		</div>

		<div>
			<?php 
				$hidden = array('user_id' => $this->session->userdata('user_id'),
								'status_id' => 1);

				echo form_open('posting/add_listing','', $hidden);
				
					$style1 = array('name' => 'seeking',
              					   'id' => 'seeking',
								   'class' => 'input-xlarge span4',
								   'row' => '5');

					$style2 = array('name' => 'offer',
              					   'id' => 'offer',
								   'class' => 'input-xlarge span4',
								   'row' => '3');

				echo "<label><strong>I'm looking for:</strong></label><br>";
				echo "<label><strong>Title</strong></label>" . form_input('title') . "<p>";
				echo form_textarea($style1) . "<p>";
				echo "<label><strong>I will barter for:</strong></label><br>";
				echo form_textarea($style2);
				// echo form_upload();

					$btn = 'class = "btn btn-primary pull-right"';
				echo form_submit('submit_post', 'Submit', $btn);
				echo form_close();
			?>	
			<!-- image upload -->
<!--<?php echo $error;?> -->
<?php echo form_open_multipart('upload/do_upload');?>

<input type="file" name="userfile" size="20" />

<br /><br />

<input type="submit" value="upload" />

</form>

		<!-- 	<form action="<?php echo base_url(); ?>posting/add_listing" method="post">
				<label><strong>I'm looking for:</strong></label>
				<input type="text" id="title" placeholder="Short title">
				<textarea name="seeking" id="seeking" class="input-xlarge span4" rows="6"></textarea>
				<label><strong>I will barter for:</strong></label>
				<textarea name="offer" id="offer" class="input-xlarge span4" rows="3"></textarea>
				<button type="submit" class="btn btn-primary pull-right">Post new trade</button>
			</form> -->
		</div>
<!-- reviews -->

		<div class="row">
	      <div class="span4">
	        <h4><strong><a href="#">Title of the Review</a></strong></h4>
	      </div>
	    </div>
	    <div class="row">
	      <div class="span1">
	        <a href="#" class="thumbnail">
	            <img src="http://placehold.it/260x180" alt="">
	        </a>
	        <i class="icon-user"></i>by <a href="#">John</a> 
	        <i class="icon-calendar"></i> 1/1/2013
	      </div>
	      <div class="span4">      
	        <p>
	          Lorem ipsum dolor sit amet, id nec conceptam conclusionemque. Et eam tation option. Utinam salutatus ex eum. Ne mea dicit tibique facilisi, ea mei omittam explicari conclusionemque, ad nobis propriae quaerendum sea.
	        </p>
	        <p><a class="pull-right" href="#">Read more</a></p>
	      </div>
		</div>

	</div>
	<!-- !reviews and left panel -->
	
