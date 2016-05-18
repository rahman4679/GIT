<!DOCTYPE html>

<html>
<head>
  <title></title>
<script src="js/jquery.js"></script> 
  <script src="js/jquery.glide.js"></script>
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.css">
    <script type="text/javascript" src="js/MyJQ.js"></script>
    <script src="js/jquery.localScroll.min.js" type="text/javascript"></script>
  <script src="js/jquery.scrollTo.min.js" type="text/javascript"></script> 
    <script src="js/wow.min.js" type="text/javascript"></script> 

</head>
<body>
  <?php
  include 'header1.php'
?>


<div class="pesananwrapper">
  <table class="table" style="center">
    <thead>
      <tr>
        <th>Detail Transaksi Kopma_Order</th>
      </tr>
    </thead>
    <tbody>
    <?php
  		session_start();
		include "koneksi.php";
    	
    	$no=mysql_query("select max(id_costumer) from costumer;");
    	$no_trans=mysql_query("select no_transaksi from transaksi where id_costumer='$no';");
    	$nama=mysql_query("select nama_costumer from transaksi, costumer where costumer.id_costumer=trasaksi.id_costumer and transaksi.id_costumer='$no';");
    	$waktu=mysql_query("select waktu from transaksi where id_costumer='$no';");
    	$total=0;
    	$query=mysql_query("select menu.nama_menu, menu.harga_menu, transaksi.jumlah_pesanan, transaksi.total_harga from transaksi, menu where transaksi.id_menu=menu.id_menu and costumer.id_costumer=transaksi.id_costumer and transaksi.id_costumer=$no;");
    ?>
      <tr>
        <td>No Transaksi</td>
        <td>:</td>
        <td><?php echo $no_trans ?></td>
      </tr>
      <tr>
        <td>Nama Pembeli</td>
        <td>:</td>
        <td><?php echo $nama ?></td>
      </tr>
      <tr><?php while($data=mysql_fetch_array($query)){?>
        <td>Menu Pesanan</td>
        <td>:</td>
        <td><?php echo $data['nama_menu']?></td>
      </tr>
      <tr>
        <td>Harga</td>
        <td>:</td>
        <td><?php echo $data['harga_menu']?></td>
      </tr>
      <tr>
        <td>Jumlah Pesanan</td>
        <td>:</td>
        <td><?php echo $data['jumlah_pesanan']?></td>
      </tr>
       <tr>
        <td>Sub Total</td>
        <td>:</td>
        <td><?php echo $data['total_harga']?></td>
      </tr>
      <?php 
      	$bayar=$data['total_harga']*$data['jumlah_pesanan'];
      	$total=$total+$bayar;
      }
      ?>
       <tr>
        <td>waktu</td>
        <td>:</td>
        <td><?php echo $waktu ?></td>
      </tr>
      <tr>
        <td><b>TOTAL</b></td>
        <td><b>:</b></td>
        <td><b><?php echo $total ?></b></td>
      </tr>
    </tbody>
  </table>
</div>
<?php
  include 'footer.php'
?>
</body>
</html>