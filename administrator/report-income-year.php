
<?php $date = $_POST['year']; ?>
<section class="content-header">
  <h1>
    รายงานรายรับ
  </h1>
</section>

<section class="content">
<div class="box box-success">
  <div style="padding: 25px;">
    <a href="index.php?menu=report-income-form"  class="btn btn-primary">กลับ</a>
  </div>
  
<div class="box-body">
  <h4>รายงานรายรับประจำปี <?php echo DateYearCookky($date); ?></h4>
 <table class="table table-bordered">
  <tr>
    <th>วันที่</th>
    <th>รายรับ</th>
    <th>คงเหลือ</th>
    <th>ชื่อ - สกุล</th>
  </tr>
   <?php $sql = "SELECT d.*, u.first_name, u.last_name  FROM tb_donate as d, tb_user as u  WHERE YEAR(d.date) = YEAR('$date') AND d.user_id = u.id  ORDER BY date(d.date)";
            $result = mysqli_query($conn, $sql);
            $total = 0;
            if (mysqli_num_rows($result) > 0){
              
           while($row = mysqli_fetch_array($result)) { 
              $total = ($total + $row['price']);
            ?>

            <tr>
              <td><?php echo DateCookky($row['date']); ?></td>
              <td><?php echo number_format($row['price']); ?></td>
              <td><?php echo number_format($total) ?></td>
              <td><?php echo $row['first_name']. ' '.$row['last_name']?></td>
            </tr>
 <?php } } ?>
 <tr>
    <th colspan="1">รวมทั้งหมด</th>
    <td><?php echo number_format($total) ?> บาท</td>
    <td></td>
    <td></td>
  </tr>
 </table>
</div>
</div>
</section>

<div class="pull-right" style="padding-right: 20px;">
  <a href="#" onclick="window.print();" class="btn btn-primary">พิมพ์รายงาน PDF</a>
</div>
