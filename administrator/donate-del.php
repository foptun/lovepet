<section class="content">

  <?php
  $id = $_GET["id"];
  $sql = "DELETE FROM tb_donate WHERE id ='$id' ";

  $query = $conn->query($sql);
  if ($query) {

        ?>
        <script type="text/javascript">
           window.location = "index.php?menu=donate-form-show";
        </script>
        <?php
  }
  ?>

</div>
