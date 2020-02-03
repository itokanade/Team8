<?php 
	$dsn = 'mysql:host=localhost;dbname=db1344;charset=utf8';
	$user = 'my1344';
	$password = 'zjklwjxq';
 
try{
	$dbh = new PDO($dsn, $user, $password);
	//echo "接続成功";
	
	$sql = 'SELECT * FROM PlayerInfo';
	$statement = $dbh -> query($sql);
	
	//レコード件数取得
	$row_count = $statement->rowCount();
	
	while($row = $statement->fetch()){
		$rows[] = $row;
	}	
	//データベース接続切断
	$dbh = null;
    
}catch (PDOException $e){
	print('Error:'.$e->getMessage());
	die();
}
 
?>
 
<!DOCTYPE html>
<html>
<head>
<title>遊んでくれてありがとう</title>
<meta charset="utf-8">
<style>
	body{
			background-image: url(asset/heaven.jpg);
			background-size: cover;
            background-repeat: no-repeat;
            text-align: center;
            padding-top: 50px;
		}
</style>
</head>
<body>
<h1>皆のクリア情報</h1> 
 
プレイ数：<?php echo $row_count; ?>
 
<table border='1' align="center">
<tr><td>id</td><td>プレイヤー名</td><td>移動回数</td><td>脱出したか</td><td>ガチャアイテム</td></tr>
 
<?php 
foreach($rows as $row){
?> 
<tr> 
    <td><?php echo $row['id']; ?></td> 
    <td><?php echo htmlspecialchars($row['name'],ENT_QUOTES,'UTF-8'); ?></td>
    <td><?php echo $row['count']; ?></td> 
    <td><?php echo $row['clear']; ?></td> 
    <td><?php echo $row['item_id']; ?></td> 
</tr> 
<?php 
} 
?>
 
</table>
<form action="Player.html" method="post">
           <input type="submit" value="OK!">
        </form>

</body>
</html>