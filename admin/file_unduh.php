<?php
include '../config/koneksi.php';
          $sql=mysql_query("SELECT * FROM surat WHERE kd_surat='$_GET[kd]'");
          $dt=mysql_fetch_array($sql);
              $tambah=$dt['status_download'] + 1;

mysql_query("UPDATE surat SET status_download='$tambah' WHERE kd_surat='$_GET[kd]'");
 ?>
 <script language="javascript">
     window.location.href = "<?php echo $dt['bukti_surat'] ?>";
 </script>
