<?php 
  /**
    * Perbaikan Private
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
    protected function StatusNilai()
    {
      if($this->nilai >= 70) {
        $status = "Lulus";
      }else{
        $status = "Remed";
      }
      return $status;
    }
    public function bacaNilai(){
    	return $this->nilai;
    }
    public function bacaKelas(){
    	return $this->kelas;
    }
}
$dika = new Siswa('Ferdhika',85,'XII RPL A');

echo "
  Nama  : ".$dika->nama."<br>
  Nilai   : ".$dika->bacaNilai()."<br>
  Kelas   : ".$dika->bacaKelas()."<br>
  Status  : ".$dika->StatusNilai()."
";
?>