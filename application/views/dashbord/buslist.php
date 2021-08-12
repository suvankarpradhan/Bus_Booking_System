<?php include('dashbord_header.php');?>

<div class="container">
	<br>
		<legend>Your Bus List 
			<a href="<?=base_url('admin/dashbord') ?>" class="btn btn-warning" role="button" style="float:right; ">Back</a>
			<a href="<?=base_url('admin/add_bus') ?>" class="btn btn-success" role="button" style="float:right; ">Add Bus</a>
		</legend>
	</br>
    <?php if($feedback = $this->session->flashdata('feedback')): 
    	$feedback_class = $this->session->flashdata('feedback_class');
    	?>
    <div class="row">
      <div class="col-lg-6">
        <div class="alert alert-dismissible <?=$feedback_class?>">
          <?=$feedback ?>
        </div>
      </div>
    </div>
  	<?php endif; ?>

	<table class="table">
		<thead>
			<th>Bus Name</th>
			<th>Bus Type</th>
			<th>Seat No.</th>
			<th>Source</th>
			<th>Destination</th>
			<th>Depature</th>
			<th>Arrive</th>
			<th>Fare</th>
			<th>Action</th>			
		</thead>
		<tbody>
			<?php if( count($buslisting) ): ?>
				<?php foreach($buslisting as $buslist): ?>
				<tr>
					<td> <?= $buslist->bus_name ?> </td>
					<td> <?= $buslist->bus_type ?> </td>
					<td> <?= $buslist->seat_no ?></td>
					<td> <?= $buslist->source ?> </td>
					<td> <?= $buslist->destination ?> </td>
					<td> <?= $buslist->depature ?> </td>
					<td> <?= $buslist->arrive ?> </td>
					<td> <?= $buslist->fare ?> </td>
					<td>
						<div class="row">
							<div class="col-lg-3">
								<?= anchor("admin/edit_bus/{$buslist->bus_id}",'Edit',['class'=>'btn btn-info']); ?>
							</div>
							<div class="col-lg-3">
								<?=
								form_open('admin/delete_bus'),
								form_hidden('bus_id',$buslist->bus_id),
								form_submit(['name'=>'submit','value'=>'Delete','class'=>'btn btn-danger']),
								form_close();
								?>
							</div>
						</div>
					</td>	
				</tr>
				<?php endforeach; ?>
			<?php else: ?>
				<tr>
					<td colspan="7">
						No Records Found.
					</td>
				</tr>
			<?php endif; ?>

		</tbody>
	</table>
</div>
<?php include('dashbord_footer.php');?>