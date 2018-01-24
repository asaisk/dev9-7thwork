<?php 
//フォームのデータ受け取り
$title = $_POST["title"];
$book_URL = $_POST["book_URL"];
$comment = $_POST["comment"];



//DB定義
const DB = "";
const DB_ID = "root";
const DB_PW = "";
const DB_NAME = "";

//PDOでデータベース接続
try {
//$pdo= new PDO ('mysql:host=locahost;dbname=gsblog_db;charset=utf8','root'); 間違い
$pdo = new PDO("mysql:host=localhost;dbname=gs_db;charset=utf8",'root');
}catch (PDOException $e) {
    exit( 'DbConnectError:' . $e->getMessage());
}

// 実行したいSQL文
$sql="INSERT INTO gs_an_table (id,title,book_URL,comment,time) values(NULL,:title,:book_URL,:comment,sysdate())";

//MySQLで実行したいSQLセット。プリペアーステートメントで後から値は入れる
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':title',$title,PDO::PARAM_STR);
$stmt->bindValue(':book_URL',$book_URL,PDO::PARAM_STR);
$stmt->bindValue(':comment',$comment,PDO::PARAM_STR);

//実際に実行
$flag = $stmt->execute();

//実行完了した場合はentry.phpにリダイレクト
//失敗した場合はエラーメッセージ表示
if($flag==false){
    $error = $stmt->errorInfo();
    exit("ErrorQuery:".$error[2]);
}else{
header('Location: entry.php');
exit();
}

?>