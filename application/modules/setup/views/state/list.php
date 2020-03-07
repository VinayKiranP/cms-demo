<div class="container-fluid page-wrapper">

  <div class="main-container clearfix">
    <div class="page-title clearfix">
      <h3>List of States</h3>
      <a href="add" class="btn btn-primary">+ Add State</a>
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
                      <label class="col-sm-4 control-label">State</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="state" value="<?php echo $name; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Country</label>
                      <div class="col-sm-8">
                        <select name="idCountry" id="" class="form-control">
                          <option value="">Select</option>
                          <?php
                          if (!empty($countries)) {
                            foreach ($countries as $record) {
                              $selected = '';
                              if ($record->countryId == $idCountry) {
                                $selected = 'selected';
                              }
                          ?>
                              <option value="<?php echo $record->countryId;  ?>" <?php echo $selected;  ?>><?php echo $record->name;  ?></option>
                          <?php
                            }
                          }
                          ?>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="app-btn-group">
                <button type="submit" class="btn btn-primary">Search</button>
                <button type="reset" class="btn btn-link" onclick="clearSearchForm()">Clear All Fields</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>

    <div class="custom-table">
      <table class="table" id="list-table">
        <thead>
          <tr>
            <th>State</th>
            <th>Country</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php
          if (!empty($stateRecords)) {
            foreach ($stateRecords as $record) {
          ?>
              <tr>
                <td><?php echo $record->name ?></td>
                <td><?php echo $record->CountryName ?></td>
                <td class="text-center">
                  <a class="btn btn-sm btn-info" href="<?php echo 'edit/' . $record->stateId; ?>" title="Edit"><i class="fa fa-pen"></i></a>
                  <a class="btn btn-sm btn-danger deleteRole" href="#" data-id="<?php echo $record->stateId; ?>" title="Delete"><i class="fa fa-trash"></i></a>
                </td>
              </tr>
          <?php
            }
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
  <footer class="footer-wrapper">
    <p>&copy; 2019 All rights, reserved</p>
  </footer>
</div>