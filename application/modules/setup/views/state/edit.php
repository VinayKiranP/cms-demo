<?php
$stateId = $stateInfo->stateId;
$name = $stateInfo->name;
$idCountry = $stateInfo->idCountry;
?>
<?php $this->load->helper("form"); ?>
<div class="container-fluid page-wrapper">
    <div class="main-container clearfix">
        <div class="page-title clearfix">
            <h3>Edit State</h3>
        </div>
        <form id="form" action="/setup/state/editState" method="post">
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>State</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?php echo $name; ?>">
                        <input type="hidden" value="<?php echo $stateId; ?>" name="stateId" id="stateId" />
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Country</label>
                        <select name="idCountry" id="idCountry" class="form-control">
                            <option value="">Select</option>
                            <?php
                            if (!empty($countries)) {
                                foreach ($countries as $record) {
                            ?>
                                    <option value="<?php echo $record->countryId;  ?>" <?php if ($record->countryId == $idCountry) {
                                                                                            echo "selected=selected";
                                                                                        } ?>><?php echo $record->name;  ?></option>
                            <?php
                                }
                            }
                            ?>
                        </select>
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
        $("#form").validate({
            rules: {
                name: {
                    required: true
                },
                idCountry: {
                    required: true
                }
            },
            messages: {
                name: {
                    required: "Name required",
                },
                idCountry: {
                    required: "Country required",
                },
            },
            errorElement: "span",
            errorPlacement: function(error, element) {
                error.appendTo(element.parent());
            }

        });
    });
</script>