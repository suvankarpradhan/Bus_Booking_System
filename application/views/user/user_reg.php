<?php include('user_header.php');?>

<div class="container">
	</br></br>
  <?php echo form_open('userlogin/user_info'); ?>
  <fieldset>
    <legend>New User Registration</legend>
      </br>
      <div class="row">
        <div class="col-lg-6">
          <div class="form-group">
            <label for="First Name">First Name</label>
              <?php echo form_input(['name'=>'f_name','class'=>'form-control','placeholder'=>'Enter First Name','value'=>set_value('f_name')]);?>
          </div>
        </div>
        <div class="col-lg-2"></br>
          <?php echo form_error('f_name'); ?>
      </div>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <div class="form-group">
            <label for="Last Name">Last Name</label>
              <?php echo form_input(['name'=>'l_name','class'=>'form-control','placeholder'=>'Enter Last Name','value'=>set_value('l_name')]);?>
          </div>
        </div>
        <div class="col-lg-2"></br>
          <?php echo form_error('l_name'); ?>
      </div>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <div class="form-group">
            <label for="Phone Number">Phone Number</label>
              <?php echo form_input(['name'=>'phone','class'=>'form-control','placeholder'=>'Enter Phone Number','value'=>set_value('phone')]);?>
          </div>
        </div>
        <div class="col-lg-2"></br>
          <?php echo form_error('phone'); ?>
      </div>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <div class="form-group">
            <label for="Email address">Email address</label>
            <?php echo form_input(['name'=>'email','class'=>'form-control','placeholder'=>'Enter Email Address','aria-describedby'=>'emailHelp','value'=>set_value('email')]);?>
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
        </div>
        <div class="col-lg-2"></br>
          <?php echo form_error('email'); ?>
      </div>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <div class="form-group">
            <label for="Password">Password</label>
            <?php echo form_password(['name'=>'password','class'=>'form-control','placeholder'=>'Password']);?>
            </div>
        </div>
        <div class="col-lg-2"></br>
          <?php echo form_error('password'); ?>
      </div>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <div class="form-group">
            <label for="Password1"> Confirm Password</label>
            <?php echo form_password(['name'=>'password1','class'=>'form-control','placeholder'=>'Confirm Password']);?>
            </div>
        </div>
      </div>

      </br>

      <div class="form-group">
        <a href="<?=base_url('homecontrol/user_reg') ?>" class="btn btn-secondary" role="button">Reset</a>
        <?php echo form_submit(['name'=>'submit','value'=>'Submit','class'=>'btn btn-primary']); ?>
      </div>
  </fieldset>
</form>
</div>

<?php include('user_footer.php');?>