<?php
if(empty($_POST)) {
	header("Location: Player.html");
	exit();
}else{
	//名前入力判定
	if (!isset($_POST['player_name'])  || $_POST['player_name'] === "" ){
		$errors['name'] = "名前が入力されていません。";
	}
}
 
if(!isset($errors)){
	
	$dsn = 'mysql:host=localhost;dbname=db1344;charset=utf8';
	$user = 'my1344';
	$password = 'zjklwjxq';
 
	try{
        $dbh = new PDO($dsn, $user, $password);
        //$id=0;
		$statement = $dbh->prepare("INSERT INTO PlayerInfo (name,clear) VALUES (:name,true)");
	
		if($statement){
			$PLName = $_POST['player_name'];
			//プレースホルダへ実際の値を設定する
			$statement->bindValue(':name', $PLName, PDO::PARAM_STR);
		
			if(!$statement->execute()){
				print('Error:'.$statement->getMessage());
				$errors['error'] = "登録失敗しました。";
			}
			
			//データベース接続切断
			$dbh = null;	
		}
	
	}catch (PDOException $e){
		print('Error:'.$e->getMessage());
		$errors['error'] = "データベース接続失敗しました。";
	}
}
 
?>

<!DOCTYPE html>
<html>
<head>
<title>登録画面</title>
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
 
<?php if (!isset($errors)): ?>
<p><?=htmlspecialchars($PLName, ENT_QUOTES, 'UTF-8')."さんで登録いたしました。"?></p>
<?php elseif(isset($errors)): ?>
<?php
foreach($errors as $value){
	echo "<p>".$value."</p>";
}
?>
<?php endif; ?>
<form action="display.php" method="post">
           <input type="submit" value="OK!">
        </form>
</body>
</html>