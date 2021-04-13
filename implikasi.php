<?php
session_start();
require 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <style type="text/css">
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 0px 0 0;
        }
    </style>
</head>

<body>
    <div class="container">
        <label class="col-sm-2">[R1]</label>
        <label class="col-sm-2"><?php echo $_SESSION['minimumR1']; ?></label>
    </div>
</body>

</html>