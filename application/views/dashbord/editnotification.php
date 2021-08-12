<?php include('dashbord_header.php');?>

<div class="container">
	</br></br>
  <?php echo form_open('admin/update_notification', ['class'=>'form-horizontal']); 
      echo form_hidden('notification_id',$select_notification->notification_id);
  ?>
  <fieldset></br>
    <legend>Edit Notification Information</legend>
    
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
           <?php echo form_input(['name'=>'notification','class'=>'form-control','placeholder'=>'Input Your Notification','value'=>set_value('notification',$select_notification->notification)]);?>
          </div>
      </div>
      <div class="col-lg-2"></br>
          <?php echo form_error('notification'); ?>
      </div>
    </div>
  
      <?php echo form_submit(['name'=>'submit','value'=>'Change','class'=>'btn btn-primary']); ?>
      <a href="<?=base_url('admin/notification_list') ?>" class="btn btn-warning" role="button">Back</a>
    </div>
    </div>
  </fieldset>
</form>
</div>

<?php include('dashbord_footer.php');?>