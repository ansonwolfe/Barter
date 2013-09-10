
<div class="row">
<!-- begin registration form -->
  <div class="col-lg-5 col-lg-offset-1">
    <h2>Create new account</h2>
     <?php echo validation_errors('<p class="error">'); ?>
     <?php 
          $attributes = array('class' => 'form-horizontal'); 
           echo form_open("user/registration", $attributes); 
     ?>
        <div class="form-group">
          <label for="user_name" class="col-lg-2 control-label">User Name:</label>
          <div class="col-lg-6">
            <input type="text" id="user_name" class="form-control" name="user_name" value="<?php echo set_value('user_name'); ?>" />
          </div>  
        </div>
        <div class="form-group">
          <label for="first_name" class="col-lg-2 control-label">First Name*</label>
          <div class="col-lg-6">
            <input type="text" id="first_name"  class="form-control" name="first_name" />      
          </div>    
        </div>
        <div class="form-group">
          <label  class="col-lg-2 control-label">Last Name*</label>
          <div class="col-lg-6">
            <input type="text" id="last_name"  class="form-control" name="last_name" />          
          </div>  
        </div>
        <div class="form-group">
          <label  class="col-lg-2 control-label" for="email_address"> Email:</label>
          <div class="col-lg-6">
            <input type="text" id="email_address"  class="form-control" name="email_address" value="<?php echo set_value('email_address'); ?>" />
          </div>  
        </div>    
        <div class="form-group">
          <label for="password" class="col-lg-2 control-label">Password:</label>
          <div class="col-lg-6">
            <input type="password" id="password"  class="form-control" name="password" value="<?php echo set_value('password'); ?>" />
          </div>
        </div>
        <div class="form-group">
          <label for="con_password" class="col-lg-2 control-label">Confirm Password:</label>
          <div class="col-lg-6">            
            <input type="password" id="con_password" class="form-control" name="con_password" value="<?php echo set_value('con_password'); ?>" />
          </div>
        </div>
        <div class="col-lg-offset-4">
          <button type="submit" class="btn btn-success">Sign Up</button>
          <button type="button" class="btn">Help</button>
        </div>
        <?php echo form_close(); ?>
  </div><!--<div class="reg_form">-->

  <div class="col-lg-5">
    <h2>Already have an account?</h2>
    <h4><a href="login">Login Here.</a></h4>
<!--     <?php 
        // if (isset($data['login_error'])) {
        // echo $data['login_error'];
 //   }
    ?> -->
<!--     <?php 
          $attributes = array('class' => 'form-horizontal'); 
           echo form_open("user/login_validation", $attributes); 

           echo validation_errors();
     ?>
      <div class="form-group">
        <label for="email" class="col-lg-2 control-label">Email:</label>
        <div class="col-lg-6">            
          <input type="text" id="email" class="form-control" name="email"/>
        </div>
      </div>
      <div class="form-group">
          <label for="password" class="col-lg-2 control-label">Password:</label>
          <div class="col-lg-6">            
            <input type="password" id="password" class="form-control" name="password"/>
        </div>
      </div>
        <input type="submit" class=" col-lg-offset-6 btn btn-primary" value="Sign in" />
     <?php echo form_close(); ?> -->
  </div><!--<div class="signin_form">-->
</div> 