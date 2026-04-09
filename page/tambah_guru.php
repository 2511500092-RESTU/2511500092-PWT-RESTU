<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Data guru</h1>
            </div>
        </div>
    </div>
</div>

<?php
//kode otomatis
$carikode = mysqli_query($koneksi, "select max(Kd_guru) from tabel_guru") or die (
    mysqli_error($koneksi));
$datakode = mysqli_fetch_array($carikode);
if($datakode[0] != NULL) {
    $nilaikode = substr($datakode[0], 3);
    $kode = (int) $nilaikode;
    $kode = $kode + 1;
    $hasilkode = "M-".str_pad($kode, 3, "0", STR_PAD_LEFT);
} else {
    $hasilkode = "M-001";
}
$_SESSION["KODE"] = $hasilkode;

if(isset($_POST['tambah'])){
    $kd_guru = $_POST['Kd_guru'];
    $id_user = $_POST['Id_user'];
    $nm_guru = $_POST['Nm_guru'];
    $jenkel = $_POST['Jenkel'];
    $pend_terakhir	 = $_POST['Pend_terakhir'];
    $hp = $_POST['Hp'];
    $Alamat = $_POST['Alamat'];

    $insert = mysqli_query($koneksi, "INSERT INTO tabel_guru values ('$kd_guru','$id_user','$nm_guru','$jenkel','$pend_terakhir','$hp','$Alamat')");
    
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
                            <label for="Kd_guru">kd guru</label>
                            <input type="text" name="Kd_guru"
                                placeholder="kd guru" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="Id_user">Id user</label>
                            <input type="number" name="Id_user" id="Id_user" 
                                placeholder="Id User" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="Nm_guru">Nama guru</label>
                            <input type="text" name="Nm_guru" id="Nm_guru" 
                                placeholder="Nama guru" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="Jenkel">Jenkel</label>
                            <input type="text" name="Jenkel" id="Jenkel" 
                                placeholder="Jenkel" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="Pend_terakhir">Pendidikan terakhir</label>
                            <input type="text" name="Pend_terakhir" id="Pend_terakhir" 
                                placeholder="Pendidikan terakhir" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="Hp">Hp</label>
                            <input type="text" name="Hp" id="Hp" 
                                placeholder="Hp" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="Alamat">Alamat</label>
                            <input type="text" name="Alamat" id="Alamat" 
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