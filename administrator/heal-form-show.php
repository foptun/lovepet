
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    รักษาหมาแมว
  </h1>

</section>

<!-- Main content -->
<section class="content">
  <!-- Small boxes (Stat box) -->

  <!-- Main row -->
  <div class="row">

    <section class="content">
      <div class="row">
        <div class="col-xs-12">

<!-- ccccc -->





<div class="box">

  <div class="box-header">
    <a href="index.php?menu=heal-find-form-show" class="btn btn-info">รักษาหมาแมว</a>
    <!-- <h3 class="box-title">Data Table With Full Features</h3> -->
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>No.</th>
        <th>รูปภาพ</th>
        <th>รักษา</th>
        <th>รายละเอียด</th>
        <th>Del</th>
      </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM tb_heal_pet ORDER BY(id) DESC";
        $query = $conn->query($sql);

        $no = 1;
        while ($row = $query->fetch_array()) {
          $find_home_id = $row['find_home_id'];
        ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td>
        <?php
           $sqlImg = "SELECT * FROM tb_find_home WHERE id = '$find_home_id' ";
           $rsImg = mysqli_query($conn, $sqlImg);
           $rowImg = mysqli_fetch_array($rsImg);
        ?>
          <img src="../upload/<?php echo $rowImg['picture1']; ?>" alt="" width="100">
        </td>
        <td><?php echo $row['title']; ?></td>
        <td><?php echo $row['detail']; ?></td>

        <td>
          <a href="index.php?menu=heal-del&id=<?php echo $row['id'];?>" class="btn btn-danger" onclick="return confirm('ยืนยันการลบ!');"> ลบ </a>
        </td>
      </tr>
      <?php
    }
      ?>
      </tbody>
      
    </table>
  </div>
  <!-- /.box-body -->
</div>
<!-- /.box -->






 <!-- ccc -->



        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>

  </div>
  <!-- /.row (main row) -->

</section>
<!-- /.content -->
<!-- </div> -->
