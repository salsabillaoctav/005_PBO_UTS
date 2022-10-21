<?php

class Pegawai
{
    public $name;
    public $gaji;
    public function __construct($name, $gaji)
    {
        $this->name = $name;
        $this->gaji = $gaji;
    }
    public function infoGaji()
    {
        return $this->gaji;
    }
}
class Manager extends Pegawai
{
    private $tunjangan;
    public function __construct($name, $gaji, $tunjangan)
    {
        parent::__construct($name, $gaji);
        $this->tunjangan = $tunjangan;
    }
    public function infoGaji()
    {
        return $this->gaji;
    }
    public function infoTunjangan()
    {
        return $this->tunjangan;
    }
}
class Programmer extends Pegawai
{
    private $bonus;
    public function __construct($name, $gaji, $bonus)
    {
        parent::__construct($name, $gaji);
        $this->bonus = $bonus;
    }
    public function infoBonus()
    {
        return $this->bonus;
    }
}
class Bayaran
{
    public function hitungBayaran($peg)
    {
        $uang = $peg->infoGaji();

        return $uang;
    }
    public static function main($args)
    {
        echo "Salsabilla Octavianingrum", "\n";
        echo "21091397005", "\n";
        echo "<br>", "<br>";
        $man = new Manager("Salsabilla", 20000000, 45);
        $prog = new Programmer("Asya", 18000000, 30);
        $hr = new Bayaran();
        echo "<br>Gaji Manager ". $man->name." : RP. ".strval($hr->hitungBayaran($man)), "\n";
        echo "<br>Gaji Programmer ". $prog->name." : RP. ".strval($hr->hitungBayaran($prog)), "\n";
    }
}
Bayaran::main(array());
?>