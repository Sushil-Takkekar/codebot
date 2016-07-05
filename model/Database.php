<?php
	
	class Database
	{
		public $dbtype;
		public $host;
		public $uname;
		public $pass;
		public $dbname;
		public $con;

		public function connectDb()
		{
			$this->dbtype = "mysql";
			$this->host = "localhost";
			$this->uname = "root";
			$this->pass = "";
			$this->dbname = "ngo_oop";

			$this->param1 = $this->dbtype.':host='.$this->host.';dbname='.$this->dbname;
			try {
				$this->con = new PDO($this->param1,$this->uname,$this->pass);
			}catch(Exception $e){
				die('Something is Wrong !!!');
			}
			return $this->con;
		}
		
	}

	/* // Just for Testing...
	$db = new Database;
	$handle = $db->connectDb();

	$test = $handle->query('select * from volunteer');
	while($r = $test->fetch(PDO::FETCH_OBJ))
	{
		echo '<br>'.$r->vo_name.' | '.$r->vo_email;
	}
	*/
?>