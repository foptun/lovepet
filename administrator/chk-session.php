<?php

if (!isset($_SESSION['user_id'])) {
   ?>
   <script type="text/javascript">
      window.location = '../';
   </script>
   <?php
}
?>