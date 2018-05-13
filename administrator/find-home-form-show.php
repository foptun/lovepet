
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    จัดการหมาแมวหาบ้าน
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
    <a href="index.php?menu=find-home-form-add" class="btn btn-info">โพสหาบ้าน</a>
    <!-- <h3 class="box-title">Data Table With Full Features</h3> -->
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>No.</th>
        <th>ชื่อผู้โพส</th>
        <th width="35%">รูปภาพ</th>
        <th>รายละเอียด</th>
        <th width="11%">สถานะ</th>
        <th>Edit</th>
        <th>Del</th>
      </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT u.first_name, u.last_name, fh.* FROM tb_user AS u, tb_find_home AS fh WHERE u.id = fh.own_user_id AND pick_user_id = 0";
        $query = $conn->query($sql);

        $no = 1;
        while ($row = $query->fetch_array()) {
        ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $row['first_name'].' '.$row['last_name']; ?></td>
        <td>
          <img src="../upload/<?php echo $row['picture1']; ?>" alt="" width="100">
          <img src="../upload/<?php echo $row['picture2']; ?>" alt="" width="100">
          <img src="../upload/<?php echo $row['picture3']; ?>" alt="" width="100">
        </td>
        <td><?php echo $row['detail']; ?></td>
        <td>
          <select class="form-control" onchange="openUrl(<?php echo $row['id']; ?>,this.value);">
            <?php if($row['status'] == 'รับแล้ว'){?>
              <option value="รับแล้ว" selected>รับแล้ว</option>
              <option value="ยังไม่รับ">ยังไม่รับ</option>
            <?php } else{?>
              <option value="รับแล้ว">รับแล้ว</option>
              <option value="ยังไม่รับ" selected>ยังไม่รับ</option>
            <?php } ?>
          </select>
        </td>
        <td>
          <a href="index.php?menu=find-home-form-edit&id=<?php echo $row['id'];?>" class="btn btn-primary"> แก้ไข </a>
        </td>
        <td>
          <a href="index.php?menu=find-home-del&id=<?php echo $row['id'];?>" class="btn btn-danger" onclick="return confirm('ยืนยันการลบ!');"> ลบ </a>
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
