<?php
$host = 'sql213.yabi.me';
$dbuser ='yabi_29197924';
$dbpassword = 'xdr3bhu7';
$dbname = 'yabi_29197924_RJC';
$link = mysqli_connect($host,$dbuser,$dbpassword,$dbname);
if($link){
    mysqli_query($link,'SET NAMES uff8');

    $SQL = "INSERT INTO rjc_db(fitem, ftel, fnote) VALUES ('user2','2345678','test 02')";
    
    mysql_query($SQL); 

    echo "正確連接資料庫";
}
else {
    echo "不正確連接資料庫</br>" . mysqli_connect_error();
}
?>