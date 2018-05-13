<section class="content">

  <?php
  $id = $_GET["id"];
  $sql = "UPDATE tb_find_home SET pick_user_id='0' WHERE id =".$id;

  $query = $conn->query($sql);
  if ($query) {

        ?>
        <script type="text/javascript">
          alert('ลบคนจองเรียบร้อย');
           window.location = "index.php?menu=user-find-home-form-show";
        </script>
        <?php
  }
  ?>

</div>
