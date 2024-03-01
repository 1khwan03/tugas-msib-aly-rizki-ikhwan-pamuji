<?php

// Kelas Induk (Parent Class)
class Hewan {
    public $nama;
    public $jenis;

    public function __construct($nama, $jenis) {
        $this->nama = $nama;
        $this->jenis = $jenis;
    }

    public function getInfo() {
        return "Nama: {$this->nama}, Jenis: {$this->jenis}";
    }
}

// Kelas Anak (Child Class) yang mewarisi dari Hewan
class Kucing extends Hewan {
    public $warnaBulu;

    public function __construct($nama, $warnaBulu) {
        // Memanggil konstruktor kelas induk
        parent::__construct($nama, 'Kucing');
        $this->warnaBulu = $warnaBulu;
    }

    public function getInfo() {
        // Memanggil metode getInfo dari kelas induk
        return parent::getInfo() . ", Warna Bulu: {$this->warnaBulu}";
    }
}

// Membuat objek dari kelas anak (Kucing)
$kucing = new Kucing('Muezza', 'Abu-abu');

// Memanggil metode getInfo dari kelas anak (Kucing)
echo $kucing->getInfo();

?>
