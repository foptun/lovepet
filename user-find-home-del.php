<section class="content">

  <?php
  $id = $_GET["id"];
  $sql = "DELETE FROM tb_find_home WHERE id ='$id' ";

  $query = $conn->query($sql);
  if ($query) {

        ?>
        <script type="text/javascript">
           window.location = "index.php?menu=user-find-home-form-show";
        </script>
        <?php
  }
  ?>

</div>
