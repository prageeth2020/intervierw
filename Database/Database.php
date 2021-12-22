<?php
	//database class
	class Database{
		
		//initiate private connection object
		private $connection;
                  
		function __construct() {
			 try{
				$dbhost = "localhost:3306";//localHost URL
				$username = "root";//Usename
				$password = "prageeth.456";//password
				$dbname = "photography";//database name(/schema name)
				$this->connection = new mysqli($dbhost, $username, $password, $dbname);//Connection String
		
				if( mysqli_connect_errno() ){ //if any error  occured
					throw new Exception("Could not connect to database.");   
				}
			
			}catch(Exception $e){//catch EWxceptions
				throw new Exception($e->getMessage());   
			}	
		
		
		}
      
		//getter for connection
		public function getConnect() {  
			return $this->connection;
		}
		
		//execute queries
		public function query($sql)
		{
			//return the result
			return $this->connection->query($sql);
		}
		
	}
					
?>