<html>
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>PHP TEST</title>
</head>

<?php

$dsn = 'mysql:dbname=idnumber; host=localhost';
$user = 'bingoapp';
$password = 'bingoapp1025';


try{
	$dbh = new PDO($dsn, $user, $password);

	
	//$dbh->query('SET NAMES sjis');
	//print($_POST['ID']);
	$sql = "select * from bingodata where id =".$_POST['ID'];

	foreach ($dbh->query($sql) as $row){
			//print($row['id'] );
		//print($row['num'].'<br>');
		$phpnum = $row['num'];
	}

}catch (PDOException $e){
	print('Connection failed:'.$e -> getMessgae() );
	die();
}

$dbh = null;
?>

<script>
	console.log(<?php print($phpnum); ?>);
	console.log( typeof(<?php print($phpnum); ?>) );
</script>


</body>



</html>