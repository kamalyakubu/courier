<?php


// database connection config
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "courier_db";

$conn = new mysqli ('localhost', 'root', '', 'courier_db') or die ('MySQL connect failed. ' . mysql_error());
mysqli_select_db($conn,$dbName) or die('Cannot select database. ' . mysql_error());

function dbQuery($conn, $sql)
{
	$result = mysqli_query($conn, $sql) or die(mysqli_error());
	
	return $result;
}

function dbAffectedRows()
{
	global $dbConn;
	
	return mysql_affected_rows($dbConn);
}

function dbFetchArray($result, $resultType = MYSQL_NUM) {
	return mysql_fetch_array($result, $resultType);
}

function dbFetchAssoc($result)
{
	return mysqli_fetch_assoc($result);
}

function dbFetchRow($result) 
{
	return mysql_fetch_row($result);
}

function dbFreeResult($result)
{
	return mysql_free_result($result);
}

function dbNumRows($result)
{
	return mysqli_num_rows($result);
}

function dbSelect($dbName)
{
	return mysql_select_db($dbName);
}

function dbInsertId()
{
	return mysql_insert_id();
}
?>