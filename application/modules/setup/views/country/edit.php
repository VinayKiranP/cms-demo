<?php
$countryId = $countryInfo->countryId;
$name = $countryInfo->name;
?>
<div class="container-fluid page-wrapper">
    <div class="main-container clearfix">
        <div class="page-title clearfix">
            <h3>Edit Country</h3>
        </div>
        <form id="form" action="/setup/country/editCountry" method="post">
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Country</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?php echo $name; ?>">
                        <input type="hidden" value="<?php echo $countryId; ?>" name="countryId" id="countryId" />
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
                }
            },
            messages: {
                name: {
                    required: "Name required",
                }
            },
            errorElement: "span",
            errorPlacement: function(error, element) {
                error.appendTo(element.parent());
            }

        });
    });
</script>