<?php

// Interface sebagai kontrak
interface Suara {
    public function bersuara();
}

// Kelas Ayam mengimplementasikan interface Suara
class Ayam implements Suara {
    public function bersuara() {
        return "Kukuruyuk!";
    }
}

// Kelas Anjing juga mengimplementasikan interface Suara
class Anjing implements Suara {
    public function bersuara() {
        return "Guk guk!";
    }
}

// Fungsi untuk memanggil suara suatu objek yang mengimplementasikan interface Suara
function panggilSuara(Suara $hewan) {
    return $hewan->bersuara();
}

// Membuat objek Ayam dan Anjing
$ayam = new Ayam();
$anjing = new Anjing();

// Memanggil fungsi panggilSuara dengan objek Ayam dan Anjing
echo panggilSuara($ayam); // Output: Kukuruyuk!
echo panggilSuara($anjing); // Output: Guk guk!

?>
