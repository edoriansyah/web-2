<?php
class Mahasiswa
{
    // properties
    public $nama;
    public $alamat;
    public $jurusan;

    // construct function
    public function __construct($nama)
    {
        $this->nama = $nama;
    }

    // methods
    public function getNama()
    {
        return $this->nama;
    }
}

# membuat object edo dari class Mahasiswa
$edo = new Mahasiswa("Edo Riansyah");
echo $edo->getNama();
