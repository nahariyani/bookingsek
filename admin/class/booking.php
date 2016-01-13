<?php
require("../../include/konek.php");
 class booking extends connection{
	public function viewbooking(){
			try
			{
				$sql = "SELECT * FROM bookingbs";
				$stmt = $this->conn->prepare($sql) or die("Gagal!");
				$stmt->execute();
				$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
				return $data;
			}catch(PDOException $e)
			{
				return $e->getMessage();
			}
		}
		public function viewbookingbyId($id_booking){
			
				$sql="SELECT * from bookingbs where id_booking=?";
				$stmt=$this->conn->prepare($sql);
				$stmt->bindParam(1,$id_booking);
				$stmt->execute();
				 $data = $stmt->fetch(PDO::FETCH_ASSOC);
			
			return $data;
		}
				public function viewmemberbyId($id_booking){
			
				$sql="SELECT * from memberbs where id_member=?";
				$stmt=$this->conn->prepare($sql);
				$stmt->bindParam(1,$id_booking);
				$stmt->execute();
				 $data = $stmt->fetch(PDO::FETCH_ASSOC);
			
			return $data;
		}
	public function editbooking($nama,$user,$pass,$telp,$mail,$alamat,$foto,$id){
		try{
			$sql ="UPDATE bookingbs set nama=:nm, username=:us, password=:ps, alamat=:al, no_telp=:no,email=:ml, foto=:ft where id_booking=:id";
				$stmt = $this->conn->prepare($sql);
				$stmt->execute(array(':nm'=>$nama,
							  	  ':us'=>$user,
							  	  ':ps'=>$pass,
							  	  ':al'=>$alamat,
							  	  ':no'=>$telp,
							  	  ':ml'=>$mail,
							  	  ':ft'=>$foto,
								  ':id'=>$id,));
				return true;
		}catch(PDOException $e)
		{
			return $e->getMessage();
			return false;
		}
	}
	public function hapusbooking($ids){
		try{
			$sql ="UPDATE bookingbs set status=1 where id_booking=?";
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
	public function addbooking($nama,$user,$pass,$telp,$mail,$alamat,$foto){
		try{
			$sql ="INSERT INTO bookingbs VALUES(:idbooking, :nm, :us, :ps, :al, :no, :ml, :ft,0)";
				$stmt = $this->conn->prepare($sql);
				$stmt->execute(array(':idbooking'=>NULL,
							  	  ':nm'=>$nama,
							  	  ':us'=>$user,
							  	  ':ps'=>$pass,
							  	  ':al'=>$alamat,
							  	  ':no'=>$telp,
							  	  ':ml'=>$mail,
							  	  ':ft'=>$foto,));
				return true;
		}catch(PDOException $e)
		{
			return $e->getMessage();
			return false;
		}

	}
	
}

?>