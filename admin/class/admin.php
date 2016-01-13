<?php
require("../../include/konek.php");	
 class admin extends connection{
	public function viewAdminbyId($id_admin){			
				$sql="SELECT * from adminbs where UserName=?";
				$stmt=$this->conn->prepare($sql);
				$stmt->bindParam(1,$id_admin);
				$stmt->execute();
				 $data = $stmt->fetch(PDO::FETCH_ASSOC);
			
			return $data;
	}
	public function viewAdminbyId2($id_admin){			
				$sql="SELECT * from adminbs where id=?";
				$stmt=$this->conn->prepare($sql);
				$stmt->bindParam(1,$id_admin);
				$stmt->execute();
				 $data = $stmt->fetch(PDO::FETCH_ASSOC);
			
			return $data;
	}
	public function editAdmin($password,$id){
		try{
			$sql ="UPDATE adminbs set Password=:ps where id=:id";
				$stmt = $this->conn->prepare($sql);
				$stmt->execute(array(':ps'=>$password,':id'=>$id));
				return true;
		}catch(PDOException $e)
		{
			return $e->getMessage();
			return false;
		}
	}
	public function cekPass($password,$id){
			$sql ="SELECT count(*) from adminbs  where id=:id and  Password=:ps";
				$stmt = $this->conn->prepare($sql);
				$stmt->execute(array(':ps'=>$password,':id'=>$id));
				$data = $stmt->fetchColumn(0);
		if($data>0){
			return true;
		}else{
			return false;
		}
		
	}
}

?>

