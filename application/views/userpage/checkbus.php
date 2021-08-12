<?php include('userdetail_header.php');?> 

<div class="container">
  </br></br>
  <legend>Booking is on the way <a href="<?=base_url('user/userpage') ?>" class="btn btn-outline-warning" role="button" style="float:right;">Back</a></legend>
	</br>
 	
  <label><strong>Your select bus is : </strong><?= $selectbus->bus_name ?></label></br>
  <label><strong>Source : </strong><?= $selectbus->source ?></label>&nbsp &nbsp &nbsp &nbsp
  <label><strong>Destination : </strong><?= $selectbus->destination?></label></br>
  <label><strong>Fare/Ticket : </strong><?= $selectbus->fare?></label></br></br>

</br></br>
  <?php echo form_open('user/final_book',['class'=>'form-inline']); ?>
  		<label for="date" class="lead">Journey date :</label>&nbsp &nbsp
  		<input type="date" class="form-control mb-2 mr-sm-2" name="date" value= "<?php echo date('Y-m-d')?>" min= "<?php echo date('Y-m-d')?>" max= "<?php echo date('Y-12-31')?>" required="required">
  		<input type="hidden" name="bus_id" value="<?= $selectbus->bus_id?>">
      <input type="hidden" name="seat_no" value="<?= $selectbus->seat_no?>">
  		<?php echo form_submit(['name'=>'submit','value'=>'Check availability','class'=>'btn btn-success mb-2']); ?>&nbsp&nbsp
   </form>
   
</div>


<?php include('userdetail_footer.php');?>