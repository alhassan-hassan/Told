<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"
      integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V"
      crossorigin="anonymous"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="home.css?v=<?php echo time(); ?>">
</head>
<body>
    <div class = "home-page-main">
        <?php require_once "../../general/dashboard_default/dashboard_def.php";?>

        <div class = "main-content">
            <div class = "header-content">
                <div class = "header">
                    <span id = "dashboard-header"> Dashboard</span>
                    <div class = "user-power">
                        <div class="form-group has-search">
                            <span class="fa fa-search form-control-feedback"></span>
                            <input type="text" class="form-control" placeholder="Search...">
                        </div>
                        <i class="far fa-user fa-lg"></i>
                        <i class="far fa-bell fa-lg"></i>
                    </div>
                </div>
            </div>      
    
            <div class = "content-info">
                <div class = "port">
                    <div class = "option" id = "problem">
                        <div class = "icon">
                            <i class="fas fa-plus-square fa-3x iconic"></i>
                        </div>
                        <div id = "p-deal" class = "option-child">
                            Upload Problem
                        </div>
                    </div>
                    <div class = "option" id = "my-post">
                        <div class = "icon">
                            <i class="far fa-window-restore fa-3x iconic"></i>
                        </div>
                        <div id = "up-deal" class = "option-child">
                            My Posts
                        </div>
                    </div>
                </div>
                        
                <div class = "port">
                    <div class = "option" id = "public-post">
                        <div class = "icon">
                            <i class="fas fa-database fa-3x iconic"></i>
                        </div>
                        <div id = "pp-deal" class = "option-child">
                            All  Public Posts
                        </div>
                    </div>
                    <div class = "option" id = "help">
                        <div class = "icon">
                            <i class="fas fa-question-circle fa-3x iconic"></i>
                        </div>
                        <div id = "h-deal" class = "option-child">
                            Help
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>