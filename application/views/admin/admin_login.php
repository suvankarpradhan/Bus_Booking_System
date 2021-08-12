<?php include('admin_header.php');?>

<div class="container">
	</br></br>
  <?php echo form_open('Login/admin_login'); ?>
  <fieldset></br>
    <legend>Admin Login</legend>
    
    <?php if($error = $this->session->flashdata('login_failed')): ?>
    <div class="row">
      <div class="col-lg-6">
        <div class="alert alert-dismissible alert-danger">
          <?=$error ?>
        </div>
      </div>
    </div>
  <?php endif; ?>
  
    <div class="row">
      <div class="col-lg-6">
          <div class="form-group">
           <label for="UserName">User Name</label>
           <?php echo form_input(['name'=>'username','class'=>'form-control','placeholder'=>'User Name','value'=>set_value('username')]);?>
          </div>
      </div>
      <div class="col-lg-2"></br>
        <?php echo form_error('username'); ?>
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
    </br>
    <div class="form-group">
      <a href="<?=base_url('Login') ?>" class="btn btn-secondary" role="button">Reset</a>
      <?php echo form_submit(['name'=>'submit','value'=>'Login','class'=>'btn btn-primary']); ?>
    </div>
  </fieldset>
</form>
</div>

<?php include('admin_footer.php');?>