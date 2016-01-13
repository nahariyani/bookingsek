<?php 
class Login
{
	private $conn;
	private $table_name = "adminbs";
    public $user;
    public $userid;
    public $passid;

    public function __construct($db){
		$this->conn = $db;
	}
    public function login()
    {
        $user = $this->checkCredentials();        
        if ($user) {
            $this->user = $user;
			session_start();
            $_SESSION['UserName'] = $user['UserName'];
            return $user['UserName'];
        }
        return false;
    }

    protected function checkCredentials()
    {
        $stmt = $this->conn->prepare('SELECT * FROM '.$this->table_name.' WHERE UserName=? and Password=?');
		$stmt->bindParam(1, $this->userid);
		$stmt->bindParam(2, $this->passid);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            $data = $stmt->fetch(PDO::FETCH_ASSOC);
            $submitted_pass = $this->passid;
            if ($submitted_pass == $data['Password']) {
                return $data;
            }
        }
        return false;
    }

    public function getUser()
    {
        return $this->user;
    }
    
}
?>
    