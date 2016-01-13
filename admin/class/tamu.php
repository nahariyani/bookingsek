<?php
require("../../include/konek.php");
 class tamu extends connection{
	public function viewTamu(){
			try
			{
				$sql = "SELECT * FROM tamubs";
				$stmt = $this->conn->prepare($sql) or die("Gagal!");
				$stmt->execute();
				$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
				return $data;
			}catch(PDOException $e)
			{
				return $e->getMessage();
			}
		}
		public function viewTamubyId($id_tamu){
			
				$sql="SELECT * from tamubs where id_tamu=?";
				$stmt=$this->conn->prepare($sql);
				$stmt->bindParam(1,$id_tamu);
				$stmt->execute();
				 $data = $stmt->fetch(PDO::FETCH_ASSOC);
			
			return $data;
		}
	public function editTamu($nama,$no_telp,$email,$username,$password,$tanggal,$id){
		try{
			$sql ="UPDATE tamubs set nama=:nm,no_telp=:no, email=:em, username=:us, password=:ps, lastlogin=:tg where id_tamu=:id";
				$stmt = $this->conn->prepare($sql);
				$stmt->execute(array(':nm'=>$nama,
							  	  ':no'=>$no_telp,
							  	  ':em'=>$email,
							  	  ':us'=>$username,
							  	  ':ps'=>$password,
							  	  ':tg'=>$tanggal,
							  	  ':id'=>$id));
				return true;
		}catch(PDOException $e)
		{
			return $e->getMessage();
			return false;
		}
	}
	public function hapusTamu($ids){
		try{
			$sql ="DELETE tamubs set status=1 where id_tamu=?";
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
	public function addTamu($nama,$no_telp,$email,$username,$password,$tanggal){
		try{
			$sql ="INSERT INTO tamubs VALUES(NULL, :nm, :no, :em, :us, :ps, :tg,0)";
				$stmt = $this->conn->prepare($sql);
				$stmt->execute(array(':nm'=>$nama,
							  	  ':no'=>$no_telp,
							  	  ':em'=>$email,
							  	  ':us'=>$username,
							  	  ':ps'=>$password,
							  	  ':tg'=>$tanggal));
				return true;
		}catch(PDOException $e)
		{
			return $e->getMessage();
			return false;
		}

	}
	
}

?>

