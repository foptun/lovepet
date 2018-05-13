
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
    <a href="index.php?menu=donate-object-form-add" class="btn btn-info">เพิ่มผู้บริจาก</a>
    <!-- <h3 class="box-title">Data Table With Full Features</h3> -->
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>No.</th>
        <th>ชื่อผู้บริจาก</th>
        <th>สิ่งของ</th>
        <th>จำนวน</th>
        <th>Edit</th>
        <th>Del</th>
      </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT o.*, u.first_name as u_first_name, u.last_name as u_last_name FROM tb_object as o, tb_user u WHERE o.user_id = u.id";
        $query = $conn->query($sql);

        $no = 1;
        while ($row = $query->fetch_array()) {
        
        ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td>
          <?php if($row['user_id'] == 0){ ?>
          <?php echo $row['first_name'].' '.$row['last_name']; ?>
          <?php }else {?>
          <?php echo $row['u_first_name'].' '.$row['u_last_name']; ?>
          <?php }?>
          </td>
        <td><?php echo $row['name_object']; ?></td>
        <td><?php echo number_format($row['qty']); ?></td>
        <td>
          <a href="index.php?menu=donate-object-form-edit&id=<?php echo $row['id'];?>" class="btn btn-primary"> แก้ไข </a>
        </td>
        <td>
          <a href="index.php?menu=donate-object-del&id=<?php echo $row['id'];?>" class="btn btn-danger" onclick="return confirm('ยืนยันการลบ!');"> ลบ </a>
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
