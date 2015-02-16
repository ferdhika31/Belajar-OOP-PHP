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
class MataPelajaran extends Siswa{
  public $status;
  public $guru;
  public $matapelajaran;

  public function mapel($guru,$mapel){
    $this->guru = $guru;
    $this->matapelajaran = $mapel;
  }

  // Mengambil method dari class turunan
  public function StatusNilaiSiswa()
  {
    $this->status = $this->StatusNilai();
    return $this->status;
  }

  
}
$turunan = new MataPelajaran('Ferdhika',85,'XII RPL A');
$turunan->mapel('Bu Riza','Web Lanjut');

echo "
  Nama  : ".$turunan->nama."<br>
  Pelajaran : ".$turunan->matapelajaran."<br>
  Guru : ".$turunan->guru."<br>
  Nilai   : ".$turunan->bacaNilai()."<br>
  Kelas   : ".$turunan->bacaKelas()."<br>
  Status  : ".$turunan->StatusNilaiSiswa()."
";
?>