<?php $this->load->helper("form"); ?>
<div class="container-fluid page-wrapper">
    <div class="main-container clearfix">
        <div class="page-title clearfix">
            <h3>Add Salutation</h3>
        </div>
        <form id="form_unit" action="" method="post">

        <div class="form-container">
            <h4 class="form-group-title">Salutation Details</h4>

            <div class="row">
                
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Name <span class='error-text'>*</span></label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                </div>

                <!-- <div class="col-sm-4">
                    <div class="form-group">
                        <label>Sequence <span class='error-text'>*</span></label>
                        <input type="number" class="form-control" id="sequence" name="sequence" min="1">
                    </div>
                </div> -->

                <div class="col-sm-4">
                    <div class="form-group">
                        <p>Status <span class='error-text'>*</span></p>
                        <label class="radio-inline">
                          <input type="radio" name="status" id="status" value="1" checked="checked"><span class="check-radio"></span> Active
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="status" id="status" value="0"><span class="check-radio"></span> Inactive
                        </label>                              
                    </div>                         
                </div>
            </div>

        </div>


        <div class="button-block clearfix">
            <div class="bttn-group">
                <button type="submit" class="btn btn-primary btn-lg">Save</button>
                <a href="list" class="btn btn-link">Cancel</a>
            </div>
        </div>


        </form>
        <footer class="footer-wrapper">
            <p>&copy; 2019 All rights, reserved</p>
        </footer>

    </div>
</div>
<script>
    $(document).ready(function() {
        $("#form_unit").validate({
            rules: {
                name: {
                    required: true
                },
                sequence: {
                    required: true
                },
                status: {
                    required: true
                }
            },
            messages: {
                name: {
                    required: "<p class='error-text'>Name required</p>",
                },
                sequence: {
                    required: "<p class='error-text'>Sequence required</p>",
                },
                status: {
                    required: "<p class='error-text'>Select Status</p>",
                }
            },
            errorElement: "span",
            errorPlacement: function(error, element) {
                error.appendTo(element.parent());
            }

        });
    });
</script>
