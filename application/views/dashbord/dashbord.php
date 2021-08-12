<?php include('dashbord_header1.php');?>
<div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-12 col-10 d-block m-auto">
        <div class="card text-white bg-danger mb-3" style="max-width: 20rem;">
          <div class="card-body">
            <table>
              <tr>
                <td><i class="fa fa-bus" aria-hidden="true" style="font-size:68px"></i></td>
                <td><h3>Bus Control Section</h3></td>
              </tr>
            </table>
            <a href="<?=base_url('admin/buslist') ?>" class="card-link pull-right"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-sm-12 col-10 d-block m-auto">
        <div class="card text-white bg-info mb-3" style="max-width: 20rem;">
          <div class="card-body">
            <table>
              <tr>
                <td><i class="fa fa-user" aria-hidden="true" style="font-size:68px"></i></td>
                <td><h3>User Control Section</h3></td>
              </tr>
            </table>
            <a href="<?=base_url('admin/userlist') ?>" class="card-link pull-right"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-sm-12 col-10 d-block m-auto">
        <div class="card text-white bg-secondary mb-3" style="max-width: 20rem;">
          <div class="card-body">
            <table>
              <tr>
                <td><i class="fa fa-ticket" aria-hidden="true" style="font-size:68px"></i></td>
                <td><h3>Ticket Details</h3></td>
              </tr>
            </table>
            <a href="<?=base_url('admin/ticket_details') ?>" class="card-link pull-right"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-12 col-10 d-block m-auto">
        <div class="card text-white bg-success mb-3" style="max-width: 20rem;">
          <div class="card-body">
            <table>
              <tr>
                <td><i class="fa fa-calculator" aria-hidden="true" style="font-size:68px"></i></td>
                <td><h3>Cost Estimation</h3></td>
              </tr>
            </table>
            <a href="<?=base_url('admin/cost_estimation') ?>" class="card-link pull-right"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-sm-12 col-10 d-block m-auto">
        <div class="card text-white bg-warning mb-3" style="max-width: 20rem;">
          <div class="card-body">
            <table>
              <tr>
                <td><i class="fa fa-bell" aria-hidden="true" style="font-size:68px"></i></td>
                <td><h3>Notification Control</h3></td>
              </tr>
            </table>
            <a href="<?=base_url('admin/notification_list') ?>" class="card-link pull-right"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-sm-12 col-10 d-block m-auto">
        <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
          <div class="card-body">
            <table>
              <tr>
                <td><i class="fa fa-gift" aria-hidden="true" style="font-size:68px"></i></td>
                <td><h3>Offers Control</h3></td>
              </tr>
            </table>
            <a href="<?=base_url('admin/offers_list') ?>" class="card-link pull-right"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>
    </div>

  </div>

<?php include('dashbord_footer.php');?>