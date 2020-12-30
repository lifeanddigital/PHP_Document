<!DOCTYPE html>
<html lang="ja">
    <head>
        <META charset="UTF-8">
        <title>MariaDBへの接続テスト</title>
        <style>
        <!-- スタイルを記述 -->
        </style>

        <script>
        <!- スクリプトを記述 -->
        </script>
    </head>
<body>

<?php

$dsn = 'mysql:dbname=lp_sample;host=localhost';
$user = 'root';
$password = '';

try{
    $dbh = new PDO($dsn, $user, $password
		,  array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')
	);
    print('顧客番号'.',');
    print('顧客名'.',');
    print('電話番号');
    print('<br />');

    $sql = 'select * from 顧客マスタ';
    foreach ($dbh->query($sql) as $row) {
        print($row['顧客番号'].',');
        print($row['顧客名'].',');
        print($row['電話番号']);

        print('<br />');
    }
}catch (PDOException $e){
    print('Error:'.$e->getMessage());
    die();
}

$dbh = null;

?>

</body>
</html>