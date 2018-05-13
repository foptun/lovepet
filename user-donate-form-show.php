
<div class="container">

                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="index.php?menu=home">หน้าแรก</a>
                        </li>
                        <li>ประวัติการบริจาก</li>
                    </ul>

                </div>


<div class="col-md-12">


<div class="box" id="contact">
    <section class="content">
      <h3>เงินสด</h3>

    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>No.</th>
        <th>ชื่อ - สกุล</th>
        <th>วันที่</th>
        <th>จำนวนเงิน</th>
      </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT tb_user.first_name as f_name, tb_user.last_name as l_name,tb_donate.* FROM tb_donate,tb_user WHERE 
        tb_donate.user_id = tb_user.id
        AND tb_donate.user_id = ".$_SESSION['user_id']." AND tb_donate.status = 'อนุมัติ'";
        $query = $conn->query($sql);

        $no = 1;
        while ($row = $query->fetch_array()) {
        ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $row['f_name'].' '.$row['l_name']; ?></td>
        <td><?php echo $row['date']; ?></td>
        <td><?php echo number_format($row['price']); ?></td>
      </tr>
      <?php
    }
      ?>
      </tbody>
      <tfoot>
      <tr>
        <th>No.</th>
        <th>ชื่อ - สกุล</th>
        <th>วันที่</th>
        <th>จำนวนเงิน</th>
      </tr>
      </tfoot>
    </table>

</section>

</div>
</div>
</div>

