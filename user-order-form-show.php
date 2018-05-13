
<div class="container">

                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="index.php?menu=home">หน้าแรก</a>
                        </li>
                        <li>จองหมาแมว</li>
                    </ul>

                </div>


<div class="col-md-12">


<div class="box" id="contact">
    <section class="content">


    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>No.</th>
        <th width="10%">ชื่อผู้โพส</th>
        <th width="35%">รูปภาพ</th>
        <th>รายละเอียด</th>
      </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT u.id, u.first_name, u.last_name, fh.* FROM tb_user AS u, tb_find_home AS fh WHERE u.id = fh.own_user_id AND fh.pick_user_id=".$_SESSION['user_id'];
        $query = $conn->query($sql);

        $no = 1;
        while ($row = $query->fetch_array()) {
        ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $row['first_name'].' '.$row['last_name']; ?></td>
        <td>
          <img src="upload/<?php echo $row['picture1']; ?>" alt="" width="100">
          <img src="upload/<?php echo $row['picture2']; ?>" alt="" width="100">
          <img src="upload/<?php echo $row['picture3']; ?>" alt="" width="100">
        </td>
        <td><?php echo $row['detail']; ?></td>
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
      </tr>
      </tfoot>
    </table>

</div>
</div>
</section>
</div>
</div>
</div>

