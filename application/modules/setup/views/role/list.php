<div class="container-fluid page-wrapper">

  <div class="main-container clearfix">
    <div class="page-title clearfix">
      <h3>List of Roles</h3>
      <a href="add" class="btn btn-primary">+ Add Role</a>
    </div>

    <div class="panel-group advanced-search" id="accordion" role="tablist" aria-multiselectable="true">
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingOne">
          <h4 class="panel-title">
            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Advanced Search
            </a>
          </h4>
        </div>
        <form action="" method="post" id="searchForm">
          <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body">
              <div class="form-horizontal">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Role</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="role" value="<?php echo $role; ?>">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="app-btn-group">
                <button type="submit" class="btn btn-primary">Search</button>
                <button type="reset" class="btn btn-link">Clear All Fields</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>

    <div class="custom-table">
      <table class="table" id="role-table">
        <thead>
          <tr>
            <th>Role</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php
          if (!empty($roleRecords)) {
            foreach ($roleRecords as $record) {
          ?>
              <tr>
                <td><?php echo $record->role ?></td>
                <td class="text-center">
                  <a class="btn btn-sm btn-info" href="<?php echo 'edit/' . $record->roleId; ?>" title="Edit"><i class="fa fa-pen"></i></a>
                  <a class="btn btn-sm btn-danger deleteRole" href="#" data-id="<?php echo $record->roleId; ?>" title="Delete"><i class="fa fa-trash"></i></a>
                </td>
              </tr>
          <?php
            }
          }
          ?>
        </tbody>
      </table>
    </div>

    <div class="table-footer">
      <ul class="pagination">
        <li>
          <a href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
          </a>
        </li>
        <li class="active"><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li>
          <a href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
          </a>
        </li>
      </ul>
      <div class="entries">
        Show
        <select class="form-control">
          <option value="10">10</option>
          <option value="15" selected>15</option>
        </select>
        entries
      </div>
      <p class="entries-count">1 - 15 out of 45 entries</p>
    </div>



  </div>
  <footer class="footer-wrapper">
    <p>&copy; 2019 All rights, reserved</p>
  </footer>
</div>
<script>

</script>