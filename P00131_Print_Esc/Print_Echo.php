<!-- URL : http://localhost/php/PHP_Document/P00130_Print/Print_Echo.php -->
<pre>
<?php 
   // print は式　echo は文
   if ( print (" data \n") ) {
   	print (" print の戻り値は　1　\n");
   	print (" if  の判定は、偽=0 真=それ以外の数値　\n");
   } 
	print ( "print = Hello PHP \n" ) ;
	// print ( "Hello PHP", "Hello PHP" ); エラー

	echo  "echo = Hello PHP\n", "echo は複数の引数を指定できる", "\n" ;
?>
</pre>
