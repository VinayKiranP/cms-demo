<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="<?php echo BASE_PATH; ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo BASE_PATH; ?>assets/css/main.css">
    <link rel="stylesheet" href="<?php echo BASE_PATH; ?>assets/css/datatable.min.css">
</head>
<body>
    <header class="navbar navbar-default navbar-fixed-top main-header">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">School Management</a>
            </div>

            <nav class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#">Setup</a></li>
                    <li><a href="#">Adminssions</a></li>
                    <li><a href="#">Qualification</a></li>
                    <li><a href="#">Records</a></li>
                    <li><a href="#">Online Exam</a></li>
                    <li><a href="#">Examination</a></li>
                    <li><a href="#">Membership</a></li>
                    <li><a href="#">Finance</a></li>
                    <li><a href="#">Graduation</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-haspopup="true" aria-expanded="false">More <span class="caret"></span></a>
                        <ul class="dropdown-menu drop-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
                
            </nav>
        </div>
    </header>
</body>

     