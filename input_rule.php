<?php include_once('_header.php');
require 'koneksi.php';

?>
<div class="box"><br><br><br>
    <h1>
        <center>Set Rule untuk input Fuzzy Data</center>
    </h1> <br><br>
    <form method="post" action="">
        <div class="form-group row">
            <label class="col-sm-2">Nama Rule</label>
            <div class="col-sm-10">
                <input type="text" name="namaRule" class="form-control" placeholder="Masukkan RULE ke berapa" value="<?php if (isset($_POST["submit"])) echo $_POST["namaRule"] ?>" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2">Parameter-1 Name</label>
            <div class="col-sm-10">
                <input type="text" name="parameter1N" class="form-control" placeholder="Masukkan nama parameter ke- 1" value="<?php if (isset($_POST["submit"])) echo $_POST["parameter1N"] ?>" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2">Parameter-1 Value</label>
            <div class="col-sm-10">
                <input type="text" name="parameter1V" class="form-control" placeholder="Masukkan value parameter ke- 1" value="<?php if (isset($_POST["submit"])) echo $_POST["parameter1V"] ?>" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2">Parameter-2 Name</label>
            <div class="col-sm-10">
                <input type="text" name="parameter2N" class="form-control" placeholder="Masukkan nama parameter ke- 2" value="<?php if (isset($_POST["submit"])) echo $_POST["parameter2N"] ?>" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2">Parameter-2 Value</label>
            <div class="col-sm-10">
                <input type="text" name="parameter2V" class="form-control" placeholder="Masukkan value parameter ke- 2" value="<?php if (isset($_POST["submit"])) echo $_POST["parameter2V"] ?>" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2">Parameter-3 Name</label>
            <div class="col-sm-10">
                <input type="text" name="parameter3N" class="form-control" placeholder="Masukkan nama parameter ke- 3" value="<?php if (isset($_POST["submit"])) echo $_POST["parameter3N"] ?>" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2">OUTPUT</label>
            <div class="col-sm-10">
                <input type="text" name="output" class="form-control" placeholder="Masukkan OUTPUT" value="<?php if (isset($_POST["submit"])) echo $_POST["output"] ?>" required>
            </div>
        </div>
        <center>
            <div class="col-sm-10">
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </div>
        </center>
        <div class="form-group row">

            <?php
            if (isset($_POST["submit"])) {
                $input = mysqli_query($conn, "INSERT INTO tbl_rule (id_rule, param1_name, param1_value,
                    param2_name, param2_value, param3_name, outputt) VALUES ('$_POST[namaRule]','$_POST[parameter1N]',
                    '$_POST[parameter1V]','$_POST[parameter2N]','$_POST[parameter2V]','$_POST[parameter3N]','$_POST[output]')");

                echo "<div class='alert alert-info'>Data telah diinput</div>";
                echo "<meta http-equiv='refresh' content='1;url=input_rule.php'>";
            }
            ?>
        </div>
        <div class="form-group row">

        </div>
    </form> <br><br>

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
                <th>Aksi</th>
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
                    <td><?php echo $pecah['output']; ?></td>
                    <td><a href="hapusrule.php?id_rule=<?php echo $pecah['id_rule']; ?>" class="btn btn-warning">Hapus Rule</a></td>
                </tr>
            <?php } ?>

        </tbody>
    </table>
    <center>
        <div class="col-sm-10">
            <a href="index.php" class="btn btn-primary">&nbsp;Back&nbsp;&nbsp;&nbsp;</a>&nbsp;
            <a href="input_variabel.php" class="btn btn-primary">&nbsp;Next&nbsp;&nbsp;</a>
        </div>
    </center>
</div>

<?php
include_once('_foother.php'); ?>