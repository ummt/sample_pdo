<?php
$dbname = 'pdo_test'; // データベース名
$host = 'localhost';  // ホスト名
$user = 'dbuser'; // ユーザ名
$password = 'dbpass'; //パスワード

// データベース接続オブジェクトを生成
$dbh = new PDO("mysql:dbname={$dbname};host={$host}", $user, $password);

// SQL文の作成
$sql  = ' SELECT * FROM table_test ';

// SQL文のオブジェクトを取得
$stmt = $dbh->prepare($sql);

// SQL実行
$stmt->execute();

// 実行結果を配列で取得
$rows = $stmt->fetchAll();

// 配列を展開
foreach ($rows as $row) {
  echo $row['name'];  // データベースの値を取得
}

// データベース接続オブジェクトを破棄
$dbh = null;