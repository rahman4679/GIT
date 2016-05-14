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
    <form role="form" action="order.php" method="post"> 
  <table class="table">
    <thead>
      <tr>
        <th>Nama</th>
        <th>Harga</th>
        <th>Jumlah</th>
      </tr>
    </thead>
    <tbody>
      <tr class="success">
        <td>Ayam Penyet</td>
        <td>Rp. 8.000</td>
        <td> <input type="number" placeholder="0" name="b1"> </td>
      </tr>
      <tr class="danger">
        <td>Nasi Goreng</td>
        <td>Rp. 6.000</td>
        <td> <input type="number" placeholder="0" name="b2"> </td>
      </tr>
      <tr class="info">
        <td>Kentang Goreng Balado</td>
        <td>Rp. 4.000</td>
        <td> <input type="number" placeholder="0" name="b3"> </td>
      </tr>
      <tr class="info">
        <td>Jus Jeruk</td>
        <td>Rp. 5.000</td>
        <td> <input type="number" placeholder="0" name="b4"> </td>
      </tr>
      <tr class="info">
        <td>Jus Alpukat</td>
        <td>Rp. 7.000</td>
        <td> <input type="number" placeholder="0" name="b5"> </td>
      </tr>
      <tr class="info">
        <td>Jus Mangga</td>
        <td>Rp. 7.000</td>
        <td> <input type="number" placeholder="0" name="b6"> </td>
      </tr>
    </tbody>
  </table>
  <button value="order" name="order" > Order </button>
  </form>
</div>

<?php
  include 'footer.php'
?>
</body>
</html>