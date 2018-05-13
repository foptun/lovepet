
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    จัดการข้อมูลการเบิกเงิน
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
    <a href="index.php?menu=pay-out-form-add" class="btn btn-info">เบิกเงิน</a>
    <!-- <h3 class="box-title">Data Table With Full Features</h3> -->
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>No.</th>
        <th>ชื่อ - สกุล</th>
        <th>วันที่</th>
        <th>รายละเอียด</th>
        <th>จำนวนเงิน</th>
        <th>Edit</th>
        <th>Del</th>
      </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT u.first_name, u.last_name, po.* FROM tb_pay_out as po, tb_user as u WHERE po.user_id = u.id";
        $query = $conn->query($sql);

        $no = 1;
        while ($row = $query->fetch_array()) {
        ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $row['first_name'].' '.$row['last_name']; ?></td>
        <td><?php echo $row['date']; ?></td>
        <td><?php echo $row['detail']; ?></td>
        <td><?php echo number_format($row['money']); ?></td>
        
        <td>
          <a href="index.php?menu=pay-out-form-edit&id=<?php echo $row['id'];?>" class="btn btn-primary"> แก้ไข </a>
        </td>
        <td>
          <a href="index.php?menu=pay-out-del&id=<?php echo $row['id'];?>" class="btn btn-danger" onclick="return confirm('ยืนยันการลบ!');"> ลบ </a>
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
