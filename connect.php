<?php
	/*$Connect = mysqli_connect("localhost","root","","qlbh") or die("Lỗi".mysqli_error($Connect));
	
	mysqli_query($Connect,'SET NAMES "utf8"');
	//mysqli_close($Connect);*/
	$Connect = pg_connect("postgres://vfudnfwblbrwvd:ead8e22cdfd5f3e3ff54a9ca2e5b008f2b6a098e645c6e64caa2557197a3a8f1@ec2-52-201-72-91.compute-1.amazonaws.com:5432/d25bth0sm14ie");
    //$Connect = pg_connect("host=localhost port=5432 dbname=postgres");
	//$Connect = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=123456");
	
    if (!$Connect) {
        die("Connection failed");
    }
?>
