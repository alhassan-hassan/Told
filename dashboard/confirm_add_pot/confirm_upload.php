<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload</title>
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"
      integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V"
      crossorigin="anonymous"
    />
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" 
        crossorigin="anonymous"
    >
    <link rel="stylesheet" href="confirm_upload.css?v=<?php echo time(); ?>">
</head>
<body>
    <div class = "add-post-main">
        <?php require_once "../../general/dashboard_default/dashboard_def.php";?>

        <div class = 'main-content'>
            <div class = "header-content">
                <div class = "header">
                    <span id = "dashboard-header"> Add Post</span>
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

            <div class = "sucess-hint">
                <p id = "up_status">Post Status</p>
                <hr>
                <div class = "message">
                    <span>Post uploaded successfully </span>
                    <i class="fas fa-check"></i>
                </div>

                <p id = "direction-top">
                    However, an approval has to be granted 
                    before it is uploaded to the national domain.
                </p>
                <p id = "direction">
                    Check your notifications for updates on your posts.
                </p>
                <div class = "action-mern">
                    <button id = "another">Submit Another Post</button>
                    <button id = "another">See Posts</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>