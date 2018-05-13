
<?php $date = $_POST['year']; ?>
<section class="content-header">
  <h1>
    รายงานรายจ่าย
  </h1>
</section>

<section class="content">
<div class="box box-success">
  <div style="padding: 25px;">
    <a href="index.php?menu=report-expenses-form"  class="btn btn-primary">กลับ</a>
  </div>
  
<div class="box-body">
  <h4>รายงานรายจ่ายประจำปี <?php echo DateYearCookky($date); ?></h4>
 <table class="table table-bordered">
  <tr>
    <th>วันที่</th>
    <th>รายละเอียด</th>
    <th>รายจ่าย</th>
    <th>คงเหลือ</th>
  </tr>
   <?php $sql = "SELECT * FROM tb_pay_out  WHERE YEAR(date) = YEAR('$date')  ORDER BY date(date)";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0){
              $total = 0;
           while($row = mysqli_fetch_array($result)) { 
              $total = ($total + $row['money']);
            ?>

            <tr>
              <td><?php echo DateCookky($row['date']); ?></td>
              <td><?php echo $row['detail']; ?></td>
              <td><?php echo number_format($row['money']); ?></td>
              <td><?php echo number_format($total) ?></td>
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
