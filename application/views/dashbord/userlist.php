<?php include('dashbord_header.php');?>

<div class="container">
	<br>
		<legend>All user List
			<a href="<?=base_url('admin/dashbord') ?>" class="btn btn-warning" role="button" style="float:right; ">Back</a>
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
			<th>User Id</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Phone</th>
			<th>Email</th>			
		</thead>
		<tbody>
			<?php if( count($userlisting) ): ?>
				<?php foreach($userlisting as $userlist): ?>
				<tr>
					<td> <?= $userlist->user_id ?> </td>
					<td> <?= $userlist->f_name ?> </td>
					<td> <?= $userlist->l_name ?> </td>
					<td> <?= $userlist->phone ?> </td>
					<td> <?= $userlist->email ?> </td>
					<td>
						<div class="row">
							<div class="col-lg-3">
								<?=
								form_open('admin/delete_user'),
								form_hidden('user_id',$userlist->user_id),
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