<?php include('userdetail_header.php');?>

<div class="container">
  </br></br>
<?php echo form_open('user/search'); ?>
  <fieldset></br>
    <legend>Enter your source and destination</legend>
    
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
          <label for="source">Source</label>
            <select class="form-control" name ="source">
              <option>Digha</option>
              <option>Haldia</option>
              <option>Howra</option>
              <option>Mukutmonipur</option>
              <option>Kukrahati</option>
              <option>Kolkata</option>
              <option>Anandapur</option>
              <option>Medinipur</option>
              <option>Jhargram</option>
            </select>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <label for="destination">Destination</label>
            <select class="form-control" name = "destination">
              <option>Digha</option>
              <option>Haldia</option>
              <option>Howra</option>
              <option>Mukutmonipur</option>
              <option>Kukrahati</option>
              <option>Kolkata</option>
              <option>Anandapur</option>
              <option>Medinipur</option>
              <option>Jhargram</option>
            </select>
        </div>
      </div>
    </div>
    <div class="form-group">
        <?php echo form_submit(['name'=>'submit','value'=>'Search','class'=>'btn btn-primary']); ?>
      </div>
    
  </fieldset>
  </form>

</div>

<?php include('userdetail_footer.php');?>