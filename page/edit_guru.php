<?php
require_once "config/koneksi.php";

/** @var mysqli $koneksi */
?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Edit Mata Pelajaran</h1>
            </div>
        </div>
    </div>
</div>

<?php
$kd = $_GET['kd'];
$edit = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM tabel_guru WHERE Kd_guru ='$kd' "));

if(isset($_POST['tambah'])){
    $kd_guru = $_POST['Kd_guru'];
    $nm_guru = $_POST['Nm_guru'];
    $jenkel = $_POST['Jenkel'];
    $pend_terakhir	 = $_POST['Pend_terakhir'];
    $hp = $_POST['Hp'];
    $Alamat = $_POST['Alamat'];

    $insert = mysqli_query($koneksi, "UPDATE tabel_guru SET 
        Kd_guru='$kd_guru',
        Nm_guru='$nm_guru',
        Jenkel='$jenkel',
        Pend_terakhir='$pend_terakhir',
        Hp='$hp',
        Alamat='$Alamat'
    WHERE Kd_guru='$kd_guru'");
    
    if ($insert) {
        echo '<div class="alert alert-info-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-info"></i> Info </h5>
            <h4>Berhasil Disimpan</h4></div>';
        echo '<meta http-equiv="refresh" content="1;url=index.php?page=guru">';
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
                            <label for="Kd_guru">kode guru</label>
                            <input type="text" name="Kd_guru" value="<?= $edit['Kd_guru']; ?>"
                                placeholder="kd guru" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for="Nm_guru">Nama guru</label>
                            <input type="text" name="Nm_guru" id="Nm_guru" value="<?= $edit['Nm_guru']; ?>" 
                                placeholder="Nama guru" class="form-control">
                        </div>
                        <div class="form-group">
                        <label for="Jenkel">Jenis Kelamin</label>
                        <select name="Jenkel" id="Jenkel" class="form-control" required>
                            <option value="">-- Pilih Jenis Kelamin --</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                        </div>
                        <div class="form-group">
                            <label for="Pend_terakhir">Pendidikan terakhir</label>
                            <input type="text" name="Pend_terakhir" id="Pend_terakhir" value="<?= $edit['Pend_terakhir']; ?>"
                                placeholder="Pendidikan terakhir" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="Hp">Hp</label>
                            <input type="text" name="Hp" id="Hp" value="<?= $edit['Hp']; ?>"
                                placeholder="Hp" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="Alamat">Alamat</label>
                            <input type="text" name="Alamat" id="Alamat" value="<?= $edit['Alamat']; ?>"
                                placeholder="Alamat" class="form-control">
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