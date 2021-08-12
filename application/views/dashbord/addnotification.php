<?php include('dashbord_header.php');?>

<div class="container">
	</br></br>
  <?php echo form_open('admin/notification_info'); ?>
  <?php echo form_hidden('admin_id',$this->session->userdata('admin_id') ); ?>
  <fieldset></br>
    <legend>Add a Notification</legend>
    
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
           <label for="Notification">Write a Notification</label>
           <?php echo form_input(['name'=>'notification','class'=>'form-control','placeholder'=>'Input Your Notification','value'=>set_value('notification')]);?>
          </div>
      </div>
      <div class="col-lg-2"></br>
        	<?php echo form_error('notification'); ?>
      </div>
    </div>

      <?php echo form_submit(['name'=>'submit','value'=>'Add','class'=>'btn btn-primary']); ?>
      <a href="<?=base_url('admin/dashbord') ?>" class="btn btn-warning" role="button">Back</a>
    </div>
  </fieldset>
</form>
</div>




<?php include('dashbord_footer.php');?>