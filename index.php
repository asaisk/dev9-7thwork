<p class="search"><input type="text" id="search" ></p>
<button id="send">送信</button>
<script>
 $("#send").on ("click",function(){
	var get_search = $("#search").val();
alert(get_search);
 });
 
 </script>


<?php 
//DB定義
const DB = "";
const DB_ID = "root";
const DB_PW = "";
const DB_NAME = "";

//PDOでデータベース接続
try {
	//$pdo= new PDO('mysql:host=locahost;dbname=gsblog_db;charset=utf8','root');
	$pdo = new PDO("mysql:host=localhost;dbname=gs_db;charset=utf8",'root');
}catch (PDOException $e) {
    exit( 'DbConnectError:' . $e->getMessage());
}

// 実行したいSQL文（最新順番3つ取得）
$sql='SELECT * FROM gs_an_table order by time desc Limit 100';
//MySQLで実行したいSQLセット。プリペアーステートメントで後から値は入れる
$stmt = $pdo->prepare($sql);
$flag = $stmt->execute();

if($flag==false){
    $error = $stmt->errorInfo();
    exit("ErrorQuery:".$error[2]);
}else{

?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/sanitize.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>



<!-- <p class="search"><input type="text" id="search" ></p>
<button id="send">送信</button>
<script>
 $("#send").on ("click",function(){
	var get_search = $("#search").val();
alert(get_search);
 });
 
 </script> -->



<!--書評-->
<div class="section section__work" id="work">
	<h2 class="content-title">書評</h2>	
	<div class="wrapper">
		<ul class="work-list">


        <?php
       while($result= $stmt->fetch(PDO::FETCH_ASSOC)){
		 



        ?>



			<li class="work-item">
				
				<h3 class="work-title">書籍名： <?php echo $result['title'];?></h3>
				
										
				
				
				<a href="<?php print $result['book_URL'];?>"><?php print $result['book_URL'];?></a>
				<!-- <p><?php echo $result['book_URL'];?></p> -->
				<p>評価:<?php echo $result['comment'];?></p>
				<p>更新時間：<?php echo $result['time'];?></p>
				<!-- <div class="work-thumb">
					<img src= "book_URL" alt="書物画像">
				</div> -->
			 </li> 
			 <?php 
}
?>

		</ul> 
	   <?php}?>
	</div>
	<!-- <a href="#" class="btn-more">作品集をもっと見る</a> -->
</div>
<!--// Works-->

<!--footer-->
<!-- <div class="footer">
	<p class="copyrights">copyrights 2017 Tatsuya Kosuge All Rights Reserved.</p>
</div> -->
<!--// footer-->

</body>
</html>

	   <?php 
}
?>

 
