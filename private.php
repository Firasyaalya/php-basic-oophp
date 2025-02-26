<?php
class Mobil {
    private $namaMobil, $merk, $warnaMobil, $jenisMobil;

    public function __construct($nama, $merkMobil, $warna, $jenis)
    {
        $this->namaMobil = $nama;
        $this->merk = $merkMobil;
        $this->warnaMobil = $warna;
        $this->jenisMobil = $jenis;
    }

    public function namaMobil() {
        return $this->namaMobil;
    }

    public function merk() {
        return $this->merk;
    }

    public function setCat() {
        return $this->warnaMobil;
    }

    public function jenis() {
        return $this->jenisMobil;
    }

    public function tambahKecepatan() {
        
    }

    public function kurangiKecepatan() {

    }

    public function getLabel() {
        return "$this->namaMobil, $this->warnaMobil";
    }
}

class MobilSport extends Mobil {

}

$mobil_maryam = new Mobil("Fortuner", "Toyota", "Merah", "SUV");
$mobil_maryam->setCat("merah");

$mblsport_reyhan = new MobilSport("Ferrari", "Ferrari", "Hitam", "Sport");
$mblsport_reyhan->setCat("hitam");

echo "Mobil Maryam: " . $mobil_maryam->getLabel();
echo "<br>";
echo "Mobil Reyhan: " . $mblsport_reyhan->getLabel();

?>