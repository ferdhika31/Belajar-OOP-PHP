<?php 
	/**
		* Contoh Constructor
	**/
class Siswa{
	// Property
  	public $nama;
  	public $nilai;
  	public $kelas;

  	// Constructor
  	function __construct($nama,$nilai,$kelas){
  		$this->nama = $nama;
  		$this->nilai = $nilai;
  		$this->kelas = $kelas;
  	}

  	// Destructor
  	function __destruct(){
  		#code here
  	}

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
$dika = new Siswa('Ferdhika',85,'XII RPL A');

echo "
	Nama 	: ".$dika->nama."<br>
	Nilai 	: ".$dika->nilai."<br>
	Kelas 	: ".$dika->kelas."<br>
	Status 	: ".$dika->StatusNilai()."
";
?>