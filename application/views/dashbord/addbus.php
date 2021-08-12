<?php include('dashbord_header.php');?>

<div class="container">
	</br></br>
  <?php echo form_open('admin/bus_info'); ?>
  <?php echo form_hidden('admin_id',$this->session->userdata('admin_id') ); ?>
  <fieldset></br>
    <legend>Add Bus Information</legend>
    
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
           <label for="busname">Bus Name</label>
           <?php echo form_input(['name'=>'bus_name','class'=>'form-control','placeholder'=>'Input Bus Name','value'=>set_value('bus_name')]);?>
          </div>
      </div>
      <div class="col-lg-2"></br>
        	<?php echo form_error('bus_name'); ?>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6">
      	    <div class="form-group">
      			<label for="bus_type">Bus Type</label>
      			<select class="form-control" id="bus_type" name="bus_type">
        			<option>Non AC</option>
        			<option>AC</option>
      			</select>
    		</div>
        </div>
    </div>

    <div class="row">
      <div class="col-lg-6">
          <div class="form-group">
           <label for="seat_no">Number of seat</label>
           <?php echo form_input(['name'=>'seat_no','class'=>'form-control','placeholder'=>'Input number of seat','value'=>set_value('seat_no')]);?>
          </div>
      </div>
      <div class="col-lg-2"></br>
          <?php echo form_error('seat_no'); ?>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6">
          <div class="form-group">
           <label for="source">Source</label>
           <?php echo form_input(['name'=>'source','class'=>'form-control','placeholder'=>'Input Source','value'=>set_value('source')]);?>
          </div>
      </div>
      <div class="col-lg-2"></br>
        	<?php echo form_error('source'); ?>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6">
          <div class="form-group">
           <label for="destination">Destination</label>
           <?php echo form_input(['name'=>'destination','class'=>'form-control','placeholder'=>'Input Destination','value'=>set_value('destination')]);?>
          </div>
      </div>
      <div class="col-lg-2"></br>
        	<?php echo form_error('destination'); ?>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6">
          <div class="form-group">
           <label for="depature">Depature</label>
           <?php echo form_input(['name'=>'depature','class'=>'form-control','placeholder'=>'Input Dipature time','value'=>set_value('depature')]);?>
          </div>
      </div>
      <div class="col-lg-2"></br>
        	<?php echo form_error('depature'); ?>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6">
          <div class="form-group">
           <label for="arrive">Arrive</label>
           <?php echo form_input(['name'=>'arrive','class'=>'form-control','placeholder'=>'Input Arriving Time','value'=>set_value('arrive')]);?>
          </div>
      </div>
      <div class="col-lg-2"></br>
        	<?php echo form_error('arrive'); ?>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6">
          <div class="form-group">
           <label for="fare">Fare</label>
           <?php echo form_input(['name'=>'fare','class'=>'form-control','placeholder'=>'Input seat cost','value'=>set_value('fare')]);?>
          </div>
      </div>
      <div class="col-lg-2"></br>
          <?php echo form_error('fare'); ?>
      </div>
    </div>
    
      <?php echo form_submit(['name'=>'submit','value'=>'Add','class'=>'btn btn-primary']); ?>
    </div>
  </fieldset>
</form>
</div>




<?php include('dashbord_footer.php');?>