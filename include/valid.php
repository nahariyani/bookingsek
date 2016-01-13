
<?php
session_start();
if(!isset($_SESSION['UserName'])){
  include_once '../../include/config.php';
  ?>  
    <script>
      alert('Akses ditolak! silahkan login terlebih dahulu.');
      location.href='../login/';
    </script>
  <?
}
?>