<?php
    session_start();

    include('../../../private/initialize.php');

    $staffId = $_SESSION['staffId'] ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo url_for('stylesheets/bootstrap.min.css');?>">
    <title>Document</title>
</head>
<body>
    <div class="container rounded pt-5">
        <!--  Header Row  -->
        <div class="row">
            <div class="col-sm-12 text-center bg-danger">
                HEADER
            </div>
        </div>
        <!--  Main Row  -->
        <div class="row">
            <div class="col-sm-3 text-center bg-primary">
                <div class="row">
                    <div class="col-sm-12">
                    <h1>how are U</h1>
                        <?php
                        //get_subjects_allocated($staffId,$term,$acadYr);
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-9 text-center bg-warning">
                <h1>how are U</h1>
                <?php
                //get_subjects_allocated($staffId,$term,$acadYr);
                ?>
            </div>
        </div>
  
    <!--  Footer Row  -->
    <div class="row">
            <div class="col-sm-12 text-center bg-danger">
                FOOTER
            </div>
        </div>
    </div>
</body>
</html>