<?php
//データベースを取得する
function getDB($sql, $param=[]){
	//$dsn='mysql;dbname=db1376;host=localhost;charset=utf8';
	//$user='my1376';//ユーザー
	//$pw='xhdeagcy';//ユーザーログインパス
	$dsn='mysql:dbname=db_test;host=localhost;charset=utf8';//localhost
	$user='senpai';//ユーザー	
	$pw='indocurry';//ユーザーログインパス

	$dbh = new PDO($dsn, $user, $pw);
	$sth = $dbh->prepare($sql);
	$sth->execute($param);
	return( $sth->fetch(PDO::FETCH_ASSOC) );
}
