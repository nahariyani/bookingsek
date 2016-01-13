<?php
require("include/konek.php");
 class member extends connection{
 	public function viewTamubyId($username,$password){
				$sql="SELECT * from tamubs where username=? and password=?";
				$stmt=$this->conn->prepare($sql);
				$stmt->bindParam(1,$username);
				$stmt->bindParam(2,$password);
				$stmt->execute();
				$data = $stmt->fetch(PDO::FETCH_ASSOC);
				return $data;
		}
	public function cekTamubyId($username,$password){
				$sql="SELECT count(*) from tamubs where username=? and password=?";
				$stmt=$this->conn->prepare($sql);
				$stmt->bindParam(1,$username);
				$stmt->bindParam(2,$password);
				$stmt->execute();
				$data = $stmt->fetchColumn();
				return $data;
		}
	public function viewMember(){
			try
			{
				$sql = "SELECT * FROM memberbs where status=0";
				$stmt = $this->conn->prepare($sql) or die("Gagal!");
				$stmt->execute();
				$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
				return $data;
			}catch(PDOException $e)
			{
				return $e->getMessage();
			}
		}
		public function viewLikeMember($nama){
			try
			{
				$sql = "SELECT * FROM memberbs where status=0 and nama LIKE :keyword;";
				$stmt = $this->conn->prepare($sql) or die("Gagal!");
				$stmt->bindValue(':keyword','%'.$nama.'%');
				$stmt->execute();
				$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
				return $data;
			}catch(PDOException $e)
			{
				return $e->getMessage();
			}
		}
		public function viewMemberbyId($id_member){
			
				$sql="SELECT * from memberbs where id_member=?";
				$stmt=$this->conn->prepare($sql);
				$stmt->bindParam(1,$id_member);
				$stmt->execute();
				 $data = $stmt->fetch(PDO::FETCH_ASSOC);
			
			return $data;
		}
	public function editMember($nama,$user,$pass,$telp,$mail,$alamat,$foto,$id){
		try{
			$sql ="UPDATE memberbs set nama=:nm, username=:us, password=:ps, alamat=:al, no_telp=:no,email=:ml, foto=:ft where id_member=:id";
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
	public function hapusMember($ids){
		try{
			$sql ="UPDATE memberbs set status=1 where id_member=?";
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
	public function addMember($nama,$user,$pass,$telp,$mail,$alamat,$foto){
		try{
			$sql ="INSERT INTO memberbs VALUES(:idmember, :nm, :us, :ps, :al, :no, :ml, :ft,0)";
				$stmt = $this->conn->prepare($sql);
				$stmt->execute(array(':idmember'=>NULL,
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
		public function addBooking($idmember,$idtamu,$wktu2,$tempat,$jam,$jumlah){
		try{
			$wktu1=date("Y-m-d h:i:s");
			$sql ="INSERT INTO bookingbs VALUES(:id,:a, :b, :c, :d, :e, :f, :g, 0)";
				$stmt = $this->conn->prepare($sql);
				$stmt->execute(array(':id'=>NULL,
							  	  ':a'=>$idmember,
							  	  ':b'=>$idtamu,
							  	  ':c'=>$wktu1,
							  	  ':d'=>$wktu2,
							  	  ':e'=>$jam,
							  	  ':f'=>$tempat,
							  	  ':g'=>$jumlah));
				return true;
		}catch(PDOException $e)
		{
			return $e->getMessage();
			return false;
		}

		}
	
}

?>