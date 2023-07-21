<?php
include 'company.php';
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/styles.css">
    <title>AnyDay Tutors</title>
</head>
<body>
    <div class="container">
        <div class="row" style="background-color: #571581; align-items: center; justify-content: center; border-radius: 15px;">
            <div class="col-sm p-3">
                <?php echo $company_logo?>
            </div>
            <div class="col-sm" style="color: white;">
                <h1><?php echo $company_name?></h1>
            </div>
        </div>
    </div>
