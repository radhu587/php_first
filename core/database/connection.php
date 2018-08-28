<?php 

class connect{
	public static function getConnection($config){
		try{
			
			 return new PDO($config['host'].";dbname=".$config['dbname'],$config['username'],$config['password']);
		
		}catch(PDOException $e){
			die("could not connect");
		}
	}
}