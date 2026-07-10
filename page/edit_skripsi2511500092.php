<?php
require_once "config/koneksi.php";

/** @var mysqli $koneksi */
?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Edit Skripsi</h1>
            </div>
        </div>
    </div>
</div>

<?php
$kd = $_GET['kd'];
$edit = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM skripsi_2511500092 WHERE Id_skripsi092='$kd' "));

if(isset($_POST['tambah'])){
    $Id_skripsi092 = $_POST['Id_skripsi092'];
    $Judul_skripsi092 = $_POST['Judul_skripsi092'];
    $Topik092 = $_POST['Topik092'];
    $Semester092 = $_POST['Semester092'];
    $Thn_ajaran092 = $_POST['Thn_ajaran092'];

    $insert = mysqli_query($koneksi, "UPDATE skripsi_2511500092 SET 
    Id_skripsi092='$Id_skripsi092',
    Judul_skripsi092='$Judul_skripsi092',
    Topik092='$Topik092',
    Semester092='$Semester092',
    Thn_ajaran092='$Thn_ajaran092'
    WHERE Id_skripsi092='$Id_skripsi092'");
    if ($insert) {
        echo '<div class="alert alert-info-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-info"></i> Info </h5>
            <h4>Berhasil Disimpan</h4></div>';
        echo '<meta http-equiv="refresh" content="1;url=index.php?page=skripsi2511500092">';
    } else {
        echo '<div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-info"></i> Info </h5>
            <h4>Gagal Disimpan</h4></div>';
    }
}
?>

<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="card-body p-2">
                    <form method="POST" action="">
                        <div class="form-group">
                            <label for="Id_skripsi092">Id Skripsi</label>
                            <input type="text" name="Id_skripsi092" id="Id_skripsi092" value="<?= $edit['Id_skripsi092']; ?>"
                                placeholder="Id Skripsi" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for="Judul_skripsi092">Judul Skripsi</label>
                            <input type="text" name="Judul_skripsi092" id="Judul_skripsi092" value="<?= $edit['Judul_skripsi092']; ?>"
                                placeholder="Judul Skripsi" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="Topik092">Topik</label>
                            <input type="text" name="Topik092" id="Topik092" value="<?= $edit['Topik092']; ?>"
                                placeholder="Keterangan" class="form-control">
                        </div>
                        <div class="form-group">
                        <label for="Jenkel">Semester</label>
                        <select name="Semester092" id="Semester092" class="form-control" required>
                            <option value="">-- Pilih Semester --</option>
                            <option value="Semester 1">Semester 1</option>
                            <option value="Semester 1">Semester 2</option>
                            <option value="Semester 1">Semester 3</option>
                            <option value="Semester 1">Semester 4</option>
                            <option value="Semester 1">Semester 5</option>
                            <option value="Semester 1">Semester 6</option>
                            <option value="Semester 1">Semester 7</option>
                            <option value="Semester 1">Semester 8</option>
                        </select>
                        </div>
                        <div class="form-group">
                        <label for="Thn_ajaran092">Tahun Ajaran</label>
                        <select name="Thn_ajaran092" id="Thn_ajaran092" class="form-control" required>
                            <option value="">-- Pilih Tahun Ajaran --</option>
                            <option value="2024-2025">2024-2025</option>
                            <option value="2025-2026">2025-2026</option>
                        </select>
                        </div>
                        
                        <div class="card-footer">
                            <input type="submit" class="btn btn-primary" name="tambah" value="simpan">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>