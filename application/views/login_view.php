<div class="row">  
  <div class="col-lg-5 col-lg-offset-4">
    <h2>Login</h2>
<!--     <?php 


        // if (isset($data['login_error'])) {
        //     echo $data['login_error'];
        // }
    ?> -->
    <?php 
          $attributes = array('class' => 'form-horizontal'); 
           echo form_open("user/login", $attributes);

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
     <?php echo form_close(); ?>
  </div><!--<div class="signin_form">-->
</div>