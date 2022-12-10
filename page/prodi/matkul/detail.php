<?php 
    $result = $mysqli->query("SELECT * FROM matkul m JOIN prodi p ON m.no_prodi=p.no_prodi WHERE m.kode_matkul='".$_GET['kode_matkul']."'");
    $row = $result->fetch_assoc();
    if (!$row) {
        include "page/not-found.php";
        exit;
    }
    $no_prodi = $row['no_prodi'];
?>
<a href="/<?= $folder ?>/prodi/detail?no_prodi=<?= $no_prodi?>">Kembali ke detail prodi <?= $row['nama_prodi'] ?></a>
<div class="card mb-4 mt-4">
    <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="mb-0">Detail Matkul</h5>
        <small class="text-muted float-end"><?= $row['nama_matkul'] ?></small>
    </div>
    <div class="card-body">
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">Prodi</label>
            <div class="col-sm-10">
                <input value="<?= $row['nama_prodi'] ?>" type="text" class="form-control" placeholder="Kode Matkul" disabled>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">Kode Matkul</label>
            <div class="col-sm-10">
                <input value="<?= $row['kode_matkul'] ?>" type="text" class="form-control" placeholder="Kode Matkul" disabled>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-company">Kode Kurikulum</label>
            <div class="col-sm-10">
                <input value="<?= $row['kode_matkul'] ?>" type="text" class="form-control" placeholder="Kode Kurikulum" name="kode_matkul" disabled>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-company">SKS</label>
            <div class="col-sm-10">
                <input value="<?= $row['sks'] ?>" type="text" class="form-control" placeholder="Sks" name="sks" disabled>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-company">Semester Mata Kuliah</label>
            <div class="col-sm-10">
                <input value="<?= $row['smt_matkul'] ?>" type="text" class="form-control" placeholder="Semester" name="smt_matkul" disabled>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-company">Nama Mata Kuliah</label>
            <div class="col-sm-10">
                <input value="<?= $row['nama_matkul'] ?>" type="text" class="form-control" placeholder="Namkul" name="nama_matkul" disabled>
            </div>
        </div>
    </div>
</div>