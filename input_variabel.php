<?php include_once('_header.php');
require 'koneksi.php';

?>
<div class="box"><br><br><br>
    <h1>
        <center>Set Variabel untuk input Fuzzy Data</center>
    </h1> <br><br>
    <form method="post" action="fuzzifikasi.php">
        <div class="form-group row">
            <label class="col-sm-2">Batas Atas Variabel Permintaan</label>
            <div class="col-sm-10">
                <input type="text" name="bavp" class="form-control" placeholder="Masukkan batas atas variabel permintaan" value="<?php if (isset($_POST["submit"])) echo $_POST["bavp"] ?>" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2">Batas Bawah Variabel Permintaan</label>
            <div class="col-sm-10">
                <input type="text" name="bbvp" class="form-control" placeholder="Masukkan batas bawah variabel permintaan" value="<?php if (isset($_POST["submit"])) echo $_POST["bbvp"] ?>" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2">Batas Atas Variabel Persediaan</label>
            <div class="col-sm-10">
                <input type="text" name="BAVP" class="form-control" placeholder="Masukkan batas atas variabel persediaan" value="<?php if (isset($_POST["submit"])) echo $_POST["BAVP"] ?>" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2">Batas Bawah Variabel Persediaan</label>
            <div class="col-sm-10">
                <input type="text" name="BBVP" class="form-control" placeholder="Masukkan batas bawah variabel persediaan" value="<?php if (isset($_POST["submit"])) echo $_POST["BBVP"] ?>" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2">Batas Atas Produksi</label>
            <div class="col-sm-10">
                <input type="text" name="bap" class="form-control" placeholder="Masukkan batas atas variabel produksi" value="<?php if (isset($_POST["submit"])) echo $_POST["bap"] ?>" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2">Batas Bawah Produksi</label>
            <div class="col-sm-10">
                <input type="text" name="bbp" class="form-control" placeholder="Masukkan batas bawah variabel produksi" value="<?php if (isset($_POST["submit"])) echo $_POST["bbp"] ?>" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2">Permintaan</label>
            <div class="col-sm-10">
                <input type="text" name="permintaan" class="form-control" placeholder="Masukkan permintaan" value="<?php if (isset($_POST["submit"])) echo $_POST["permintaan"] ?>" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2">Persediaan</label>
            <div class="col-sm-10">
                <input type="text" name="persediaan" class="form-control" placeholder="Masukkan persediaan" value="<?php if (isset($_POST["submit"])) echo $_POST["persediaan"] ?>" required>
            </div>
        </div>
        <!-- <div class="form-group row">
            <label class="col-sm-2">Batas Atas Variabel</label>
            <div class="col-sm-10">
                <input type="text" name="bav" class="form-control" placeholder="Masukkan batas atas variabel" value="<?php if (isset($_POST["submit"])) echo $_POST["bav"] ?>" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2">Batas Atas Nilai</label>
            <div class="col-sm-10">
                <input type="number" name="ban" class="form-control" placeholder="Masukkan batas atas nilai" value="<?php if (isset($_POST["submit"])) echo $_POST["ban"] ?>" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2">Satuan</label>
            <div class="col-sm-10">
                <input type="text" name="satuan" class="form-control" placeholder="Masukkan satuan" value="<?php if (isset($_POST["submit"])) echo $_POST["satuan"] ?>" required>
            </div>
        </div> -->
        <center>
            <div class="col-sm-10">
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </div>
        </center>
        <div class="form-group row">

            <?php
            if (isset($_POST["submit"])) {
                $input = mysqli_query($conn, "INSERT INTO tbl_variabel (nama_variabel, tipe_variabel, bbv,
                    bbn, bav, ban, satuan) VALUES ('$_POST[namaVariabel]','$_POST[tipeVariabel]',
                    '$_POST[bbv]','$_POST[bbn]','$_POST[bav]','$_POST[ban]','$_POST[satuan]')");
                echo "<div class='alert alert-info'>Data telah diinput</div>";
                echo "<meta http-equiv='refresh' content='1;url=input_variabel.php'>";
            }
            ?>
        </div>
    </form> <br><br>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Variabel</th>
                <th>Type</th>
                <th>bb-name</th>
                <th>bb-value</th>
                <th>bb-name</th>
                <th>bb-value</th>
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
    <center>
        <div class="col-sm-10">
            <a href="input_rule.php" class="btn btn-primary">&nbsp;Back&nbsp;&nbsp;&nbsp;</a>&nbsp;
            <!-- <a href="proses_fuzzy.php" class="btn btn-primary">&nbsp;Next&nbsp;&nbsp;&nbsp;</a> -->
        </div>
    </center>
</div>

<?php
include_once('_foother.php'); ?>