
<?php $date = $_POST['year']; ?>
<section class="content-header">
  <h1>
    รายงานผู้บริจากเงิน
  </h1>
</section>

<section class="content">
<div class="box box-success">
  <div style="padding: 25px;">
    <a href="index.php?menu=report-donate-form"  class="btn btn-primary">กลับ</a>
  </div>
  
<div class="box-body">
  <h4>รายงานรายจ่ายประจำปี <?php echo DateYearCookky($date); ?></h4>
 <table class="table table-bordered">
  <tr>
    <th>วันที่</th>
    <th>ชื่อ - สกุล</th>
    <th>จำนวนเงิน</th>
  </tr>
   <?php $sql = "SELECT o.*, u.first_name, u.last_name FROM tb_donate as o, tb_user as u WHERE o.user_id = u.id  AND  status = 'อนุมัติ' AND YEAR(date) = YEAR('$date') ORDER BY date(date)";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0){
              $total = 0;
           while($row = mysqli_fetch_array($result)) { 
              $total = ($total + $row['price']);
            ?>

            <tr>
              <td><?php echo DateCookky($row['date']); ?></td>
              <td><?php echo $row['first_name'].' '.$row['last_name']; ?></td>
              <td><?php echo number_format($row['price']); ?></td>
            </tr>
 <?php } } ?>
 <tr>
    <th colspan="2">รวมทั้งหมด</th>
    <td><?php echo number_format($total) ?></td>
    <td></td>
  </tr>
 </table>
</div>
</div>
</section>

<div class="pull-right" style="padding-right: 20px;">
  <a href="#" onclick="window.print();" class="btn btn-primary">พิมพ์รายงาน PDF</a>
</div>
