
<div class="container">

                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="index.php?menu=home">หน้าแรก</a></li>
                        <li>รายงานบัญชีการบริจาก</li>
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
      	<?php $date = $_GET['date']; ?>
        <?php
        $sql = "SELECT o.*, u.first_name, u.last_name FROM tb_donate as o, tb_user as u WHERE o.user_id = u.id  AND  status = 'อนุมัติ' AND MONTH(date) = MONTH('$date') AND YEAR(date) = YEAR('$date') ORDER BY date(date)";
        $query = $conn->query($sql);

        $no = 1;
        while ($row = $query->fetch_array()) {
        ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $row['first_name'].' '.$row['last_name']; ?></td>
        <td><?php echo DateCookky($row['date']); ?></td>
        <td><?php echo number_format($row['price']); ?></td>
      </tr>
      <?php
    }
      ?>
      </tbody>
      
    </table>

</section>

<section class="content">
  <h3>สิ่งของ</h3>

    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>No.</th>
        <th>ชื่อ - สกุล</th>
        <th>วันที่</th>
        <th>สิ่งของ</th>
        <th>จำนวน</th>
      </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT o.*, u.first_name, u.last_name FROM tb_object as o, tb_user as u WHERE o.user_id = u.id AND MONTH(date) = MONTH('$date') AND YEAR(date) = YEAR('$date') ORDER BY date(date)";
        $query = $conn->query($sql);

        $no = 1;
        while ($row = $query->fetch_array()) {
        ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $row['first_name'].' '.$row['last_name']; ?></td>
        <td><?php echo DateCookky($row['date']); ?></td>
        <td><?php echo $row['name_object']; ?></td>
        <td><?php echo $row['qty']; ?></td>
      </tr>
      <?php
    }
      ?>
      </tbody>
      
    </table>
</section>

</div>
</div>
</div>

