<?php 
  /**
    * Contoh Aksesbilitas Property & Method dengan Encapsulation
  **/
class Siswa{
  // Property
    public $nama;
    private $nilai;
    protected $kelas;

    // Constructor
    function __construct($nama,$nilai,$kelas){
      $this->nama = $nama;
      $this->nilai = $nilai;
      $this->kelas = $kelas;
    }

    // Method
    private function StatusNilai()
    {
      if($this->nilai >= 70) {
        $status = "Lulus";
      }else{
        $status = "Remed";
      }
      return $status;
    }
    public function bacaStatus(){
      return $this->StatusNilai();
    }
}
$dika = new Siswa('Ferdhika',85,'XII RPL A');

echo "
  Nama  : ".$dika->nama."<br>
  Nilai   : ".$dika->nilai."<br>
  Kelas   : ".$dika->kelas."<br>
  Status  : ".$dika->bacaStatus()."
";
?>