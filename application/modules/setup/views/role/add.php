<?php $this->load->helper("form"); ?>

<div class="container-fluid page-wrapper">
    <div class="main-container clearfix">
        <div class="page-title clearfix">
            <h3>Add/Edit List of Roles</h3>
        </div>
        <form id="addRole" action="addNewRole" method="post">
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Role</label>
                    <input type="text" class="form-control" value="<?php echo set_value('role'); ?>" id="role" name="role">
                </div>
            </div>
        </div>
        </form>

        <div class="clearfix">
            <h4>Corporate admin role navigation</h4>
            <ul class="menu-tree">
                <li>
                    <span class="icon page"></span>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox">
                            <span class="check-radio"></span>
                            Home
                        </label>
                    </div>
                </li>
                <li>
                    <span class="icon folder collapsed" data-toggle="collapse" href="#menu1" aria-expanded="false" aria-controls="menu1"></span>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox">
                            <span class="check-radio"></span>
                            Setup
                        </label>
                    </div>

                    <div class="collapse" id="menu1">
                        <ul>
                            <li>
                                <span class="icon folder collapsed" data-toggle="collapse" href="#menu2" aria-expanded="false" aria-controls="menu2"></span>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox">
                                        <span class="check-radio"></span>
                                        General Setup
                                    </label>
                                </div>

                                <div class="collapse" id="menu2">
                                    <ul>
                                        <li>
                                            <span class="icon page"></span>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox">
                                                    <span class="check-radio"></span>
                                                    Change Password
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="icon page"></span>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox">
                                                    <span class="check-radio"></span>
                                                    Staff master
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="icon page"></span>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox">
                                                    <span class="check-radio"></span>
                                                    Import Staff Data
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="icon page"></span>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox">
                                                    <span class="check-radio"></span>
                                                    Roles
                                                </label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <span class="icon folder collapsed" data-toggle="collapse" href="#menu21" aria-expanded="false" aria-controls="menu21"></span>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox">
                                        <span class="check-radio"></span>
                                        Admin Setup
                                    </label>
                                </div>

                                <div class="collapse" id="menu21">
                                    <ul>
                                        <li>
                                            <span class="icon page"></span>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox">
                                                    <span class="check-radio"></span>
                                                    Scheme
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="icon page"></span>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox">
                                                    <span class="check-radio"></span>
                                                    Award Level
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="icon page"></span>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox">
                                                    <span class="check-radio"></span>
                                                    Program
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="icon page"></span>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox">
                                                    <span class="check-radio"></span>
                                                    Intake
                                                </label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <div class="button-block clearfix">
            <div class="bttn-group">
                <button class="btn btn-primary btn-lg">Save</button>
                <button class="btn btn-link">Cancel</button>
            </div>
        </div>

        <footer class="footer-wrapper">
            <p>&copy; 2019 All rights, reserved</p>
        </footer>

    </div>
</div>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Role Add</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Role Add</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">

        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
                <!-- general form elements -->



                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Enter Role Details</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <?php $this->load->helper("form"); ?>
                    <form role="form" id="addRole" action="addNewRole" method="post" role="form">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="fname">Role</label>
                                        <input type="text" class="form-control required" value="<?php echo set_value('role'); ?>" id="role" name="role" maxlength="128">
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <!-- checkbox -->
                                    <div class="form-group">
                                        <?php
                                        if (!empty($permissions)) {
                                            foreach ($permissions as $record) {
                                        ?>
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" id="<?php echo $record->code ?>" value="<?php echo $record->permissionId ?>" name="permissions[]">
                                                    <label for="<?php echo $record->code ?>" class="custom-control-label"><?php echo $record->description ?></label>
                                                </div>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.box-body -->

                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" value="Submit" />
                            <input type="reset" class="btn btn-default" value="Reset" />
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <?php
                $this->load->helper('form');
                $error = $this->session->flashdata('error');
                if ($error) {
                ?>
                    <div class="alert alert-danger alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <?php echo $this->session->flashdata('error'); ?>
                    </div>
                <?php } ?>
                <?php
                $success = $this->session->flashdata('success');
                if ($success) {
                ?>
                    <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <?php echo $this->session->flashdata('success'); ?>
                    </div>
                <?php } ?>

                <div class="row">
                    <div class="col-md-12">
                        <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
<script src="<?php echo base_url(); ?>assets/js/addRole.js" type="text/javascript"></script>