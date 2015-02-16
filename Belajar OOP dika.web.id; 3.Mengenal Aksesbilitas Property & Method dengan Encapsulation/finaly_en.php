<?php 
  /**
    * Perbaikan Protected
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
// class turunan
class Nilai extends Siswa{
  public $status;

  public function bacaStatus(){
    $this->status = $this->StatusNilai();
    return $this->status;
  }
}
$turunan = new Nilai('Ferdhika',85,'XII RPL A');

echo "
  Nama  : ".$turunan->nama."<br>
  Nilai   : ".$turunan->bacaNilai()."<br>
  Kelas   : ".$turunan->bacaKelas()."<br>
  Status  : ".$turunan->bacaStatus()."
";
?>