<?php
class Mobil {
    public $merk;
    public $warna;
    public $kecepatan = 0;

    public function __construct($merk, $warna) {
        $this->merk = $merk;
        $this->warna = $warna;
    }
    public function tambahKecepatan($nilai) {
        $this->kecepatan += $nilai;
        echo "Kecepatan saat ini: " . $this->kecepatan . " km/jam<br>";
    }

    public function kurangiKecepatan($nilai) {
        $this->kecepatan -= $nilai;
        echo "Kecepatan saat ini: " . $this->kecepatan . " km/jam<br>";
    }

    public function tampilkanInfo() {
        echo "Merk Mobil: " . $this->merk . "<br>";
        echo "Warna Mobil: " . $this->warna . "<br>";
        echo "Kecepatan Mobil: " . $this->kecepatan . " km/jam<br>";
    }
}

$mobil1 = new Mobil("BMW", "Hitam");
$mobil2 = new Mobil("Volkswagen", "Biru");
echo "<br>";
$mobil1->tampilkanInfo();
$mobil1->tambahKecepatan(500);
$mobil1->kurangiKecepatan(30);

echo "<br>";
$mobil2->tampilkanInfo();
$mobil2->tambahKecepatan(100);
$mobil2->kurangiKecepatan(20);

?>