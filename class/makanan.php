<?php
require("include/konek.php");
 class makanan extends connection{
	public function viewMakanan(){
			try
			{
				$sql = "SELECT * FROM makananbs where status=0";
				$stmt = $this->conn->prepare($sql) or die("Gagal!");
				$stmt->execute();
				$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
				return $data;
			}catch(PDOException $e)
			{
				return $e->getMessage();
			}
		}
		public function viewMakananbyId($id_makanan){
			
				$sql="SELECT * from makananbs where id_makanan=?";
				$stmt=$this->conn->prepare($sql);
				$stmt->bindParam(1,$id_makanan);
				$stmt->execute();
				 $data = $stmt->fetch(PDO::FETCH_ASSOC);
			
			return $data;
		}
	public function editMakanan($nama,$ket,$foto,$id){
		try{
			$sql ="UPDATE makananbs set nama=:nm,keterangan=:kt, foto=:ft where id_makanan=:id";
				$stmt = $this->conn->prepare($sql);
				$stmt->execute(array(':nm'=>$nama,
							  	  ':kt'=>$ket,
							  	  ':ft'=>$foto,
							  	  ':id'=>$id));
				return true;
		}catch(PDOException $e)
		{
			return $e->getMessage();
			return false;
		}
	}
	public function hapusMakanan($ids){
		try{
			$sql ="UPDATE makananbs set status=1 where id_makanan=?";
				$stmt = $this->conn->prepare($sql);
				$stmt->bindParam(1,$ids);
				$stmt->execute();
				return true;
		}catch(PDOException $e)
		{
			return $e->getMessage();
			return false;
		}
	}
	public function addMakanan($nama,$ket,$foto){
		try{
			$sql ="INSERT INTO makananbs VALUES(NULL, :nm, :kt, :ft,0)";
				$stmt = $this->conn->prepare($sql);
				$stmt->execute(array(':nm'=>$nama,
							  	  ':kt'=>$ket,
							  	  ':ft'=>$foto));
				return true;
		}catch(PDOException $e)
		{
			return $e->getMessage();
			return false;
		}

	}
	
}

?>