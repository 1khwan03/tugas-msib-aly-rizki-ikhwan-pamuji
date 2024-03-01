<?php

class Mahasiswa {
    private $nama;
    private $nim;
    private $ipk;

    // Constructor untuk inisialisasi objek
    public function __construct($nama, $nim, $ipk) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->setIPK($ipk); // Menggunakan setter untuk mengatur IPK
    }

    // Getter untuk mendapatkan nilai nama
    public function getNama() {
        return $this->nama;
    }

    // Getter untuk mendapatkan nilai NIM
    public function getNIM() {
        return $this->nim;
    }

    // Getter untuk mendapatkan nilai IPK
    public function getIPK() {
        return $this->ipk;
    }

    // Setter untuk mengatur nilai IPK dengan validasi
    public function setIPK($ipk) {
        if ($ipk >= 0 && $ipk <= 4) {
            $this->ipk = $ipk;
        } else {
            echo "Error: IPK harus berada dalam rentang 0-4.\n";
        }
    }
}

// Membuat objek Mahasiswa
$mahasiswa = new Mahasiswa('John Doe', '123456', 3.5);

// Mengakses data dengan menggunakan getter
echo "Nama: " . $mahasiswa->getNama() . "\n";
echo "NIM: " . $mahasiswa->getNIM() . "\n";
echo "IPK: " . $mahasiswa->getIPK() . "\n";

// Mengubah IPK dengan menggunakan setter
$mahasiswa->setIPK(3.8);

// Menampilkan IPK setelah diubah
echo "IPK setelah diubah: " . $mahasiswa->getIPK() . "\n";

// Mencoba mengatur IPK di luar rentang yang valid
$mahasiswa->setIPK(5);

?>
