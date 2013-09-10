<?php 
// echo $this->session->userdata('user_id');
// 	echo "<pre>";  
// 	var_dump($this->session->userdata);
// 	echo "</pre>" ;
// 	echo $name; ?>

		<div class="span6 well row">
			<h3><strong>My Posts</strong></h3>
			<?php if(isset($user_listings)) : foreach ($user_listings as $listing) :?>
		    
			    <div class="row">
			       <!--  <a href="#" class="thumbnail">
		            <img src="http://placehold.it/260x180" alt="">
		        </a> -->
<!-- 		        <i class="icon-user"></i>by <a href="#">John</a>  -->
		          <div class="span5"> 
		          	<div class="pull-right">     
		          	  <?= anchor("posting/delete/$listing->id", "&times;", array('class' => 'close')) ?>
		          	  <!-- <a class="close" href="#"> &times; </a> -->
<!-- 					  <a id="edit_post_button" href="">  edit &nbsp; </a>        -->
			        </div> 

			          <h4><strong>
			      	    <a href="" class="edits" data-type="text" data-pk="<?= $listing->id ?>" data-url="/posting/edit_title" data-title="title"><?php echo $listing->title; ?></a>
			      	  </strong></h4>
			          <P class="edits" data-type="textarea" data-pk="<?= $listing->id ?>" data-url="/posting/edit_posting" data-title="description"><?php echo $listing->description; ?></P> <br />
					  
					  <h4><strong>In exchange for:</strong></h4>
					  <p class="edits" data-type="textarea" data-pk="<?= $listing->id ?>" data-url="/posting/edit_offer" data-name="offer"><?= $listing->offer; ?></p></br>
			      </div>
			    </div>  	 	  				
			<?php endforeach; ?>
			
			<?php else : ?>
				<h5><strong>I've requested nothing so far.</strong></h5>
			<?php endif; ?>
		</div>



		<div class="span6 well row">
			<h4>You've responded to:</h4>
			<div class="pull-right">
				<a href="">edit</a>
				<a href="">delete</a>
			</div>
	        <h4><strong><a href="#">Title of trade</a></strong></h4>
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
		          <strong>Lorem ipsum dolor sit amet,</strong> id nec conceptam conclusionemque. Et eam tation option. Utinam salutatus ex eum. Ne mea 
		        </p>
		      </div>
			</div>

			<h4><strong><a href="#">Offering:</a></strong></h4>
		    <div class="row">
		      <div class="span1">
		        <a href="#" class="thumbnail">
		            <img src="http://placehold.it/260x180" alt="">
		        </a>
		      </div>
		      <div class="span4">      
		        <p>
		          Lorem ipsum dolor sit amet, id nec conceptam conclusionemque. Et eam tation option. =
		        </p>
		      </div>
			</div>
		</div>	
	</div>
	