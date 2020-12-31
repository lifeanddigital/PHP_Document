<!DOCTYPE html>
<!-- http://localhost/php/PHP_Document/P00121_Comment/comment.php -->
<!-- http://lifeanddigital.net/php/PHP_Document/P00121_Comment/comment.php -->
<!-- FONT "Arial" -->

<html lang="ja">
    <head>
        <META charset="UTF-8">
        <title>php0000_base.php</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <!-- style type="text/css"> 	</style -->
        <script> <!-- スクリプトを記述 --></script>
    </head>
<body>
<header>
<h1>PHP コメントの書き方</h1>
	<nav>
	<ul>
	<li><a href="#Overview_title">概要</a></li>
	<li><a href="#Explanation_title">解説</a></li>
	<li><a href="#Source_title">ソースコード</a></li>
	<li><a href="#Execution_title">実行結果</a></li>
	<li><a href="#Footer_References">参考文献</a></li>
	</ul>
	</nav>
</header>
<main>

<h2>PHP コメントの書き方</h2></header>
<h3 id="Overview_title">概要</h3>
<dev id="Overview_contents">
	PHP　のコメントの書き方のサンプルコードです。
</dev>
<!--more-->
<h3 id="Explanation_title">解説</h3>
<dev id="Explanation_contents">
     <pre>
	コメントの記述方法
	// 以降の行はコメントになる
	#  以降の行はコメントになる
	/* */ で囲まれた範囲はコメントになる 
     </pre>
</dev>
<h3 id="Source_title">ソースコード</h3>
<dev id="Source_code">
     <pre id="block-code">
     <code>
	// コメントのテスト
	echo "test";
	# echo "test";
	// echo "test";
	/* echo "test"; */
     </code>
     </pre>
</dev>

<h3 id="Execution_title">実行結果</h3>
<dev id="Execution_result">
     <!-- PHPを記述 -->
	<?php
	// コメントのテスト
	echo "test";
	# echo "test";
	// echo "test";
	/* echo "test"; */
	?>
</dev>
</main>
<footer>
<h3 id="Footer_References">参考文献</h3>
<a href="http://www.htmq.com/" target="_blank"> HTMLについて</a><br>
<a href="http://jp.php.net/manual/ja/" target="_blank"> PHPについて</a /><br>
<h3 id="Footer_home">メインサイト</h3>
<a href="http://lifeplan-it.jp" target="_blank"> ライフプランニング</a /><br>
</footer>
</body>
</html>
