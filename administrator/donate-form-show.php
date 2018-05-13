
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    จัดการผู้บริจาก
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
    <a href="index.php?menu=donate-form-add" class="btn btn-info">เพิ่มผู้บริจาก</a>
    <!-- <h3 class="box-title">Data Table With Full Features</h3> -->
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>No.</th>
        <th>ชื่อผู้บริจาก</th>
        <th>ประเภท</th>
        <th>จำนวนเงิน</th>
        <th>ใบเสร็จ</th>
        <th>สถานะ</th>
        <th>Edit</th>
        <th>Del</th>
      </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM tb_donate ORDER BY(id) DESC";
        $query = $conn->query($sql);

        $no = 1;
        while ($row = $query->fetch_array()) {
        ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $row['first_name'].' '.$row['last_name']; ?></td>
        <td><?php echo $row['type']; ?></td>
        <td><?php echo number_format($row['price']); ?></td>
        <td>
            <img src="../upload/<?php echo $row['bill']; ?>" alt="" height="200">
          </td>
        <td>
          <select class="form-control" onchange="openUrld(<?php echo $row['id']; ?>,this.value);">
            <?php if($row['status'] == 'อนุมัติ'){?>
              <option value="อนุมัติ" selected>อนุมัติ</option>
              <option value="ยังไม่อนุมัติ">ยังไม่อนุมัติ</option>
            <?php } else{?>
              <option value="อนุมัติ">อนุมัติ</option>
              <option value="ยังไม่อนุมัติ" selected>ยังไม่อนุมัติ</option>
            <?php } ?>
          </select>
        </td>
        <td>
          <a href="index.php?menu=donate-form-edit&id=<?php echo $row['id'];?>" class="btn btn-primary"> แก้ไข </a>
        </td>
        <td>
          <a href="index.php?menu=donate-del&id=<?php echo $row['id'];?>" class="btn btn-danger" onclick="return confirm('ยืนยันการลบ!');"> ลบ </a>
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
