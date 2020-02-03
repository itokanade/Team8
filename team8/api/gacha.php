<?php
require_once('DataBaseManager.php');

//idの最大値を取得（=アイテム最大数）
$data = getDB('select max(id) as maxid from GameItem');

//最初に取得するアイテム決定　(1~アイテム最大数の中で番号をランダムで取得)
$i = rand(1, $data['maxid']);

//アイテムの取得
$data = getDB('select name from GameItem where id=?', [$i]);

$param =[
	'name' => $data['name']
];
	echo json_encode($param);
	//return $data['name'];

?>
