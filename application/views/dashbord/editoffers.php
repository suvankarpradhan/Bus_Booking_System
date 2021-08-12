<?php include('dashbord_header.php');?>

<div class="container">
  </br></br>
  <?php echo form_open('admin/update_offers', ['class'=>'form-horizontal']); 
      echo form_hidden('offers_id',$select_offers->offers_id);
  ?>
  <fieldset></br>
    <legend>Edit offers Information</legend>
    
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
           <label for="Offers">Write a offers</label>
           <?php echo form_input(['name'=>'offers','class'=>'form-control','placeholder'=>'Input Your offers','value'=>set_value('offers',$select_offers->offers)]);?>
          </div>
      </div>
      <div class="col-lg-2"></br>
          <?php echo form_error('offers'); ?>
      </div>
    </div>
  
      <?php echo form_submit(['name'=>'submit','value'=>'Change','class'=>'btn btn-primary']); ?>
      <a href="<?=base_url('admin/offers_list') ?>" class="btn btn-warning" role="button">Back</a>
    </div>
    </div>
  </fieldset>
</form>
</div>

<?php include('dashbord_footer.php');?>