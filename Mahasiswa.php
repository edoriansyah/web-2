<?php
class Mahasiswa
{
    // properties
    public $nama;
    public $alamat;
    public $jurusan;

    // methods
    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    public function getNama()
    {
        return $this->nama;
    }
}

# membuat object edo dari class Mahasiswa
$edo = new Mahasiswa();
# mengakses property nama
echo $edo->nama;

# memberikan nilai baru ke property nama
$edo->nama = 'Edo Riansyah';
echo $edo->nama;


# membuat object ahmad dari class Mahasiswa
$ahmad = new Mahasiswa();
# mengakses property nama
echo $ahmad->getNama();

# memberikan nilai baru ke property nama
$ahmad->setNama('Ahmad Fakhri');
echo $ahmad->getNama();
