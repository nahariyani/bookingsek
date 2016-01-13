<?php
class connection {
		protected $host="localhost";
		protected $user="root";
		protected $db="bookingsek";
		protected $pass="";
		protected $conn;
		function __construct(){
			$this->conn = new PDO("mysql:host=".$this->host.";dbname=".$this->db, $this->user, $this->pass);
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
	}
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
		public function viewBooking($id){
			try
			{
				$sql = "SELECT * FROM bookingbs where id_tamu=?";
				$stmt = $this->conn->prepare($sql) or die("Gagal!");
				$stmt->bindParam(1,$id);
				$stmt->execute();
				$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
				return $data;
			}catch(PDOException $e)
			{
				return $e->getMessage();
			}
		}
		public function viewTamubyId($id_tamu){
				$sql="SELECT * from tamubs where username=?";
				$stmt=$this->conn->prepare($sql);
				$stmt->bindParam(1,$id_tamu);
				$stmt->execute();
				$data = $stmt->fetch(PDO::FETCH_ASSOC);
				return $data;
		}
		public function cekBooking($id){
			$sql="select count(*) from bookingbs where id_tamu = :idk";
				$stmt=$this->conn->prepare($sql);
				$stmt->bindParam(':idk',$id);
				$stmt->execute();
				$voter = $stmt->fetchColumn();			
				if($voter!=0){
					return true;
				}else{
					return false;
				}
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
	public function hapusBooking($ids){
		try{
			$sql ="UPDATE bookingbs set status=2 where id_booking=?";
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
	
}

?>

