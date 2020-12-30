<!DOCTYPE html>
<!-- http://localhost/php/PHP_Document/P00510_Controle_if/P00510_If.php -->
<!-- http://lifeplan-it/php_Example/php0000_base.php -->
<!-- FONT "Arial" -->

<html lang="ja">
    <head>
        <META charset="UTF-8">
        <title>php0000_base.php</title>
        <style type="text/css">
	h1{color:green ; }
	#Overview_title	    {color:blue;  background-color:lightcyan; font-size: 24px;  }
	#Explanation_title  {color:blue;  background-color:lightcyan; font-size: 24px;  }
	#Overview_contents  {color:black; background-color:white;    font-size: 18px;   }
	#Source_title	    {color:blue;  background-color:lightcyan; font-size: 24px;  }
	#Source_code	    {color:black; background-color:white;    font-size: 18px;   }
	#Explanation_title  {color:blue;  background-color:lightcyan; font-size: 24px;  }
	#Explanation_contents  {color:black; background-color:white; font-size: 18px;  }
	#Execution_title    {color:blue;  background-color:lightcyan; font-size: 24px;  }
	#Execution_result   {color:black; background-color:white;    font-size: 18px;  }
	#Footer_References  {color:blue;  background-color:lightcyan; font-size: 24px;  }
 	</style -->
        <script> <!-- スクリプトを記述 --></script>
    </head>
<body>
<header>
<h1>PHP IF文　基本コード　</h1>
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

<h2>PHP IF文　基本コード</h2></header>
<h3 id="Overview_title">概要</h3>
<dev id="Overview_contents">
     <pre>
	IF文の基本表記です。
     </pre>
</dev>
<!--more-->
<h3 id="Explanation_title">解説</h3>
<dev id="Explanation_contents">
     <pre>
	偽（False）の時　else 以降を実行します。
     </pre>
</dev>
<h3 id="Source_title">ソースコード</h3>
<dev id="Source_code">
     <pre id="block-code">
     <code>
     &lt?php
	$i  =     100;
	if (  $i == 100 ) {
		print(  ' $i は100です ' ."\n"  ) ;
	}  else {
		print(  ' $i は100以外です '  ) ;
	} ;
     ?&gt
     </code>
     </pre>
</dev>

<h3 id="Execution_title">実行結果</h3>
<dev id="Execution_result">
<pre>
     <?php
	$i  =     100;
	if (  $i == 100 ) {
		print(  ' $i は100です ' ."\n"  ) ;
	}  else {
		print(  ' $i は100以外です '  ) ;
	} ;
     ?>
<?php

?>

</pre>
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
