            <div class="sidebar">
                <div class="user-profile clearfix">
                    <a href="#" class="user-profile-link">
                        <span><img src="<?php echo BASE_PATH; ?>assets/img/user_profile.jpg"></span> <?php echo $name; ?>
                    </a>
                    <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        </button>
                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                            <li><a href="/setup/user/profile">Edit Profile</a></li>
                            <li><a href="user/logout">Logout</a></li>
                        </ul>
                    </div>
                </div>
                <div class="sidebar-nav">
                    <h4>General Setup</h4>
                    <ul>
                        <li><a href="#">Change Password</a></li>
                        <li class="active"><a href="#">Staff master</a></li>
                        <li><a href="#">Import Staff Data</a></li>
                        <li><a href="/setup/role/list">Roles</a></li>
                        <li><a href="/setup/user/list">User</a></li>
                        <li><a href="#">Manage Resources</a></li>
                        <li><a href="/setup/permission/list">Permissions</a></li>
                        <li><a href="#">Role Navigation Setup</a></li>
                        <li><a href="/setup/country/list">Countries</a></li>
                        <li><a href="/setup/state/list">States</a></li>
                    </ul>

                    <h4>Admin Setup</h4>
                    <ul>
                        <li><a href="#">Scheme</a></li>
                        <li><a href="#">Award Level</a></li>
                        <li><a href="#">Program</a></li>
                        <li><a href="#">Intake</a></li>
                        <li><a href="#">Academic Calendar</a></li>
                    </ul>

                    <h4>ACADEMIC SETUP</h4>
                    <ul>
                        <li><a href="#">Module Type</a></li>
                        <li><a href="#">Module Master</a></li>
                        <li><a href="#">Program Landscape</a></li>
                        <li><a href="#">Module Offered</a></li>
                        <li><a href="#">Exam Schedule</a></li>
                    </ul>

                </div>
            </div>