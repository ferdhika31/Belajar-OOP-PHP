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
}
$dika = new Siswa();
$dika->nama = "Ferdhika";
$dika->nilai = 85;
$dika->kelas = "XII RPL A";

echo "
	Nama 	: ".$dika->nama."<br>
	Nilai 	: ".$dika->nilai."<br>
	Kelas 	: ".$dika->kelas."<br>
	Status 	: ".$dika->StatusNilai()."
";
?>