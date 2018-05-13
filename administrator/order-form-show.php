<section class="content-header">
  <h1>
    จัดการข้อมูลการจอง
  </h1>
</section>

<section class="content">
  <div class="row">
    <div class="col-xs-12">

<div class="box">

  <div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>No.</th>
        <th>ชื่ - สกุล</th>
        <th>รูป</th>
        <th>รายละเอียด</th>
        <th>สถานะ</th>
        <th>ลบ</th>
      </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT u.first_name, u.last_name, fh.* FROM tb_user AS u, tb_find_home AS fh WHERE u.id = fh.pick_user_id AND fh.pick_user_id > 0";
        $query = $conn->query($sql);

        $no = 1;
        while ($row = $query->fetch_array()) {
        ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $row['first_name'].' '.$row['last_name']; ?></td>
        <td>
          <img src="../upload/<?php echo $row['picture1']; ?>" alt="" width="100">
        </td>
        <td><?php echo $row['detail']; ?></td>
        <td>
        <select class="form-control" onchange="openUrlOrder(<?php echo $row['id']; ?>,this.value);">
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
          <a href="index.php?menu=order-del&id=<?php echo $row['id'];?>" class="btn btn-danger" onclick="return confirm('ยืนยันการลบ!');"> ลบ </a>
        </td>
      </tr>
      <?php
    }
      ?>
      </tbody>
      
    </table>
  </div>
</div>
</div>
</div>
</section>