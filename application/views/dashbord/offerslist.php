<?php include('dashbord_header.php');?>

<div class="container">
  <br>
    <legend>Your offers List 
      <a href="<?=base_url('admin/dashbord') ?>" class="btn btn-warning" role="button" style="float:right; ">Back</a>
      <a href="<?=base_url('admin/add_offers') ?>" class="btn btn-success" role="button" style="float:right; ">Add offers</a>
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

  <table class="table table-bordered table-light">
    <thead>
      <th>Sl. No.</th>
      <th>offers</th>
      <th>Action</th>   
    </thead>
    <tbody>
      <?php if( count($offerslisting) ): ?>
        <?php foreach($offerslisting as $offerslist): ?>
        <tr>
          <td> <?= $offerslist->offers_id ?> </td>
          <td> <?= $offerslist->offers ?> </td>
          <td>
            <div class="row">
              <div class="col-lg-3">
                <?= anchor("admin/edit_offers/{$offerslist->offers_id}",'Edit',['class'=>'btn btn-info']); ?>
              </div>
          </td>
          <td>
              <div class="col-lg-3">
                <?=
                form_open('admin/delete_offers'),
                form_hidden('offers_id',$offerslist->offers_id),
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