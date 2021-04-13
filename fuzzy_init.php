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
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Index</th>
                    <th>Parameter-1</th>
                    <th>Decision-1</th>
                    <th>Parameter-2</th>
                    <th>Decision-2</th>
                    <th>Parameter-3</th>
                    <th>Decision</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $ambildata = mysqli_query($conn, "SELECT * FROM tbl_rule");
                while ($pecah = $ambildata->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $pecah['id_rule']; ?></td>
                        <td><?php echo $pecah['param1_name']; ?></td>
                        <td><?php echo $pecah['param1_value']; ?></td>
                        <td><?php echo $pecah['param2_name']; ?></td>
                        <td><?php echo $pecah['param2_value']; ?></td>
                        <td><?php echo $pecah['param3_name']; ?></td>
                        <td><?php echo $pecah['outputt']; ?></td>
                    </tr>
                <?php } ?>

            </tbody>
        </table>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Variabel</th>
                    <th>Type</th>
                    <th>bb-name</th>
                    <th>bb-value</th>
                    <th>ba-name</th>
                    <th>ba-value</th>
                    <th>Satuan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $ambildata = mysqli_query($conn, "SELECT * FROM tbl_variabel");
                while ($pecah = $ambildata->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $pecah['nama_variabel']; ?></td>
                        <td><?php echo $pecah['tipe_variabel']; ?></td>
                        <td><?php echo $pecah['bbv']; ?></td>
                        <td><?php echo $pecah['bbn']; ?></td>
                        <td><?php echo $pecah['bav']; ?></td>
                        <td><?php echo $pecah['ban']; ?></td>
                        <td><?php echo $pecah['satuan']; ?></td>
                    </tr>
                <?php } ?>

            </tbody>
        </table>
    </div>
</body>

</html>