<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box">
            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Users</span>
              <span class="info-box-number">
                <?= $userCount ?>
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <!-- fix for small devices only -->
        <div class="clearfix hidden-md-up"></div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-user"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Roles</span>
              <span class="info-box-number"><?= $roleCount ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="clearfix hidden-md-up"></div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-danger elevation-1"><i class="fa fa-tasks"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Permissions</span>
              <span class="info-box-number"><?= $permissionCount ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <div class="clearfix hidden-md-up"></div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-success elevation-1"><i class="fa fa-flag"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Country</span>
              <span class="info-box-number"><?= $countryCount ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <div class="clearfix hidden-md-up"></div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-danger elevation-1"><i class="fa fa-map"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">State</span>
              <span class="info-box-number"><?= $stateCount ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- Main row -->
      <!-- <div class="row">
        <div class="col-md-6">

          <div class="card">
            <div class="card-header border-transparent">
              <h3 class="card-title">Latest Leads</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-body p-0">
              <div class="table-responsive">
                <table class="table m-0">
                  <thead>
                    <tr>
                      <th>Lead ID</th>
                      <th>Name</th>
                      <th>Phone</th>
                      <th>Email</th>
                      <th>State</th>
                      <th>Date</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    if (!empty($latestLeads)) {
                      foreach ($latestLeads as $record) {
                    ?>
                        <tr>
                          <td><?php echo $record->id ?></td>
                          <td><?php echo $record->name ?></td>
                          <td><?php echo $record->phone ?></td>
                          <td><?php echo $record->email ?></td>
                          <td><?php echo $record->state ?></td>
                          <td><?php echo date("d-m-Y", strtotime($record->date)) ?></td>
                        </tr>
                    <?php
                      }
                    }
                    ?>



                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer clearfix">
              <a href="<?php echo base_url(); ?>leadListing" class="btn btn-sm btn-secondary float-right">View All Leads</a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-header border-transparent">
              <h3 class="card-title">Latest Orders</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-body p-0">
              <div class="table-responsive">
                <table class="table m-0">
                  <thead>
                    <tr>
                      <th>Order ID</th>
                      <th>Name</th>
                      <th>Phone</th>
                      <th>Total</th>
                      <th>Payment Type</th>
                      <th>Payment Status</th>
                      <th>Date</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    if (!empty($latestOrders)) {
                      foreach ($latestOrders as $record) {
                    ?>
                        <tr>
                          <td><?php echo $record->order_id ?></td>
                          <td><?php echo $record->name ?></td>
                          <td><?php echo $record->phone ?></td>
                          <td><?php echo $record->total ?></td>
                          <td><?php echo $record->payment_type ?></td>
                          <td>
                            <?php
                            if ($record->payment_status == 0) {
                              echo "<span class='badge bg-danger'>Unpaid</span>";
                            } else {
                              echo "<span class='badge bg-success'>Paid</span>";
                            }
                            ?></td>
                          <td><?php echo date("d-m-Y", strtotime($record->date)) ?></td>
                        </tr>
                    <?php
                      }
                    }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer clearfix">
              <a href="<?php echo base_url(); ?>orderListing" class="btn btn-sm btn-secondary float-right">View All Orders</a>
            </div>
          </div>
        </div>
      </div> -->
  </section>
</div>