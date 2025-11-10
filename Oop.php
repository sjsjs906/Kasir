<?php
// Class Tank
class Tank {
    public $nama;
    public $harga;
    public $negara;

    public function __construct($nama, $harga, $negara) {
        $this->nama = $nama;
        $this->harga = $harga;
        $this->negara = $negara;
    }

    public function infoTank() {
        return "Tank: {$this->nama}, Harga: {$this->harga}, Negara: {$this->negara}";
    }
}

// Class Pembeli
class Pembeli {
    public $nama;
    public $saldo;

    public function __construct($nama, $saldo) {
        $this->nama = $nama;
        $this->saldo = $saldo;
    }

    public function beliTank($tank) {
        if ($this->saldo >= $tank->harga) {
            $this->saldo -= $tank->harga;
            echo "{$this->nama} berhasil membeli {$tank->nama} seharga {$tank->harga} 💸\n";
            echo "Sisa saldo: {$this->saldo}\n";
        } else {
            echo "Ugh… saldo {$this->nama} gak cukup buat beli {$tank->nama} 😤\n";
        }
    }
}

// Objek Tank
$tank1 = new Tank("Leopard 2A6", 5000000, "Jerman");
$tank2 = new Tank("T-90M", 4000000, "Rusia");

// Objek Pembeli
$pembeli1 = new Pembeli("Ali", 6000000);

// Coba beli tank
$pembeli1->beliTank($tank1);
$pembeli1->beliTank($tank2);
?>