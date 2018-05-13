
<div class="container">

                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="index.php?menu=home">หน้าแรก</a>
                        </li>
                        <li>จัดการหมาแมว</li>
                    </ul>

                </div>


<div class="col-md-12">


<div class="box" id="contact">
    <section class="content">

  <a href="index.php?menu=user-find-home-form-add" class="btn btn-info" style="margin-bottom: 10px;">โพสหาบ้าน</a>


    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>No.</th>
        <th>ชื่อผู้โพส</th>
        <th>รูปภาพ</th>
        <th>รายละเอียด</th>
        <th>คนจอง</th>
        <th>จัดการคนจอง</th>
        <th width="11%">สถานะ</th>
        <th>Edit</th>
        <th>Del</th>
      </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT u.id as u_id, u.first_name, u.last_name, fh.* FROM tb_user AS u, tb_find_home AS fh WHERE u.id = fh.own_user_id AND u.id=".$_SESSION['user_id'];
        $query = $conn->query($sql);


        $no = 1;
        while ($row = $query->fetch_array()) {
        ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $row['first_name'].' '.$row['last_name']; ?></td>
        <td>
          <img src="upload/<?php echo $row['picture1']; ?>" alt="" width="100"> <br>
          <img src="upload/<?php echo $row['picture2']; ?>" alt="" width="100"><br>
          <img src="upload/<?php echo $row['picture3']; ?>" alt="" width="100">
        </td>
        <td><?php echo $row['detail']; ?></td>
        <td>
          <?php
        $sql2 = "SELECT * FROM tb_user  WHERE id =".$row['pick_user_id'];
        $query2 = $conn->query($sql2);
        $row2 = $query2->fetch_array();
        echo $row2['first_name'].' '.$row2['last_name'];
        ?>
        </td>
        <td>
          <a href="index.php?menu=user-find-home-del-pick&id=<?php echo $row['id']; ?>" class="btn btn-danger">ลบคนจอง</a>
        </td>
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
          
          <a href="index.php?menu=user-find-home-form-edit&id=<?php echo $row['id'];?>" class="btn btn-primary"> แก้ไข </a>
        </td>
        <td>
          <a href="index.php?menu=user-find-home-del&id=<?php echo $row['id'];?>" class="btn btn-danger" onclick="return confirm('ยืนยันการลบ!');"> ลบ </a>
        </td>
      </tr>
      <?php
    }
      ?>
      </tbody>
      <tfoot>
      <tr>
        <th>No.</th>
        <th>ชื่อผู้โพส</th>
        <th>รูปภาพ</th>
        <th>รายละเอียด</th>
        <th>คนจอง</th>
        <th>จัดการคนจอง</th>
        <th>สถานะ</th>
        <th>Edit</th>
        <th>Del</th>
      </tr>
      </tfoot>
    </table>

</div>
</div>
</section>
</div>
</div>
</div>

