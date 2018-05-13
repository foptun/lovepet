
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
    <a href="index.php?menu=object-out-form-show" class="btn btn-info">กลับ</a>
    <!-- <h3 class="box-title">Data Table With Full Features</h3> -->
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>No.</th>
        <th>สิ่งของ</th>
        <th>จำนวนทั้งหมด</th>
        <th>จำนวนที่ใช้ไป</th>
        <th>เหลือจำนวน</th>
        <th>เบิก</th>
      </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT id,name_object,SUM(qty) as qty FROM tb_object GROUP BY(name_object)";
        $query = $conn->query($sql);

        $no = 1;

        while ($row = $query->fetch_array()) {
          $name_object = $row['name_object'];
          $qty = 0;
          $sql2 = "SELECT SUM(tb_object_out.qty) as qty, tb_object_out.name_object
                FROM tb_object_out 
                WHERE tb_object_out.name_object = '$name_object'
                GROUP BY(tb_object_out.name_object)";
        $query2 = $conn->query($sql2);
        $row2 = $query2->fetch_array();
        $qty = $row2['qty'];

        ?>
      <tr>
        <td><?php echo $no++.' '; ?></td>
        
        <td><?php echo $row['name_object'] ?></td>
        <td><?php echo number_format(($row['qty'])); ?></td>
        <td><?php echo number_format(($qty)); ?></td>
        <td><?php echo number_format(($row['qty']-$qty)); ?></td>
        <td>
          <a href="index.php?menu=object-out-form-add&id=<?php echo $row['id'];?>&name_object=<?php echo $row['name_object'];?>&qty=<?php echo ($row['qty']-$qty)?>" class="btn btn-primary"> เบิก </a>
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
