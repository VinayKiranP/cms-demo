<div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Permissions</h1>
          </div>
          <div class="col-sm-6">
          <div class="form-group" style="float:right;">
                    <a class="btn btn-primary" href="add"><i class="fa fa-plus"></i> Add</a>
                </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="row">
        <div class="col-12">
          <div class="card">
            <!-- /.card-header -->
            <div class="card-body" style="overflow:auto;">
              <table id="permission-table" class="table table-bordered table-striped">
                <thead>
                <tr>
                <th>Code</th>
                <th>Description</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    if(!empty($permissionRecords))
                    {
                        foreach($permissionRecords as $record)
                        {
                    ?>
                    <tr>
                        <td><?php echo $record->code ?></td>
                        <td><?php echo $record->description ?></td>
                        <td class="text-center">
                            <a class="btn btn-sm btn-info" href="<?php echo 'edit/'.$record->permissionId; ?>" title="Edit"><i class="fa fa-pen"></i></a>
                            <a class="btn btn-sm btn-danger deletePermission" href="#" data-permissionid="<?php echo $record->permissionId; ?>" title="Delete"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
                <tfoot>
                <tr>
                <th>Code</th>
                <th>Description</th>
                  <th>Actions</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
       
    </section>
</div>
<script>
  $(function () {
    $("#permission-table").DataTable();
  });
</script>
