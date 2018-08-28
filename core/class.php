<?php 
 	
	function query($pdo){
		$statement = $pdo->prepare('select *from first');

		$statement->execute();
		return $statement->fetchAll(PDO::FETCH_OBJ);
	}


