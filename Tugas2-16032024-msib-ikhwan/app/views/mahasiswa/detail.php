<div class="container mt-5">
    <div class="card" style="width: 18rem;">
    <div class="card-body">
            <h5 class="card-title"><?=$data['mhs']['nama']?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?=$data['mhs']['asal_sekolah']?></h6>
            <p class="card-text"><?=$data['mhs']['jenis_kelamin']?></p>
            <p class="card-text"><?=$data['mhs']['alamat']?></p>
            <p class="card-text"><?=$data['mhs']['agama']?></p>
            <a href="<?=BASEURL?>/mahasiswa" class="card-link">Kembali</a>
        </div>
    </div>
</div>