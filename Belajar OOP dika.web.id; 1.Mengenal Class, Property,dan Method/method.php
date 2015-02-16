<?php 
	/**
		* Contoh Pembuatan Class Siswa
	**/
class Siswa{
	// Property
  	public $nama;
  	public $nilai;
  	public $kelas;

  	// Method
  	function StatusNilai()
  	{
  		if($this->nilai >= 70) {
    		$status = "Lulus";
    	}else{
    		$status = "Remed";
    	}
   		return $status;
	}
	function setNama($nama){
		$this->nama = $nama;
	}
	function setNilai($nilai){
		$this->nilai = $nilai;
	}
	function setKelas($kelas){
		$this->kelas = $kelas;
	}
	function bacaNama(){
		return $this->nama;
	}
	function bacaNilai(){
		return $this->nilai;
	}	
	function bacaKelas(){
		return $this->kelas;
	}
}

$dika = new Siswa();
$dika->setNama("Ferdhika");
$dika->setNilai(85);
$dika->setKelas("XII RPL A");

echo "
	Nama 	: ".$dika->bacaNama()."<br>
	Nilai 	: ".$dika->bacaNilai()."<br>
	Kelas 	: ".$dika->bacaKelas()."<br>
	Status 	: ".$dika->StatusNilai()."
";
?>