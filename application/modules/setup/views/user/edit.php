<?php
$userId = $userInfo->userId;
$name = $userInfo->name;
$email = $userInfo->email;
$mobile = $userInfo->mobile;
$roleId = $userInfo->roleId;
?>
<div class="container-fluid page-wrapper">
    <div class="main-container clearfix">
        <div class="page-title clearfix">
            <h3>Edit User</h3>
        </div>
        <form id="form" action="/setup/user/editUser" method="post">
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Full Name</label>
                        <input type="text" class="form-control" id="fname" name="fname" value="<?php echo $name; ?>">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Mobile Number</label>
                        <input type="text" class="form-control" id="mobile" name="mobile" value="<?php echo $mobile; ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Role</label>
                        <select name="role" id="role" class="form-control">
                            <option value="">Select</option>
                            <?php
                            if (!empty($roles)) {
                                foreach ($roles as $record) {
                            ?>
                                    <option value="<?php echo $record->roleId;  ?>" <?php if($record->roleId == $roleId) {echo "selected=selected";} ?>><?php echo $record->role;  ?></option>
                            <?php
                                }
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" class="form-control" id="cpassword" name="cpassword">
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
                fname: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
                mobile: {
                    required: true,
                    number: true
                },
                role: {
                    required: true,
                },
                password: {
                    required: true,
                },
                cpassword: {
                    required: true,
                    equalTo : "#password"
                }
            },
            messages: {
                fname: {
                    required: "Full Name required",
                },
                email: {
                    required: "Email required",
                },
                mobile: {
                    required: "Mobile required",
                    number: "Please enter a valid phone number without +91"
                },
                role: {
                    required: "Role required",
                },
                password: {
                    required: "Password required",
                },
                cpassword: {
                    required: "Confirm Password required",
                    equalTo: "Password Mismatch"
                }
            },
            errorElement: "span",
            errorPlacement: function(error, element) {
                error.appendTo(element.parent());
            }

        });
    });
</script>