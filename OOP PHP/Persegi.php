<?php 


Class Persegi{           // class parent 
	public $sisi;
	public $luas;
	public $lebar;


	public function __constructor($sisi){
		$this->setSisi($sisi);
	}

	private function hitungLuas(){
         return $this->luas = $this->sisi*$this->sisi;

     }


	private function setSisi($sisi){
		$this->sisi = $sisi;
		$this->hitungLuas();

	}

	public function getSisi(){
		return $this->sisi;
	}

	public function getLuas(){
		return $this->hitungLuas();
	}

	public function setPanjang($panjang){
		$this->panjang = $panjang;
	}


     public function hitungLUasPersegiPanjang($panjang,$lebar = 15){
     	 $this->panjang = $panjang;
         $luas = $this->panjang*$lebar;
         return $luas;
     }
}

	/**
	 * 
	 */
	class Segitiga extends Persegi    // inheritance class segitiga merupakan child dari kelas Persegi
	{
		public $alas;
		public $tinggi;
		function __construct($alas=3,$tinggi=4)   // default parameter kalau misalkan si user tidak memasukan parameter
		{
			$this->setAlas($alas);
			$this->setTinggi($tinggi);
			$this->getDiagonal();
		}

		private function setAlas($alas){
			$this->alas = $alas;
		}

		private function setTinggi($tinggi){
			$this->tinggi = $tinggi;
		}
       
         public function getDiagonal()
        {
        	$diagonal = sqrt(($this->alas*$this->alas)+($this->tinggi*$this->tinggi));

        	return $diagonal;
        }
		
	}

 $persegi = new Persegi(15);
 $segitiga = new Segitiga(3,4); 

echo"<h2>diagonal segitiga adalah : ".$segitiga->getDiagonal()."</h2>";
echo"<h2>luas persegi adalah : ".$persegi->getLuas()."</h2>";
$persegi->setPanjang(15);
echo "<h2> luas persegi panjang adalah : ".$persegi->hitungLUasPersegiPanjang(15)."</h2>";

 ?>





