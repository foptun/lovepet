
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    จัดการข้อมูลการเบิกของ
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
    <a href="index.php?menu=object-out-form-total-show" class="btn btn-info">เบิกของ</a>
    <!-- <h3 class="box-title">Data Table With Full Features</h3> -->
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>No.</th>
        <th>สิ่งของ</th>
        <th>รายละเอียด</th>
        <th>จำนวน</th>
        <th>วันที่</th>
        <th>ลบ</th>
      </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM tb_object_out ORDER BY(id) DESC";
        $query = $conn->query($sql);

        $no = 1;
        while ($row = $query->fetch_array()) {

        ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $row['name_object']; ?></td>
        <td><?php echo $row['detail']; ?></td>
        <td><?php echo number_format($row['qty']); ?></td>
        <td><?php echo $row['date']; ?></td>
        <td>
          <a href="index.php?menu=object-out-del&id=<?php echo $row['id'];?>" class="btn btn-danger" onclick="return confirm('ยืนยันการลบ!');"> ลบ </a>
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
