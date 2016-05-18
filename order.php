<?php
	session_start();
	include "koneksi.php";

	if(isset($_POST['order'])){
		
		$b1 = $_POST['b1'];
		$b2 = $_POST['b2'];
		$b3 = $_POST['b3'];
		$b4 = $_POST['b4'];
		$b5 = $_POST['b5'];
		$b6 = $_POST['b6'];
		$jumlah=mysql_query("select max(id_costumer) fom costumer;");
		$jumlah_bayar=0;
		if ($b1 != 0) {
			$total=mysql_query("select harga_menu from menu where id_menu='BRG001';");
			$total=$total*$b1;
			$query=mysql_query("insert into transaksi values (null,$jumlah,$jumlah,'BRG001',null,$b1,$total);");
			mysql_query($query) or die("ERROR, insert gagal 1");
		}
		if ($b2 != 0) {
			$total=mysql_query("select harga_menu from menu where id_menu='BRG002';");
			$total=$total*$b2;
			$query=mysql_query("insert into transaksi values (null,$jumlah,$jumlah,'BRG002',null,$b2,$total);");
			mysql_query($query) or die("ERROR, insert gagal 2");
		}
		if ($b3 != 0) {
			$total=mysql_query("select harga_menu from menu where id_menu='BRG003';");
			$total=$total*$b3;
			$query=mysql_query("insert into transaksi values (null,$jumlah,$jumlah,'BRG003',null,$b3,$total);");
			mysql_query($query) or die("ERROR, insert gagal 3");
		}
		if ($b4 != 0) {
			$total=mysql_query("select harga_menu from menu where id_menu='BRG004';");
			$total=$total*$b4;
			$query=mysql_query("insert into transaksi values (null,$jumlah,$jumlah,'BRG004',null,$b4,$total);");
			mysql_query($query) or die("ERROR, insert gagal 4");
		}
		if ($b5 != 0) {
			$total=mysql_query("select harga_menu from menu where id_menu='BRG005';");
			$total=$total*$b5;
			$query=mysql_query("insert into transaksi values (null,$jumlah,$jumlah,'BRG002',null,$b5,$total);");
			mysql_query($query) or die("ERROR, insert gagal 5");
		}
		if ($b6 != 0) {
			$total=mysql_query("select harga_menu from menu where id_menu='BRG006';");
			$total=$total*$b6;
			$query=mysql_query("insert into transaksi values (null,$jumlah,$jumlah,'BRG006',null,$b6,$total);");
			mysql_query($query) or die("ERROR, insert gagal 6");
		}
	
		header('location:detail.php');
	}
?>