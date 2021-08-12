<?php include('userdetail_header.php');?> 

<div class="container">
	</br></br>
  <legend>Booking is on the way <a href="<?=base_url('user/userpage') ?>" class="btn btn-outline-warning" role="button" style="float:right;">Back</a></legend>
  </br>
 	
  <label><strong>Your select bus is : </strong><?= $selectbus->bus_name ?></label></br>
  <label><strong>Source : </strong><?= $selectbus->source ?></label>&nbsp &nbsp &nbsp &nbsp
  <label><strong>Destination : </strong><?= $selectbus->destination?></label></br>
  <label><strong>Fare/Ticket : </strong><?= $selectbus->fare?></label></br></br>
  </br>
  <label><strong>Available Seat : </strong><?= $available['available_seat'] ?>
          &nbsp&nbsp
          <strong> on the date : </strong><?= $available['date'] ?>
  </label></br></br>

</br></br>
  <?php echo form_open('user/ticket_detail',['class'=>'form-inline']); ?>
  <?php echo form_hidden('user_id',$this->session->userdata('user_id') ); ?>
      
  		<label for="num_of_seat" class="mr-sm-2"><strong>Enter Number of Seat :</strong></label>
  		<input type="number" class="form-control mb-2 mr-sm-2" min="1" max="<?= $available['available_seat'] ?>" name="num_of_seat" value="1">
      <input type="hidden" name="bus_id" value="<?= $selectbus->bus_id?>">
      <input type="hidden" name="date" value="<?= $available['date']?>">
      <input type="hidden" name="fare" value="<?= $selectbus->fare?>">
      <?php echo form_submit(['name'=>'submit','value'=>'Submit','class'=>'btn btn-success mb-2']); ?>
   </form>
</div>


<?php include('userdetail_footer.php');?>