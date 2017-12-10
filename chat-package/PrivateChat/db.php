<?php

/**
* 
*/
class Db extends AnotherClass
{
	
	function __construct(argument)
	{
		# code...
	}
	function connectDb($table){
		try {
			$pdo = new PDO('mysql:host=localhost;dbname=chattest', 'root','');
			selectAll($pdo,$table);
		} catch (PDOException $e) {
			die($e->getMessage());
		}
		
	}
	function selectAll($pdo,$table){
		$statement = $pdo->prepare('select * form {$table}');
		$statement->execute();
		return $statement->fetchAll(PDO::FETCH_CLASS);
	}
	function insertInto($pdo,$table,$fields){

		$statement = $pdo->prepare('insert into {$table} (`time`, `message`) values (`$fields["time"]`, $fields["message"])')
	}
}