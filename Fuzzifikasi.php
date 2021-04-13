<?php
include_once('_header.php');
session_start();
require 'koneksi.php';



$permintaan = 4000;
$ambildata = mysqli_query($conn, "SELECT * FROM tbl_variabel");
while ($pecah = $ambildata->fetch_assoc());



?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/uPlot.min.css">
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <style type="text/css">
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 0px 0 0;
        }
    </style>
</head>

<body>
    <div class="container"><br><br>
        <font size="5"><strong>[0] Fuzzy Init</strong></font><br><br>
        <tbody>
            <table class="table table-bordered" width="100%"  >
                <thead>
                    <tr bgcolor="#191970">
                        <th scope="col">
                            <font color="white" size="3"> Rules </font>
                        </th>
                        <th scope="col">
                            <font color="white" size="3"> Parameter 1 </font>
                        </th>
                        <th scope="col">
                            <font color="white" size="3"> Decision 1 </font>
                        </th>
                        <th scope="col">
                            <font color="white" size="3"> Paramater 2 </font>
                        </th>
                        <th scope="col">
                            <font color="white" size="3"> Decision 2 </font>
                        </th>
                        <th scope="col">
                            <font color="white" size="3"> Parameter 3 </font>
                        </th>
                        <th scope="col">
                            <font color="white" size="3"> Decision 3 </font>
                        </th>

                    </tr>
                </thead>

                <tbody>
                    <?php $ambil = $conn->query("SELECT * FROM tbl_rule"); ?>
                    <?php while($pecah = $ambil->fetch_assoc()) { ?>
                        <tr>
                            <td><strong><font > <?php echo $pecah ['id_rule']; ?></font></strong></td>
                            <td><strong><font > <?php echo $pecah ['param1_name']; ?></font></strong></td>
                            <td><strong><font > <?php echo $pecah ['param1_value']; ?></font></strong></td>
                            <td><strong><font > <?php echo $pecah ['param2_name']; ?></font></strong></td>
                            <td><strong><font > <?php echo $pecah ['param2_value']; ?></font></strong></td>
                            <td><strong><font > <?php echo $pecah ['param3_name']; ?></font></strong></td>
                            <td><strong><font > <?php echo $pecah ['output']; ?></font></strong></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

        </div><br><br><br>
        <div class="container">
            <font size="5"><strong>[1] Fuzzifikasi</strong></font><br><br><br>
            <center>
                <div class="form-group row">
                    <label class="col-sm-2"><strong>uTurun = </strong></label>
                    <label class="col-sm-2"><strong><?php echo $_POST['bavp']; ?></strong></label>
                    <label class="col-md-2"><strong> - </strong></label>
                    <label class="col-md-2"><strong><?php echo $_POST['permintaan'] ?></strong></label>
                    <label class="col-md-2"><strong>/</strong></label>
                    <label class="col-md-2"><strong><?php echo $_POST['bavp']; ?></strong></label>
                    <label class="col-md-2"><strong> - </strong></label>
                    <label class="col-md-2"><strong><?php echo $_POST['bbvp']; ?></strong></label>
                    <label class="col-md-2"><strong>=</strong></label>
                    <label class="col-md-2"><strong><?php echo $uTurun = ($_POST['bavp'] - $_POST['permintaan']) / ($_POST['bavp'] - $_POST['bbvp']) ?></strong></label>
                    <?php
                    $_SESSION['minimumR1'] = $uTurun;
                    ?>
                    <hr width="100%" align="center">
                </div>
            </div>
            <br><br><br>
            <div class="container">
                <center>
                    <div class="form-group row">
                        <label class="col-sm-2"><strong>uNaik = </strong></label>
                        <label class="col-md-2"><strong><?php echo $_POST['permintaan'] ?></strong></label>
                        <label class="col-md-2"><strong> - </strong></label>
                        <label class="col-sm-2"><strong><?php echo $_POST['bbvp'] ?></strong></label>
                        <label class="col-md-2"><strong>/</strong></label>
                        <label class="col-md-2"><strong><?php echo $_POST['bavp'] ?></strong></label>
                        <label class="col-md-2"><strong> - </strong></label>
                        <label class="col-md-2"><strong> <?php echo $_POST['bbvp'] ?> </strong></label>
                        <label class="col-md-2"><strong>=</strong></label>
                        <label class="col-md-2"><strong><?php echo $uNaik = ($_POST['permintaan'] - $_POST['bbvp']) / ($_POST['bavp'] - $_POST['bbvp']); ?></strong></label>
                        <hr width="100%" align="center">
                    </div>
                </div>
                <br><br><br>

                <div class="container">
                    <center>
                        <div class="form-group row">
                            <label class="col-sm-2"><strong>uSedikit = </strong></label>
                            <label class="col-md-2"><strong><?php echo $_POST['BAVP'] ?></strong></label>
                            <label class="col-md-2"><strong> - </strong></label>
                            <label class="col-sm-2"><strong><?php echo $_POST['persediaan'] ?></strong></label>
                            <label class="col-md-2"><strong>/</strong></label>
                            <label class="col-md-2"><strong><?php echo $_POST['BAVP'] ?></strong></label>
                            <label class="col-md-2"><strong> - </strong></label>
                            <label class="col-md-2"><strong> <?php echo $_POST['BBVP'] ?> </strong></label>
                            <label class="col-md-2"><strong>=</strong></label>
                            <label class="col-md-2"><strong><?php echo $uSedikit = ($_POST['BAVP'] - $_POST['persediaan']) / ($_POST['BAVP'] - $_POST['BBVP']); ?></strong></label>
                            <hr width="100%" align="center">
                        </div>
                    </div>
                    <br><br><br>

                    <div class="container">
                        <center>
                            <div class="form-group row">
                                <label class="col-sm-2"><strong>uBanyak = </strong></label>
                                <label class="col-md-2"><strong><?php echo $_POST['persediaan'] ?></strong></label>
                                <label class="col-md-2"><strong> - </strong></label>
                                <label class="col-sm-2"><strong><?php echo $_POST['BBVP'] ?></strong></label>
                                <label class="col-md-2"><strong>/</strong></label>
                                <label class="col-md-2"><strong><?php echo $_POST['BAVP'] ?></strong></label>
                                <label class="col-md-2"><strong> - </strong></label>
                                <label class="col-md-2"><strong> <?php echo $_POST['BBVP'] ?> </strong></label>
                                <label class="col-md-2"><strong>=</strong></label>
                                <label class="col-md-2"><strong><?php echo $uBanyak = ($_POST['persediaan'] - $_POST['BBVP']) / ($_POST['BAVP'] - $_POST['BBVP']); ?></strong></label>
                                <hr width="100%" align="center">
                            </div>
                        </div>
                        <br><br><br>

                        <div class="container">
                            <div id="lineChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;">
                            </div>
                        </div>
                        <div class="container">
                            <div id="lineChartpersediaan" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;">
                            </div>
                        </div>
                        <div class="container">
                            <div id="lineChartproduksi" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;">
                            </div>
                        </div>
                        <script src="js/jquery.min.js"></script>
                        <script src="js/uPlot.iife.min.js"></script>
                        <script>
                            $(function() {
                                function getSize(elementId) {
                                    return {
                                        width: document.getElementById(elementId).offsetWidth,
                                        height: document.getElementById(elementId).offsetHeight,
                                    }
                                }

                                let data_permintaan = [
                                [0, <?php echo $_POST['bbvp'] ?>, <?php echo $_POST['bavp'] ?>, <?php echo $_POST['bavp'] + $_POST['bbvp'] ?>],
                                [1, 1, 0, 0],
                                [0, 0, 1, 1]
                                ];
                                let data_persediaan = [
                                [0, <?php echo $_POST['BBVP'] ?>, <?php echo $_POST['BAVP'] ?>, <?php echo $_POST['BAVP'] + $_POST['BBVP'] ?>],
                                [1, 1, 0, 0],
                                [0, 0, 1, 1]
                                ];
                                let data_produksi = [
                                [0, <?php echo $_POST['bbp'] ?>, <?php echo $_POST['bap'] ?>, <?php echo $_POST['bbp'] + $_POST['bap'] ?>],
                                [1, 1, 0, 0],
                                [0, 0, 1, 1]
                                ];
                                const optsLineChart = {
                                    ...getSize('lineChart'),
                                    scales: {
                                        x: {
                                            time: false,
                                        },
                                        y: {
                                            range: [0, 1],
                                        },
                                    },
                                    series: [{},
                                    {
                                        fill: 'transparent',
                                        width: 5,
                                        stroke: 'rgba(60,141,188,1)',
                                    },
                                    {
                                        stroke: '#c1c7d1',
                                        width: 5,
                                        fill: 'transparent',
                                    },
                                    ],
                                };

                                const optsLineChart2 = {
                                    ...getSize('lineChart'),
                                    scales: {
                                        x: {
                                            time: false,
                                        },
                                        y: {
                                            range: [0, 1],
                                        },
                                    },
                                    series: [{},
                                    {
                                        fill: 'transparent',
                                        width: 5,
                                        stroke: 'rgba(60,141,188,1)',
                                    },
                                    ],
                                };



                                let lineChart = new uPlot(optsLineChart, data_permintaan, document.getElementById('lineChart'));
                                let lineChartpersediaan = new uPlot(optsLineChart, data_persediaan, document.getElementById('lineChartpersediaan'));
                                let lineChartproduksi = new uPlot(optsLineChart, data_produksi, document.getElementById('lineChartproduksi'));

                                window.addEventListener("resize", e => {
                                    lineChart.setSize(getSize('lineChart'));
                                    lineChartpersediaan.setSize(getSize('lineChartpersediaan'));
                                    lineChartproduksi.setSize(getSize('lineChartproduksi'));
                                });
                            })
                        </script>

                        <br><br><br>
                        <div class="container">
                            <font size="5"><strong>[2] Operasi Fuzzy </strong></font><br><br><br>

                            <tbody>
                                <table class="table table-bordered" width="50%"  >
                                    <thead>
                                        <tr bgcolor="#191970">
                                            <th scope="col"><center>
                                                <font color="white" size="3"> Rule 1 </font>
                                            </th>
                                            <th scope="col"><center>
                                                <font color="white" size="3"> Rule 2 </font>
                                            </th>
                                            <th scope="col"><center>
                                                <font color="white" size="3"> Rule 3 </font>
                                            </th>
                                            <th scope="col"><center>
                                                <font color="white" size="3"> Rule 4 </font>
                                            </th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        <tr>
                                            <td><center><strong><center><font ><?php echo min($uTurun,$uBanyak) ?></font></strong></td>
                                                <td><center><strong><center><font ><?php echo min($uTurun,$uSedikit) ?></font></strong></td>
                                                <td><center><strong><center><font ><?php echo min($uNaik,$uBanyak) ?></font></strong></td>
                                                <td><center><strong><center><font ><?php echo min($uNaik,$uSedikit) ?></font></strong></td>

                                         </tr>

                                                </tbody>
                                            </table>
                                        </div>

                                        <br><br><br>
                                        <div class="container">
                                            <font size="5"><strong>[3] Implikasi </strong></font><br><br><br>
                                            <tbody>
                                              <table class="table table-bordered">
                                               <thead>
                                                <tr bgcolor="#191970">
                                                    <th><center><font color="white" size="3"> Rules </font></th>
                                                    <th><center><font color="white" size="3"> Nilai Implikasi </font></th>
                                                    <th><center><font color="white" size="3"> Decision </font></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <tr>
                                                        <td><center>R1</td>
                                                        <td><center><?php echo $nilaiR1 = min($uTurun,$uBanyak) ?></td>
                                                        <td><center>Berkurang</td>

                                                    </tr>
                                                    <tr>
                                                        <td><center>R2</td>
                                                        <td><center><?php echo $nilaiR2 = min($uTurun,$uSedikit) ?></td>
                                                        <td><center>Berkurang</td>
                                                    </tr>
                                                    <tr>
                                                        <td><center>R3</td>
                                                        <td><center><?php echo $nilaiR3 = min($uNaik,$uBanyak) ?></td>
                                                        <td><center>Bertambah</td>
                                                    </tr>
                                                    <tr>
                                                        <td><center>R4</td>
                                                        <td><center><?php echo $nilaiR4 = min($uNaik,$uSedikit) ?></td>
                                                        <td><center>Bertambah</td>
                                                    </tr>

                                                </tbody>

                                            </table>
                                        </div>

                                        <br><br><br>
                                        <div class="container">
                                            <font size="5"><strong>[4] Komposisi Aturan </strong></font><br><br><br>

                                            <table  class="table table-bordered" width="50%" >
                                                <thead>
                                                    <tr bgcolor="#191970">
                                                        <th><font color="white" size="3"> <center>Bertambah </font></th>
                                                        <th> <font color="white" size="3"><center>Berkurang </font></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><center><?php echo $nilaikomposisibertambah = max($nilaiR3, $nilaiR4) ?></td>
                                                        <td><center><?php echo $nilaikomposisiberkurang = max($nilaiR1, $nilaiR2) ?></td>
                                                    </tr>
                                                </tbody>
                                            </table>                                               
                                            </div>

                                                    <br><br><br>
                                                    <div class="container">
                                                        <font size="5"><strong>[5] Defuzzifikasi Diskrit </strong></font><br><br><br>
                                                        <tbody>
                                                            <table class="table table-bordered" width="50%"  >
                                                                <thead>
                                                                    <tr bgcolor="#191970">
                                                                        <th scope="col"><center>
                                                                            <font color="white" size="3"> Naik </font>
                                                                        </th>
                                                                        <th  color="white"><center>
                                                                            <font color="white" size="3"> Turun </font>
                                                                        </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td><center><?php echo $centroid1 = rand($_POST['bap'], $_POST['bbp']) ?></td>
                                                                        <td><center><?php echo $centroid2 =rand($_POST['bap'], $_POST['bbp']) ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><center><?php echo $centroid3 =rand($_POST['bap'], $_POST['bbp']) ?></td>
                                                                        <td><center><?php echo $centroid4 =rand($_POST['bap'], $_POST['bbp']) ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><center><?php echo $centroid5 = rand($_POST['bap'], $_POST['bbp']) ?></td>
                                                                        <td><center><?php echo $centroid6 =rand($_POST['bap'], $_POST['bbp']) ?></td>   
                                                                    </tr>
                                                                    <tr>
                                                                        <td><center><?php echo $centroid7 =rand($_POST['bap'], $_POST['bbp']) ?></td>
                                                                        <td><center><?php echo $centroid8 =rand($_POST['bap'], $_POST['bbp']) ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><center><?php echo $centroid9 =rand($_POST['bap'], $_POST['bbp']) ?></td>
                                                                        <td><center><?php echo $centroid10 =rand($_POST['bap'], $_POST['bbp']) ?></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </tbody>
                                                     </div>

                                                     <br><br><br>
                                                    <div class="container">
                                                        <font size="5"><strong>[6] Centroid </strong></font><br><br><br>
                                                        <?php
                                                            $centroidbertambah = array($centroid1, $centroid3, $centroid5, $centroid7, $centroid9);
                                                           $centroidberkurang = array($centroid2, $centroid4, $centroid6, $centroid8, $centroid10);
                                                            $centroidtotal = (($centroid1 + $centroid3 + $centroid5 + $centroid7 + $centroid9) *$nilaikomposisibertambah+ ($centroid2 + $centroid4 + $centroid6 + $centroid8 + $centroid10) * $nilaikomposisiberkurang) / ($nilaikomposisibertambah * (int)$centroidbertambah)+ ($nilaikomposisiberkurang * (int)$centroidberkurang); ?>
                                                        <div class="container">
                                                        <div class="form-group row">
                                                    <label class="col-md-2" style="font-size: 20px">Centroid = </label>
                                                    <label class="col-sm-10" style="font-size: 20px">Jadi produksi yang diperlukan sebanyak <strong> <?php echo $centroidtotal ?> kemasan / hari </strong></label>
                                                   </div>
                                                    </div>

                                                     </div>

                                                </body>
                                                </html>
                                                <?php include_once('_foother.php'); ?>